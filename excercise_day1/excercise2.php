<?php

    // number
    if (7 <=> 9)
    {
        echo "7 is not equal 9|";
    } else {
        echo "7 is equal 9|";
    }

    // string
    if ("hello" <=> "goodbye")
    {
        echo "hello is not goodbye|";
    } else {
        echo "hello is the same as goodbye|";
    }

    // array
    $a = [
        "a" => 1,
        "b" => 2,
        "c" => 3
    ];
    $b = [
        "a" => 4,
        "b" => 5,
        "c" => 6
    ];
    if ($a <=> $b)
    {
        echo "two given arrays are not equal";
    } else {
        echo "two given arrays are equal";
    }

