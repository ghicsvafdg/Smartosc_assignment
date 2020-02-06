<?php
    // 3 methods print array
    $array = [
        "a" => 20,
        "b" => "hello",
        "c" => true
    ];

    // first method
    print_r($array);
    var_dump($array);
    var_export($array);

    // second method
    echo "<br>".json_encode($array);
    // third method
    foreach ($array as $key=>$value)
    {
        echo "<br>";
        echo $key." --> ".$value."<br>";
    }