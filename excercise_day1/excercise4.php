<?php

    $numbers = [78,60,62,68,71,68,73,85,
                66,64,76,63,75,76,73,68,
                62,73,72,65,74,62,62,65,
                64,68,73,75,79,73];
    
    
    // find average            
    $sum = 0;
    foreach ($numbers as $key=>$value)
    {
        $sum = $sum + $value;
    }
    $average = $sum/count($numbers);
    echo "the average value of array is ".$average."<br>";


    // find 5 smallest numbers
    // function find mimimum value in array
    function findMin($numbers)
    {
        for ($j = 0; $j < count($numbers); $j++)
        {
            $minimum = $numbers[$j];
            for ($i = 0; $i < count($numbers); $i++)
            {
                if ($numbers[$i] < $minimum)
                {
                    $minimum = $numbers[$i];
                } else {
                    continue;
                }
            }
        }
        return $minimum;
    }

    // function find 5 minimum value in given array
    function findMinArray($numbers) 
    {
        $minArray = array();
        $newArray = array();
        while(count($minArray) < 5)
        {
            $minVal = findMin($numbers);
            // add min value in array and remove that value from origin array
            if (!in_array($minVal,$minArray))
            {
                $minArray[] = $minVal;
            }
            if (($key = array_search($minVal, $numbers)) !== false) {
                unset($numbers[$key]);
            }
    
            // refresh array
            $i = 0;
            $newArray = $numbers;
            foreach ($newArray as $k => $val)
            {
                $numbers[$i] = $val;
                unset($newArray[$k]);
                $i++;
            }
            
            findMin($numbers);
        }
        return $minArray;
    }


    // find 5 largest numbers
    // function find maximum value in array
    function findMax($numbers)
    {
        for ($j = 0; $j < count($numbers); $j++)
        {
            $maximum = $numbers[$j];
            for ($i = 0; $i < count($numbers); $i++)
            {
                if ($numbers[$i] > $maximum)
                {
                    $maximum = $numbers[$i];
                } else {
                    continue;
                }
            }
        }
        return $maximum;
    }

    // function find 5 maximum value in given array
    function findMaxArray($numbers) 
    {
        $maxArray = array();
        $newArray = array();
        while(count($maxArray) < 5)
        {
            $maxVal = findMax($numbers);
            // add max value in array and remove that value from origin array
            if (!in_array($maxVal,$maxArray))
            {
                $maxArray[] = $maxVal;
            }
            if (($key = array_search($maxVal, $numbers)) !== false) {
                unset($numbers[$key]);
            }
    
            // refresh array
            $i = 0;
            $newArray = $numbers;
            foreach ($newArray as $k => $val)
            {
                $numbers[$i] = $val;
                unset($newArray[$k]);
                $i++;
            }
            
            findMax($numbers);
        }
        return $maxArray;
    }


    
    


    
    
    
     
    
    
    
    