<?php
use Page\PageScreens;

/**
 * @group test
 */

class MoreBeerCest
{

    /**
     * @param AcceptanceTester
     * Make current screens
     */

    public function test(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->wait(2);
        $I->dontSeeVisualChanges('TestPage', PageScreens::$body, []);
    }
}
//    }
//
//    public function moreBeerCategory(AcceptanceTester $I)
//    {
//        $I->amOnUrl(PageScreens::$moreBeer.'/category/scales.html');
//        $I->dontSeeVisualChanges('MoreBeerCategory', PageScreens::$body,['.row.item-grid.border-between','.nav.nav-tabs','.searchtoolbar',
//            '.header-banner a']);
//    }
//
//    public function moreBeerProductCard(AcceptanceTester $I){
//
//        $I->amOnUrl(PageScreens::$moreBeer.'/cart/last/27578');
//        $I->dontSeeVisualChanges('MoreBeerProductCard', PageScreens::$body,['.col-sm-2','.col-sm-10.col-md-6.grey','.price','.box-same-brand-product',
//            '.header-banner a']);
//    }
//
//    public function moreBeerCheckout(AcceptanceTester $I){
//        $I->amOnUrl(PageScreens::$moreBeer.'/category/scales.html');
//        $I->click('//*[@class="tab-pane active"]//button');
//        $I->waitForElement('button.redround');
//        $I->click('button.redround');
//        $I->waitForElementNotVisible('div.loadmask-msg > div',10);
//        $I->waitForElementNotVisible('div.checkout-shipping > div.checkoutcontent.masked-relative.masked > div.loadmask-msg > div',10);
//        $I->dontSeeVisualChanges('MoreBeerCheckout', PageScreens::$body,'.cartdetails');
//    }
//
//}