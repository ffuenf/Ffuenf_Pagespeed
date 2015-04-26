<?php
/**
 * Ffuenf_Pagespeed extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category   Ffuenf
 * @package    Ffuenf_Pagespeed
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2015 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
*/

class Ffuenf_Pagespeed_Model_Observer_Clear extends Varien_Event_Observer {
    public function clearCache($event) {
        $filecachepath = Mage::getStoreConfig('pagespeed/general/filecachepath');
        $cacheflushfilename = Mage::getStoreConfig('pagespeed/general/cacheflushfilename');
        if($filecachepath != '') {
            exec('rm -rf '.$filecachepath.'/*');
        }
        exec('touch '.$filecachepath.'/'.$cacheflushfilename);
        return true;
    }
}