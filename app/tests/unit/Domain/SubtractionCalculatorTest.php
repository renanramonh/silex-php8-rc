<?php  declare(strict_types=1);

namespace App\Test\Unit\Domain;


use PHPUnit\Framework\TestCase;
use App\Domain\SubtractionCalculator;

class SubtractionCalculatorTest extends TestCase
{
    public function testSubtract(): void
    {
        $calculator = new SubtractionCalculator();
        $response = $calculator->subtract(8,2);
        $this->assertEquals(6,$response);
    }
}
