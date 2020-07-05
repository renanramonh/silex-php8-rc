<?php  declare(strict_types=1);

namespace App\Test\Unit\Domain;


use PHPUnit\Framework\TestCase;
use App\Domain\MultiplicationCalculator;

class MultiplicationCalculatorTest extends TestCase
{
    public function testMultiply(): void
    {
        $calculator = new MultiplicationCalculator();
        $response = $calculator->multiply(4,2);
        $this->assertEquals(8,$response);
    }
}
