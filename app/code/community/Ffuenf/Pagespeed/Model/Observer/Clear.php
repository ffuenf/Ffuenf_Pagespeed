<?php

/**
 * Ffuenf_Pagespeed extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2016 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */
class Ffuenf_Pagespeed_Model_Observer_Clear extends Varien_Event_Observer
{
    /**
     * Clear the pagespeed cache.
     *
     * @return bool
     */
    public function clearCache()
    {
        $filecachepath = Mage::helper('ffuenf_pagespeed')->getFilecachepath();
        $cacheflushfilename = Mage::helper('ffuenf_pagespeed')->getCacheflushfilename();
        if ($filecachepath != '') {
            exec('rm -rf ' . $filecachepath . '/*');
        }
        exec('touch ' . $filecachepath . '/' . $cacheflushfilename);

        return true;
    }
}
