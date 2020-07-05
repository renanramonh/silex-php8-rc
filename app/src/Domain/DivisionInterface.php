<?php declare(strict_types=1);


namespace App\Domain;


interface DivisionInterface
{
    public function divide(int|float $a, int|float $b): int|float;
}
