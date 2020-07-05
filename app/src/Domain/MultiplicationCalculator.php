<?php declare(strict_types=1);


namespace App\Domain;


class MultiplicationCalculator implements MultiplicationInterface
{
    public function multiply(int|float $a, int|float $b): int|float
    {
        return $a * $b;
    }
}
