<?php

if (version_compare(Mage::getVersion(), '1.10', '>=')) {
    class FreeLunchLabs_MailGun_Model_Resource_Event extends FreeLunchLabs_MailGun_Model_Resource_EventV2
    {
    }
} else {
    class FreeLunchLabs_MailGun_Model_Resource_Event extends FreeLunchLabs_MailGun_Model_Resource_EventV1
    {
    }    
}