<?php

/**
 * App Test
 */
class AppCest
{
    public function _before(AcceptanceTester $I) {}
    public function _after(AcceptanceTester $I) {}

    /**
     * Test: GET /
     */
    public function homeTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Home');
    }

    /**
     * Test: GET /404
     */
    public function notFoundTest(AcceptanceTester $I)
    {
        $I->amOnPage('/non-exists-page');
        $I->see('404');
    }
}
