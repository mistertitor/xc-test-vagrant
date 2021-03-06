<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Stripe\Model;

use XLite\Module\XC\Stripe\Main;

/**
 * Order model
 */
class Order extends \XLite\Model\Order implements \XLite\Base\IDecorator
{
    /**
     * Called when an order successfully placed by a client
     */
    public function processSucceed()
    {
        parent::processSucceed();

        if ($this->isStripeMethod($this->getPaymentMethod())) {
            // Unlock IPN processing for each transaction
            foreach ($this->getPaymentTransactions() as $transaction) {
                $transaction->unsetEntityLock(\XLite\Model\Payment\Transaction::LOCK_TYPE_IPN);
            }
        }
    }

    /**
     * Checks if order payment method is Stripe
     *
     * @param \XLite\Model\Payment\Method $method
     *
     * @return bool
     */
    public function isStripeMethod($method)
    {
        return null !== $method
            && in_array($method->getServiceName(), [Main::STRIPE_SERVICE_NAME, Main::STRIPE_CONNECT_SERVICE_NAME], true);
    }
}
