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

class Ffuenf_Pagespeed_Helper_Data extends Mage_Core_Helper_Abstract {

    /**
     * Path for the config for extension active status
     */
    const CONFIG_EXTENSION_ACTIVE = 'pagespeed/general/enabled';

    /**
     * Path for the filecachepath
     */
    const CONFIG_FILECACHEPATH = 'pagespeed/general/filecachepath';

    /**
     * Path for the filecachepath
     */
    const CONFIG_CACHEFLUSHFILENAME = 'pagespeed/general/cacheflushfilename';

    /**
     * Variable for if the extension is active
     *
     * @var bool
     */
    protected $bExtensionActive;

    /**
     * Variable for filecachepath
     *
     * @var string
     */
    protected $bFilecachepath;

    /**
     * Variable for cacheflushfilename
     *
     * @var string
     */
    protected $bCacheflushfilename;

    /**
     * Check to see if the extension is active
     *
     * @return bool
     */
    public function isExtensionActive()
    {
        if ($this->bExtensionActive === null) {
            $this->bExtensionActive = Mage::getStoreConfigFlag(self::CONFIG_EXTENSION_ACTIVE);
        }
        return $this->bExtensionActive;
    }

    /**
     * Get filecachepath
     *
     * @return string
     */
    public function getFilecachepath()
    {
        if ($this->$bFilecachepath === null) {
            $this->$bFilecachepath = Mage::getStoreConfigFlag(self::CONFIG_FILECACHEPATH);
        }
        return $this->$bFilecachepath;
    }

    /**
     * Get cacheflushfilename
     *
     * @return string
     */
    public function getCacheflushfilename()
    {
        if ($this->$bCacheflushfilename === null) {
            $this->$bCacheflushfilename = Mage::getStoreConfigFlag(self::CONFIG_CACHEFLUSHFILENAME);
        }
        return $this->$bCacheflushfilename;
    }
}