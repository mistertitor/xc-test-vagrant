<?php

namespace XLite\Model\Proxy\__CG__\XLite\Model\Shipping;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Markup extends \XLite\Model\Shipping\Markup implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

        return parent::__set($name, $value);
    }

    /**
     * {@inheritDoc}
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

        return parent::__isset($name);

    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'markup_id', 'min_weight', 'max_weight', 'min_total', 'max_total', 'min_discounted_total', 'max_discounted_total', 'min_items', 'max_items', 'markup_flat', 'markup_percent', 'markup_per_item', 'markup_per_weight', 'shipping_method', 'zone', 'markupValue', '_previous_state'];
        }

        return ['__isInitialized__', 'markup_id', 'min_weight', 'max_weight', 'min_total', 'max_total', 'min_discounted_total', 'max_discounted_total', 'min_items', 'max_items', 'markup_flat', 'markup_percent', 'markup_per_item', 'markup_per_weight', 'shipping_method', 'zone', 'markupValue', '_previous_state'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Markup $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function hasRates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRates', []);

        return parent::hasRates();
    }

    /**
     * {@inheritDoc}
     */
    public function getMarkupValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarkupValue', []);

        return parent::getMarkupValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarkupValue($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarkupValue', [$value]);

        return parent::setMarkupValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeightRange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeightRange', []);

        return parent::getWeightRange();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeightRange($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeightRange', [$value]);

        return parent::setWeightRange($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtotalRange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtotalRange', []);

        return parent::getSubtotalRange();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubtotalRange($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubtotalRange', [$value]);

        return parent::setSubtotalRange($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountedSubtotalRange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountedSubtotalRange', []);

        return parent::getDiscountedSubtotalRange();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountedSubtotalRange($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountedSubtotalRange', [$value]);

        return parent::setDiscountedSubtotalRange($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemsRange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemsRange', []);

        return parent::getItemsRange();
    }

    /**
     * {@inheritDoc}
     */
    public function setItemsRange($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setItemsRange', [$value]);

        return parent::setItemsRange($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarkupId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarkupId', []);

        return parent::getMarkupId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinWeight($minWeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinWeight', [$minWeight]);

        return parent::setMinWeight($minWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinWeight', []);

        return parent::getMinWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxWeight($maxWeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxWeight', [$maxWeight]);

        return parent::setMaxWeight($maxWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxWeight', []);

        return parent::getMaxWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinTotal($minTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinTotal', [$minTotal]);

        return parent::setMinTotal($minTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinTotal', []);

        return parent::getMinTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxTotal($maxTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxTotal', [$maxTotal]);

        return parent::setMaxTotal($maxTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxTotal', []);

        return parent::getMaxTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinDiscountedTotal($minDiscountedTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinDiscountedTotal', [$minDiscountedTotal]);

        return parent::setMinDiscountedTotal($minDiscountedTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinDiscountedTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinDiscountedTotal', []);

        return parent::getMinDiscountedTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxDiscountedTotal($maxDiscountedTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxDiscountedTotal', [$maxDiscountedTotal]);

        return parent::setMaxDiscountedTotal($maxDiscountedTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxDiscountedTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxDiscountedTotal', []);

        return parent::getMaxDiscountedTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinItems($minItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinItems', [$minItems]);

        return parent::setMinItems($minItems);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinItems', []);

        return parent::getMinItems();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxItems($maxItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxItems', [$maxItems]);

        return parent::setMaxItems($maxItems);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxItems', []);

        return parent::getMaxItems();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarkupFlat($markupFlat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarkupFlat', [$markupFlat]);

        return parent::setMarkupFlat($markupFlat);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarkupFlat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarkupFlat', []);

        return parent::getMarkupFlat();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarkupPercent($markupPercent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarkupPercent', [$markupPercent]);

        return parent::setMarkupPercent($markupPercent);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarkupPercent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarkupPercent', []);

        return parent::getMarkupPercent();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarkupPerItem($markupPerItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarkupPerItem', [$markupPerItem]);

        return parent::setMarkupPerItem($markupPerItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarkupPerItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarkupPerItem', []);

        return parent::getMarkupPerItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarkupPerWeight($markupPerWeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarkupPerWeight', [$markupPerWeight]);

        return parent::setMarkupPerWeight($markupPerWeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarkupPerWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarkupPerWeight', []);

        return parent::getMarkupPerWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingMethod(\XLite\Model\Shipping\Method $shippingMethod = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingMethod', [$shippingMethod]);

        return parent::setShippingMethod($shippingMethod);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingMethod', []);

        return parent::getShippingMethod();
    }

    /**
     * {@inheritDoc}
     */
    public function setZone(\XLite\Model\Zone $zone = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZone', [$zone]);

        return parent::setZone($zone);
    }

    /**
     * {@inheritDoc}
     */
    public function getZone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZone', []);

        return parent::getZone();
    }

    /**
     * {@inheritDoc}
     */
    public function buildDataForREST($withAssociations = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'buildDataForREST', [$withAssociations]);

        return parent::buildDataForREST($withAssociations);
    }

    /**
     * {@inheritDoc}
     */
    public function getModelAssociationsForREST()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelAssociationsForREST', []);

        return parent::getModelAssociationsForREST();
    }

    /**
     * {@inheritDoc}
     */
    public function _getPreviousState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_getPreviousState', []);

        return parent::_getPreviousState();
    }

    /**
     * {@inheritDoc}
     */
    public function map(array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'map', [$data]);

        return parent::map($data);
    }

    /**
     * {@inheritDoc}
     */
    public function __unset($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__unset', [$name]);

        return parent::__unset($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRepository', []);

        return parent::getRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function checkCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkCache', []);

        return parent::checkCache();
    }

    /**
     * {@inheritDoc}
     */
    public function detach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'detach', []);

        return parent::detach();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, array $args = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$method, $args]);

        return parent::__call($method, $args);
    }

    /**
     * {@inheritDoc}
     */
    public function isPropertyExists($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPropertyExists', [$name]);

        return parent::isPropertyExists($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setterProperty($property, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setterProperty', [$property, $value]);

        return parent::setterProperty($property, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getterProperty($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getterProperty', [$property]);

        return parent::getterProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function isPersistent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPersistent', []);

        return parent::isPersistent();
    }

    /**
     * {@inheritDoc}
     */
    public function isDetached()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDetached', []);

        return parent::isDetached();
    }

    /**
     * {@inheritDoc}
     */
    public function isManaged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isManaged', []);

        return parent::isManaged();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifierName', []);

        return parent::getUniqueIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifier', []);

        return parent::getUniqueIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityName', []);

        return parent::getEntityName();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldMetadata($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldMetadata', [$property]);

        return parent::getFieldMetadata($property);
    }

    /**
     * {@inheritDoc}
     */
    public function update()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', []);

        return parent::update();
    }

    /**
     * {@inheritDoc}
     */
    public function create()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'create', []);

        return parent::create();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', []);

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function processFiles($field, array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'processFiles', [$field, $data]);

        return parent::processFiles($field, $data);
    }

    /**
     * {@inheritDoc}
     */
    public function cloneEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cloneEntity', []);

        return parent::cloneEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldsDefinition($class = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldsDefinition', [$class]);

        return parent::getFieldsDefinition($class);
    }

    /**
     * {@inheritDoc}
     */
    public function prepareEntityBeforeCommit($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareEntityBeforeCommit', [$type]);

        return parent::prepareEntityBeforeCommit($type);
    }

    /**
     * {@inheritDoc}
     */
    public function isSerializable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSerializable', []);

        return parent::isSerializable();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
