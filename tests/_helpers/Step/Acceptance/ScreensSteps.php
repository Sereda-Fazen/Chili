<?php
namespace Page;
namespace Step\Acceptance;
class ScreensSteps extends \AcceptanceTester
{

    public function makeScreens ($url,$nameScreen, $page, $exclude, $deviation)
    {
        $I = $this;
        $I->amOnUrl($url);
        $I->waitForElementNotVisible('mat-progress-bar.mat-progress-bar.mat-primary > div.mat-progress-bar-buffer.mat-progress-bar-element');
        $I->scrollDown(4000);
        $I->wait(3);
        $I->scrollUp(4000);
        $I->wait(2);
        $I->dontSeeVisualChanges($nameScreen, $page,$exclude, $deviation);

    }

}