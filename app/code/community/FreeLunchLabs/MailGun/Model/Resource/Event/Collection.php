<?php

if (version_compare(Mage::getVersion(), '1.10', '>=')) {
    class FreeLunchLabs_MailGun_Model_Resource_Event_Collection extends FreeLunchLabs_MailGun_Model_Resource_Event_CollectionV2
    {
    }
} else {
    class FreeLunchLabs_MailGun_Model_Resource_Event_Collection extends FreeLunchLabs_MailGun_Model_Resource_Event_CollectionV1
    {
    }    
}