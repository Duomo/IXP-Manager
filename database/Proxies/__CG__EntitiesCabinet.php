<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cabinet extends \Entities\Cabinet implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'name', 'colocation', 'height', 'type', 'notes', 'id', 'Switches', 'CustomerEquipment', 'Location', 'cololocation', '' . "\0" . 'Entities\\Cabinet' . "\0" . 'patchPanels'];
        }

        return ['__isInitialized__', 'name', 'colocation', 'height', 'type', 'notes', 'id', 'Switches', 'CustomerEquipment', 'Location', 'cololocation', '' . "\0" . 'Entities\\Cabinet' . "\0" . 'patchPanels'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cabinet $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setColocation($colocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColocation', [$colocation]);

        return parent::setColocation($colocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getColocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColocation', []);

        return parent::getColocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$height]);

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotes($notes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotes', [$notes]);

        return parent::setNotes($notes);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', []);

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function addSwitche(\Entities\Switcher $switches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSwitche', [$switches]);

        return parent::addSwitche($switches);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSwitche(\Entities\Switcher $switch)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSwitche', [$switch]);

        return parent::removeSwitche($switch);
    }

    /**
     * {@inheritDoc}
     */
    public function getSwitches()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwitches', []);

        return parent::getSwitches();
    }

    /**
     * {@inheritDoc}
     */
    public function addCustomerEquipment(\Entities\CustomerEquipment $customerEquipment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCustomerEquipment', [$customerEquipment]);

        return parent::addCustomerEquipment($customerEquipment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCustomerEquipment(\Entities\CustomerEquipment $customerEquipment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCustomerEquipment', [$customerEquipment]);

        return parent::removeCustomerEquipment($customerEquipment);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerEquipment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerEquipment', []);

        return parent::getCustomerEquipment();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation(\Entities\Location $location = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', [$location]);

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation(): \Entities\Location
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', []);

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setCololocation($cololocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCololocation', [$cololocation]);

        return parent::setCololocation($cololocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getCololocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCololocation', []);

        return parent::getCololocation();
    }

    /**
     * {@inheritDoc}
     */
    public function addSwitch(\Entities\Switcher $switches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSwitch', [$switches]);

        return parent::addSwitch($switches);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSwitch(\Entities\Switcher $switches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSwitch', [$switches]);

        return parent::removeSwitch($switches);
    }

    /**
     * {@inheritDoc}
     */
    public function addPatchPanel(\Entities\PatchPanel $patchPanel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPatchPanel', [$patchPanel]);

        return parent::addPatchPanel($patchPanel);
    }

    /**
     * {@inheritDoc}
     */
    public function removePatchPanel(\Entities\PatchPanel $patchPanel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePatchPanel', [$patchPanel]);

        return parent::removePatchPanel($patchPanel);
    }

    /**
     * {@inheritDoc}
     */
    public function getPatchPanels()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatchPanels', []);

        return parent::getPatchPanels();
    }

}
