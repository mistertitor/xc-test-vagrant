<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\Qualiteam\PaymentModule\Model\Payment\Processor;

/**
 * CardLink payment processor
 */
class CardLink extends \XLite\Model\Payment\Base\WebBased
{
    /**
     * Get return request owner transaction or null
     *
     * @return \XLite\Model\Payment\Transaction|void
     */
    public function getReturnOwnerTransaction()
    {
        return \XLite\Core\Request::getInstance()->cl_txnid
            ? \XLite\Core\Database::getRepo('XLite\Model\Payment\Transaction')->findOneByPublicTxnId(\XLite\Core\Request::getInstance()->cl_txnid)
            : null;
    }

    /**
     * Generate transaction ID
     *
     * @param \XLite\Model\Payment\Transaction $transaction Transaction
     * @param string                           $prefix      Prefix OPTIONAL
     *
     * @return string
     */
    public function generateTransactionId(\XLite\Model\Payment\Transaction $transaction, $prefix = null)
    {
        return substr(str_replace('-', '', parent::generateTransactionId($transaction, $prefix)), 0, 40);
    }

    /**
     * Get settings widget or template
     *
     * @return string Widget class name or template path
     */
    public function getSettingsWidget()
    {
        return 'modules/Qualiteam/PaymentModule/config.twig';
    }

    /**
     * Process return
     *
     * @param \XLite\Model\Payment\Transaction $transaction Return-owner transaction
     *
     * @return void
     */
    public function processReturn(\XLite\Model\Payment\Transaction $transaction)
    {
        parent::processReturn($transaction);

        $status = $transaction::STATUS_FAILED;

        $request = \XLite\Core\Request::getInstance();

        $this->log([
            'action' => 'Response',
            'fields' => $request->getPostData()
        ]);

        if ($request->isPost() && isset($request->txId) && $request->paymentTotal && $transaction->getStatus() == $transaction::STATUS_INPROGRESS) {

            switch ($request->status) {
                case 'CAPTURED':
                case 'AUTHORIZED':
                    $status = $transaction::STATUS_SUCCESS;
                    break;
                case 'CANCELED':
                    $status = $transaction::STATUS_CANCELED;
                    break;
                case 'REFUSED':
                case 'ERROR':
                    $status = $transaction::STATUS_FAILED;
                    break;
            }

            $this->saveDataFromRequest();

            // Amount checking
            if (isset($request->orderAmount) && !$this->checkTotal($request->orderAmount)) {
                $status = $transaction::STATUS_FAILED;
            }

            if (isset($request->message)) {
                $this->transaction->setNote($request->message);
            }

            // Digest checking
            if ($status == $transaction::STATUS_SUCCESS && isset($request->digest)) {

                $digest = '';
                foreach ($request->getPostData() as $key => $value) {
                    if ($key != 'digest') {
                        $digest .= $value;
                    }
                }
                $digest .= $this->getSetting('sharedSecret');
                $digest = base64_encode(sha1($digest, true));

                if ($digest != $request->digest) {
                    $status = $transaction::STATUS_FAILED;
                    $this->setDetail('digest_checking', 'failed', 'Digest checking');
                }
            }
        }
        $this->transaction->setStatus($status);
    }

    /**
     * Check - payment method is configured or not
     *
     * @param \XLite\Model\Payment\Method $method Payment method
     *
     * @return boolean
     */
    public function isConfigured(\XLite\Model\Payment\Method $method)
    {
        return parent::isConfigured($method)
            && $method->getSetting('mid')
            && $method->getSetting('sharedSecret');
    }

    /**
     * Get payment method admin zone icon URL
     *
     * @param \XLite\Model\Payment\Method $method Payment method
     *
     * @return string
     */
    public function getAdminIconURL(\XLite\Model\Payment\Method $method)
    {
        return true;
    }


    /**
     * Get redirect form URL
     *
     * @return string
     */
    protected function getFormURL()
    {
        return ($this->getSetting('mode') == 'test')
            ? 'https://euro.test.modirum.com/vpos/shophandlermpi'
            : 'https://vpos.eurocommerce.gr/vpos/shophandlermpi';
    }

    /**
     * Get redirect form fields list
     *
     * @return array
     */
    protected function getFormFields()
    {
        $billingAddress = $this->getProfile()->getBillingAddress();
        $shippingAddress = $this->getProfile()->getShippingAddress();
        if ($shippingAddress) {

            $shipCountryCode = $shippingAddress->getCountry()
                ? $shippingAddress->getCountry()->getCode()
                : '';
        }
        $order = $this->getOrder();
        $amount = $order->getCurrency()->roundValue($this->transaction->getValue());
        $currency = $order->getCurrency()->getCode();

        $fields = array(
            'mid'                   => $this->getSetting('mid'),
            'lang'                  => \XLite::getDefaultLanguage(),
            'orderid'               => $this->getTransactionId(),
            'orderDesc'             => 'x-cart order',
            'orderAmount'           => $amount,
            'currency'              => $currency,
            'payerEmail'            => $this->getProfile()->getLogin(),
            'billCountry'           => $billingAddress->getCountry() ? $billingAddress->getCountry()->getCode() : '',
            'billState'             => $billingAddress->getState()->getState(),
            'billZip'               => $billingAddress->getZipcode(),
            'billCity'              => $billingAddress->getCity(),
            'billAddress'           => $billingAddress->getStreet(),
            'shipCountry'           => ($shippingAddress) ? $shipCountryCode : '',
            'shipState'             => ($shippingAddress) ? $shippingAddress->getState()->getState() : '',
            'shipZip'               => ($shippingAddress) ? $shippingAddress->getZipcode() : '',
            'shipCity'              => ($shippingAddress) ? $shippingAddress->getCity() : '',
            'shipAddress'           => ($shippingAddress) ? $shippingAddress->getStreet() : '',
            'confirmUrl'            => $this->getReturnURL('cl_txnid', true),
            'cancelUrl'             => $this->getReturnURL('cl_txnid', true, true),
        );
        $fields['digest'] = $this->getDigest($fields);

        $this->log([
            'action' => 'Request',
            'fields' => $fields
        ]);
        return $fields;
    }

    /**
     * Define saved into transaction data schema
     * @param array $fields  form fields
     * @return string
     */
    protected function getDigest($fields)
    {
        $result = '';
        if (!empty($fields)) {
            foreach ($fields as $name => $value) {
                $result .= $value;
            }
        }

        $result = base64_encode(sha1(utf8_encode($result . $this->getSetting('sharedSecret')), true));
        return $result;
    }

    /**
     * Define saved into transaction data schema
     *
     * @return array
     */
    protected function defineSavedData()
    {
        return array(
            'txId'        => 'Transaction id',
            'status'      => 'Status',
            'message'     => 'Message',
            'riskScore'   => 'Possible risk code',
            'paymentRef'  => 'Payment reference',
        );
    }

    /**
     * Logging the data under ESelectHPP
     * Available if developer_mode is on in the config file
     *
     * @param mixed $data Data for log
     *
     * @return void
     */
    protected static function log($data)
    {
        if (LC_DEVELOPER_MODE) {
            \XLite\Logger::logCustom('Cardlink', $data);
        }
    }

}
