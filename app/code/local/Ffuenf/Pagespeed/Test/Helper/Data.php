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
 * @copyright  Copyright (c) 2015 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * @see Ffuenf_Pagespeed_Helper_Data
 *
 * @loadSharedFixture shared
 */
class Ffuenf_Pagespeed_Test_Helper_Data extends EcomDev_PHPUnit_Test_Case
{
    /**
     * Tests is extension active.
     *
     * @test
     * @covers Ffuenf_Pagespeed_Helper_Data::isExtensionActive
     */
    public function testIsExtensionActive()
    {
        $this->assertTrue(
            Mage::helper('ffuenf_pagespeed')->isExtensionActive(),
            'Extension is not active please check config'
        );
    }
    /**
     * Tests filecachepath.
     *
     * @test
     * @covers Ffuenf_Pagespeed_Helper_Data::GetFilecachepath
     */
    public function testGetFilecachepath()
    {
        $this->assertEquals(
            Mage::helper('ffuenf_pagespeed')->getFilecachepath(),
            '/var/ngx_pagespeed_cache',
            'Filecachpath is not set please check config'
        );
    }
    /**
     * Tests cacheflushfilename.
     *
     * @test
     * @covers Ffuenf_Pagespeed_Helper_Data::GetFilecachepath
     */
    public function testGetCacheflushfilename()
    {
        $this->assertEquals(
            Mage::helper('ffuenf_pagespeed')->getCacheflushfilename(),
            'cache.flush',
            'Cacheflushfilename is not set please check config'
        );
    }

    /**
     * Tests whether extension uses the old-style admin routing (not compatible with SUPEE-6788).
     *
     * @test
     */
    public function testGetOldAdminRouting()
    {
        $routers = Mage::getConfig()->getNode('admin/routers');
        $offendingExtensions = array();
        foreach ($routers[0] as $router) {
            $name = $router->args->module;
            if ($name != 'Mage_Adminhtml') {
                $offendingExtensions[] = $router->args->module;
            }
        }
        $this->assertEquals(
            count($offendingExtensions),
            0,
            'This extension uses old-style admin routing which is not compatible with SUPEE-6788 / Magento 1.9.2.2+'
        );
    }
}
