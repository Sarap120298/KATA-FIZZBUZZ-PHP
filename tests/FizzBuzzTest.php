<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    
    public function test_is_divisible_by_3_and_return_fizz()
    {
    //Given - Escenario -dado
    $fizzBuzz = new FizzBuzz;


    //When - Actión - cuando
    $result = $fizzBuzz->isDivisible(37);
    

    //Then -Despues - entonces - debería dar
    $this->assertEquals("Fizz",$result);
    }
    public function test_is_divisible_by_5_and_return_buzz()
    {
        //Given - Escenario -dado
        $fizzBuzz = new FizzBuzz;

        //When - Actión - cuando
        $result = $fizzBuzz->isDivisible(52);

        //Then -Despues - entonces - debería dar
        $this->assertEquals("Buzz",$result);
    }
    public function test_is_divisible_by_5_and_by_3_return_fizzbuzz()
    {
        //Given - Escenario -dado
        $fizzBuzz = new FizzBuzz;

        //When - Actión - cuando
        $result = $fizzBuzz->isDivisible(15);

        //Then -Despues - entonces - debería dar
        $this->assertEquals("FizzBuzz",$result);
    }
    public function test_is_not_divisible_by_5_and_by_3_return_number()
    {
        //Given - Escenario -dado
        $fizzBuzz = new FizzBuzz;

        //When - Actión - cuando
        $result = $fizzBuzz->isDivisible(47);

        //Then -Despues - entonces - debería dar
        $this->assertEquals("47",$result);
    }

}