<?php declare(strict_types=1);


namespace App\Domain;


class Calculator implements SumInterface, MultiplicationInterface, SubtractionInterface, DivisionInterface
{
    public function __construct(
        private SumInterface $sumCalculator,
        private MultiplicationInterface $multiplicationCalculator,
        private SubtractionInterface $subtractionCalculator,
        private DivisionInterface $divisionCalculator,
    ) {}

    public function sum(int|float $a, int|float $b): int|float
    {
        return $this->sumCalculator->sum($a, $b);
    }

    public function multiply(int|float $a, int|float $b): int|float
    {
        return $this->multiplicationCalculator->multiply($a, $b);
    }

    public function subtract(int|float $a, int|float $b): int|float
    {
        return $this->subtractionCalculator->subtract($a, $b);
    }

    public function divide(int|float $a, int|float $b): int|float
    {
        return $this->divisionCalculator->divide($a, $b);
    }
}
