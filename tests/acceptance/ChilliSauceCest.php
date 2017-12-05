<?php
use Page\PageScreens;

/**
 * @group chilli
 */

class ChilliSauceCest
{

    /**
     * @param AcceptanceTester
     * Make current screens
     */

    public function PageDestination(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->wait(5);
        $I->dontSeeVisualChanges('PageDestination', PageScreens::$body,[], 2);
    }

    public function PageStag(AcceptanceTester $I)
    {
        $I->amOnUrl('http://www.chillisauce.co.uk/stag/');
        $I->wait(5);
        $I->dontSeeVisualChanges('PageStag', PageScreens::$body,[],  0.2);
    }

    public function PageHome(AcceptanceTester $I)
    {
        $I->amOnUrl('http://www.chillisauce.co.uk/');
        $I->wait(5);
        $I->dontSeeVisualChanges('PageHome', PageScreens::$body,[], 0.002);
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
