<?php
use Page\PageScreens;
use \Step\Acceptance;
/**
 * @group chilli
 */

class ChilliSauceCest
{

    public function home(\Step\Acceptance\ScreensSteps $I)
    {
        $I->makeScreens('https://www.chillisauce.com/', 'home1', PageScreens::$body, [], 0.02);
    }
}