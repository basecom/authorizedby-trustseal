<?php

class Authorizedby_Trustseal_Block_Authorizedby extends Mage_Core_Block_Template
{
    public function isEnabled() {
        return Mage::getStoreConfigFlag('trustseal/config/activate');
    }

    public function getBadgePosition() {
        return Mage::getStoreConfig('trustseal/config/position');
    }

    public function getBadgePositionAlignment() {
        return Mage::getStoreConfig('trustseal/config/position_alignment');
    }

    public function getBadgePositionUnit() {
        return Mage::getStoreConfig('trustseal/config/position_unit');
    }

    public function getBadgePositionMargin() {
        return Mage::getStoreConfig('trustseal/config/position_margin');
    }

    public function isProductVerificationEnabled() {
        return Mage::getStoreConfig('trustseal/config/product_verifictation');
    }
}