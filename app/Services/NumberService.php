<?php

namespace App\Services;


// This class calculates the number for the api and sends then to the controller in array form
class NumberService
{
    public function RandomArr(): array
    {
        for ($i = 1; $i <= 100; $i++){$Num[$i] = rand(1, 20000);}
        return $Num;
    }
    public function OrderArr(): array
    {
        for ($i = 1; $i <=100; $i ++){$OrdNumbers[$i] = $i;}
        return $OrdNumbers;
    }
    public function EvenArr():array
    {
        $evens = 2;
        for ($i = 1; $i <= 50; $i ++){

            $EvenNumbers[$i] = $evens;
            $evens += 2;
        }
        return $EvenNumbers;
    }
    public function DoubleArr():array
    {
        $Doubles = 11;
        for ($i = 1; $i <= 9; $i ++){

            $DoubleNumbers[$i] = $Doubles;
            $Doubles += 11;
        }
        return $DoubleNumbers;
    }
    public function UnevenArr(): array
    {
        $uneven = 1;
        for ($i = 1; $i <= 50; $i++){

            $UnevenNumbers[$i] = $uneven;
            $uneven += 2;
        }
        return $UnevenNumbers;
    }

}
