<?php

namespace KodingDojo\GreetingsKata;

class Greetings
{
    /**
     * Greetings constructor.
     */
    public function __construct()
    {
    }

    public function greet($name = 'my friend')
    {
        if(ctype_upper($name)){
            return "HELLO $name!";
        }

        $finalNames = $this->normalizeNames($name);

        return "Hello, $finalNames.";
    }

    /**
     * @param $name
     * @return array|string
     */
    private function normalizeNames($name)
    {
        if (is_string($name)) {
            return $name;
        }

        if (sizeof($name) <= 2) {
            return implode(" and ", $name);
        }

        $lastName = array_pop($name);
        $name = implode(", ", $name);
        return $name . ', and ' . $lastName;
    }
}
