<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Domain\Calculator;
use App\Domain\DivisionCalculator;
use App\Domain\MultiplicationCalculator;
use App\Domain\SubtractionCalculator;
use App\Domain\SumCalculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$sumCalculator = new SumCalculator();
$multiplicationCalculator = new MultiplicationCalculator();
$subtractionCalculator = new SubtractionCalculator();
$divisionCalculator = new DivisionCalculator();
$calculator = new Calculator(
    $sumCalculator,
    $multiplicationCalculator,
    $subtractionCalculator,
    $divisionCalculator,
);

$app = new Silex\Application();

/**
 * Calculate endpoint
 */
$app->get('/calculate/{a}/{b}',
    function (Request $request, $a, $b) use ($calculator) {
        $a = (int) $a;
        $b = (float) $b;

        $rspBody = json_encode([
            'sum' => $calculator->sum($a, $b),
            'multiplication' => $calculator->multiply($a, $b),
            'subtraction' => $calculator->subtract($a, $b),
            'division' => $calculator->divide($a, $b),
        ], true);

        $response = new Response($rspBody, 200);
        $response->headers->set('Content-type', 'application/json');

        return $response;
    });

$app->run();
