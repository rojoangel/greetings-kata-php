<?php

use KodingDojo\GreetingsKata\Greetings;
use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    /**
     * @var Greetings
     */
    private $greetings;

    public function setUp()
    {
        $this->greetings = new Greetings();
    }

    public function test_say_hello_name(){

        $result = $this->greetings->greet('Bob');

        $this->assertEquals($result, "Hello, Bob.");
    }

    public function test_say_hello_my_friend_when_null(){

        $result = $this->greetings->greet();

        $this->assertEquals($result, "Hello, my friend.");
    }

    public function test_shout_uppercase_hello_name_when_name_is_uppercase(){

        $result = $this->greetings->greet('JERRY');

        $this->assertEquals($result, "HELLO JERRY!");
    }

    public function test_say_hello_to_two_names_at_once(){

        $result = $this->greetings->greet(['Jill','Jane']);

        $this->assertEquals($result, "Hello, Jill and Jane.");
    }

    public function test_say_hello_to_more_than_two_names_at_once(){

        $result = $this->greetings->greet(['Amy','Bryan','Charlotte']);

        $this->assertEquals($result, "Hello, Amy, Bryan, and Charlotte.");
    }
}
