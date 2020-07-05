<?php declare(strict_types=1);


namespace App\Domain;


interface SumInterface
{
    public function sum(int|float $a, int|float $b): int|float;
}
