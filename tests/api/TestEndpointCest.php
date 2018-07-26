<?php


class TestEndpointCest
{
    public function _before(ApiTester $I)
    {

    }

    public function _after(ApiTester $I)
    {

    }

    // tests
    public function tryToTest(\ApiTester $I)
    {
        $I->sendGET('/test', []);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::ACCEPTED);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['result' => true]);
    }
}
