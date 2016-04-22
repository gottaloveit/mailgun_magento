<?php

if (version_compare(Mage::getVersion(), '1.10', '>=')) {
    class FreeLunchLabs_MailGun_Model_Resource_Email extends FreeLunchLabs_MailGun_Model_Resource_EmailV2
    {
    }
} else {
    class FreeLunchLabs_MailGun_Model_Resource_Email extends FreeLunchLabs_MailGun_Model_Resource_EmailV1
    {
    }
}