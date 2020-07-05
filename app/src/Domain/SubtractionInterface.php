<?php declare(strict_types=1);


namespace App\Domain;


interface SubtractionInterface
{
    public function subtract(int|float $a, int|float $b): int|float;
}
