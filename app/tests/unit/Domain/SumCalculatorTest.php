<?php  declare(strict_types=1);

namespace App\Test\Unit\Domain;


use PHPUnit\Framework\TestCase;
use App\Domain\SumCalculator;

class SumCalculatorTest extends TestCase
{
    public function testSum(): void
    {
        $calculator = new SumCalculator();
        $response = $calculator->sum(8,2);
        $this->assertEquals(10,$response);
    }
}
