<?php

if (version_compare(Mage::getVersion(), '1.10', '>=')) {
    class FreeLunchLabs_MailGun_Model_Resource_Email_Collection extends FreeLunchLabs_MailGun_Model_Resource_Email_CollectionV2
    {
    }
} else {
    class FreeLunchLabs_MailGun_Model_Resource_Email_Collection extends FreeLunchLabs_MailGun_Model_Resource_Email_CollectionV1
    {
    }
}