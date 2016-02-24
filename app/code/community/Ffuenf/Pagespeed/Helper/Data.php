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

class Ffuenf_Pagespeed_Helper_Data extends Ffuenf_Common_Helper_Core
{
    /**
     * Path for the config for extension active status.
     */
    const CONFIG_EXTENSION_ACTIVE = 'ffuenf_pagespeed/general/enable';

    /**
     * Path for the filecachepath.
     */
    const CONFIG_EXTENSION_FILECACHEPATH = 'ffuenf_pagespeed/general/filecachepath';

    /**
     * Path for the filecachepath.
     */
    const CONFIG_EXTENSION_CACHEFLUSHFILENAME = 'ffuenf_pagespeed/general/cacheflushfilename';

    /**
     * Variable for if the extension is active.
     *
     * @var bool
     */
    protected $bExtensionActive;

    /**
     * Variable for filecachepath.
     *
     * @var string
     */
    protected $sFilecachepath;

    /**
     * Variable for cacheflushfilename.
     *
     * @var string
     */
    protected $sCacheflushfilename;

    /**
     * Check to see if the extension is active.
     *
     * @return bool
     */
    public function isExtensionActive()
    {
        return $this->getStoreFlag(self::CONFIG_EXTENSION_ACTIVE, 'bExtensionActive');
    }

    /**
     * Check to see if filecachepath is set correctly.
     *
     * @return string
     */
    public function getFilecachepath()
    {
        return $this->getStoreConfig(self::CONFIG_EXTENSION_FILECACHEPATH, 'sFilecachepath');
    }

    /**
     * Check to see if cacheflushfilename is set correctly.
     *
     * @return string
     */
    public function getCacheflushfilename()
    {
        return $this->getStoreConfig(self::CONFIG_EXTENSION_CACHEFLUSHFILENAME, 'sCacheflushfilename');
    }
}
