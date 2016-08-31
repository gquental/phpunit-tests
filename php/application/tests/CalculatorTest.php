<?php
namespace App\Tests;

use App\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $sum = $calculator->add(3,2);

        $this->assertEquals($sum, 5);
    }
}
