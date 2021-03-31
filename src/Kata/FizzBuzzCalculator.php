<?php

namespace FizzBuzz\Kata;

class FizzBuzzCalculator {
    public function valueOf(int $number): string
    {
        $message = "";
        if ($this->isDivisibleByBoth($number)){
            $message = "fizzbuzz";
        } else if ($this->isDivisibleByFive($number)) {
            $message = "buzz";
        } else if ($this->isDivisibleByThree($number)) {
            $message = "fizz";
        } else {
            $message = strval($number);
        }
        return $message;
    }

    private function isDivisibleByFive(int $number): bool
    {
        return $number % 5 === 0;
    }

    private function isDivisibleByThree(int $number): bool
    {
        return $number % 3 === 0;
    }

    private function isDivisibleByBoth(int $number): bool
    {
        return $this->isDivisibleByThree($number) && $this->isDivisibleByFive($number);
    }
}