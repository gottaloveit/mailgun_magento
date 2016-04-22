<?php

class FreeLunchLabs_MailGun_Model_Resource_Event_CollectionV2 extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        parent::_construct();

        $this->_init('freelunchlabs_mailgun/event');
    }
}