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

class Ffuenf_Pagespeed_Test_Model_Observer_Clear extends EcomDev_PHPUnit_Test_Case_Config
{

    /**
     * Tests whether extension model aliases are returning the correct class names
     *
     * @test
     */
    public function testModelAlias()
    {
        $this->assertModelAlias(
            'ffuenf_pagespeed/observer_clear',
            'Ffuenf_Pagespeed_Model_Observer_Clear'
        );
    }

    /**
     * Tests whether extension adminhtml observers are defined
     *
     * @test
     */
    public function testAdminHtmlEventObservers()
    {
        $this->assertEventObserverDefined(
            'adminhtml',
            'catalog_product_save_commit_after',
            'ffuenf_pagespeed/observer_clear',
            'clearCache'
        );
        $this->assertEventObserverDefined(
            'adminhtml',
            'clean_media_cache_after',
            'ffuenf_pagespeed/observer_clear',
            'clearCache'
        );
        $this->assertEventObserverDefined(
            'adminhtml',
            'clean_catalog_images_cache_after',
            'ffuenf_pagespeed/observer_clear',
            'clearCache'
        );
        $this->assertEventObserverDefined(
            'adminhtml',
            'cms_page_save_commit_after',
            'ffuenf_pagespeed/observer_clear',
            'clearCache'
        );
        $this->assertEventObserverDefined(
            'adminhtml',
            'adminhtml_cache_flush_system',
            'ffuenf_pagespeed/observer_clear',
            'clearCache'
        );
        $this->assertEventObserverDefined(
            'adminhtml',
            'adminhtml_cache_flush_all',
            'ffuenf_pagespeed/observer_clear',
            'clearCache'
        );
    }
}
