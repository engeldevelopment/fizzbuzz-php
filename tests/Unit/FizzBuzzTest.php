<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use FizzBuzz\Kata\FizzBuzzCalculator;


class FizzBuzzCalculatorTest extends TestCase {
    public function setUp(): void
    {
        $this->calculator = new FizzBuzzCalculator();
    }

    /** @test */
    public function IfNumberIsDivisibleByThreeShouldShowFizz()
    {

        $this->assertEquals("fizz", $this->calculator->valueOf(3));
        $this->assertEquals("fizz", $this->calculator->valueOf(12));
        $this->assertEquals("fizz", $this->calculator->valueOf(9));
    }
    
    /** @test */
    public function IfNumberIsDivisibleByFiveShouldShowBuzz()
    {
        $this->assertEquals("buzz", $this->calculator->valueOf(5));
        $this->assertEquals("buzz", $this->calculator->valueOf(10));
        $this->assertEquals("buzz", $this->calculator->valueOf(20));
    }

    /** @test */
    public function IfNumberIsDivisibleByThreeAndFiveShouldShowFizzBuzz()
    {
        $this->assertEquals("fizzbuzz", $this->calculator->valueOf(15));
        $this->assertEquals("fizzbuzz", $this->calculator->valueOf(30));
    }

    /** @test */
    public function IfNumberIsNotDivisibleByThreeAndFiveShouldShowTheSameNumber()
    {
        $this->assertEquals("1", $this->calculator->valueOf(1));
        $this->assertEquals("2", $this->calculator->valueOf(2));
    }
}