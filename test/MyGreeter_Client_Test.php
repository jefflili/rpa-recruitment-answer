<?php
require __DIR__.'/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class MyGreeter_Client_Test extends TestCase
{
    public function setUp()
    {
        $time = date('YmdH');
        $this->greeter = new MyGreeter\Client($time);
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }

    public function test_GoodMorning() {
        $time = date('Ymd').'00';
        $monring = new MyGreeter\Client($time);
        $this->assertTrue(
            $monring->getGreeting() == "Good moring"
        );
    }

    public function test_GoodAfternoon() {
        $time = date('Ymd').'16';
        $monring = new MyGreeter\Client($time);
        $this->assertTrue(
            $monring->getGreeting() == "Good afternoon"
        );
    }

    public function test_GoodEvening() {
        $time = date('Ymd').'20';
        $monring = new MyGreeter\Client($time);
        $this->assertTrue(
            $monring->getGreeting() == "Good evening"
        );
    }
}
