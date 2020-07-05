<?php declare(strict_types=1);


namespace App\Domain;


interface MultiplicationInterface
{
    public function multiply(int|float $a, int|float $b): int|float;
}
