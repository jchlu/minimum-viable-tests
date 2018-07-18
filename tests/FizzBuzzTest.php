<?php

namespace MinimumViableTests\Tests;

use PHPUnit\Framework\TestCase;
use MinimumViableTests\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     * @expectedException \Exception
     *
     * @return void
     */
    public function testHandlesNonIntegerExceptionCorrectlyInAnnotation()
    {
        $fizzBuzz = new FizzBuzz();
        $collection = ['A', 1, 'B', 'C', 1.234];
        $fizzBuzz->process($collection);
    }

    public function testHandlesNonIntegerExceptionCorrectlyInCode()
    {
        $this->expectException('Exception', 'Did not receive a collection of integers');
        $fizzBuzz = new FizzBuzz();
        $collection = ['A', 1, 'B', 'C', 1.234];
        $fizzBuzz->process($collection);
    }

}
