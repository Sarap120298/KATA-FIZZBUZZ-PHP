<?php 

namespace App;

class FizzBuzz {
    public function isDivisible(int $numb) : string
    {
        $string = strval($numb);
        if($numb % 3 === 0 && $numb % 5 === 0){
            return "FizzBuzz";
        }
        if($numb % 3 === 0 || strpos($string, 3) !== false){
            return "Fizz";
        }
        if($numb % 5 === 0 || strpos($string, 5) !== false){
            return "Buzz";
        }
        return $numb;
    }
}