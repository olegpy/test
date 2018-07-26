<?php

use \Tests\_support\Helper\Generator;

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function before()
    {
    }

    protected function after()
    {
    }

    // tests
    public function testMe()
    {
        /** @var \App\User $user */
        $user = (new Generator)->getRandomUser(['name' => 'User']);
//        $ts = new \App\Http\Services\TestService($user);
//        $this->tester->assertEquals(strtoupper($user->name), $ts->getUserNameUpper());
//        $this->tester->assertNotEquals($user->name, $ts->getUserNameUpper());
    }
}