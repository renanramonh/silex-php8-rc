<?php declare(strict_types=1);


namespace App\Domain;

class SumCalculator implements SumInterface
{
    public function sum(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }
}
