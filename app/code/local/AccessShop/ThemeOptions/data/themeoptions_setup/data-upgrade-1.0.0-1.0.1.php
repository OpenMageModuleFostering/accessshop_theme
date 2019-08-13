<?php
/**
 * @author		AccessShop
 * @copyright	Copyright 2014
 */
$installer = $this;
$installer->startSetup();

Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
$cmsBlocks = array(
    array(
        'title'         => 'Home Block Below Best Sellers',
        'identifier'    => 'home-block-below-best-sellers',
        'content'       => '<div class="responsive-box">
                                <div class="row">
                                <div class="col-sm-12">
                                                        <div class="responsive-features-left">
                                <div class="left-image wow slideInLeft">
                                                            <div class="responsive-display-img">
                                                                <img src="{{skin url="images/responsive-image.jpg"}}" align="resonsive" />
                                                            </div>
                                                        </div>
                                                        <div class="middle-text wow slideInRight">
                                                            <div class="responsive-desc">
                                                                <ul class="desc-counter">
                                                                    <li>
                                                                        <h3>Responsive Layout</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </p>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Responsive Layout</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </p>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Responsive Layout</h3>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                </div>
                                <div class="responsive-features-right wow slideInRight">
                                                            <div class="right-image">
                                                                <img src="{{skin url="images/responsive-image-2.png"}}" align="resonsive" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>',
        'is_active'     => 1,
        'stores'        => 0
    )
);
foreach ($cmsBlocks as $data) {
    Mage::getModel('cms/block')->setData($data)->save();
}

$installer->endSetup();