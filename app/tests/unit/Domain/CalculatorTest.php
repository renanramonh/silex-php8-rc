<?php  declare(strict_types=1);

namespace App\Test\Unit\Domain;


use PHPUnit\Framework\TestCase;
use App\Domain\Calculator;
use App\Domain\DivisionCalculator;
use App\Domain\MultiplicationCalculator;
use App\Domain\SubtractionCalculator;
use App\Domain\SumCalculator;

class CalculatorTest extends TestCase
{
    protected function setUp(): void
    {
        $this->calculator = new Calculator(
            new SumCalculator,
            new MultiplicationCalculator,
            new SubtractionCalculator,
            new DivisionCalculator,
        );
    }

    public function testDivide(): void
    {
        $response = $this->calculator->divide(4,2);
        $this->assertEquals(2,$response);
    }

    public function testMultiply(): void
    {
        $response = $this->calculator->multiply(4,2);
        $this->assertEquals(8,$response);
    }

    public function testSubtract(): void
    {
        $response = $this->calculator->subtract(8,2);
        $this->assertEquals(6,$response);
    }

    public function testSum(): void
    {
        $response = $this->calculator->sum(8,2);
        $this->assertEquals(10,$response);
    }
}
