<?php
namespace Page;

class PageScreens
{

    public static $body = 'body';

    /**
     * sites
     */
    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function productCard(){
        $I = $this->tester;

    }

}
