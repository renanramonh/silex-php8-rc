<?php  declare(strict_types=1);

namespace App\Test\Unit\Domain;


use PHPUnit\Framework\TestCase;
use App\Domain\DivisionCalculator;

class DivisionCalculatorTest extends TestCase
{
    public function testDivide(): void
    {
        $calculator = new DivisionCalculator();
        $response = $calculator->divide(4,2);
        $this->assertEquals(2,$response);
    }
}
