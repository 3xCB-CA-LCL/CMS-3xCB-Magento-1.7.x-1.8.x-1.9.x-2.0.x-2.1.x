<?php

/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please contact us
 * via http://www.fia-net-group.com/formulaire.php so we can send you a copy immediately.
 *
 * @author     FIA-NET <support-boutique@fia-net.com>
 * @copyright  Copyright (c) 2017 FIA-NET
 * @version    Release: $Revision: 0.1.0 $
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Class Fianet_Payment3xcb_Model_Store_Information
 *
 * @method Fianet_Payment3xcb_Model_Store_Information setInformation(string $information)
 * @method Fianet_Payment3xcb_Model_Store_Information setValue(string $value)
 */
class Fianet_Payment3xcb_Model_Store_Information extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('fianetpayment3xcb/store_information');
    }
}
