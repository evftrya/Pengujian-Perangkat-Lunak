<?php

use PHPUnit\Framework\TestCase;
require_once 'Calculator.php';

class CalculatorTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new CalculatorClass();
    }

    //pengecekan menggunakan assert equals karena calculator perlu validasi hasil perhitungan operasi

    public function testAdd()
    {
        $this->assertEquals(8, 
        $this->calculator->add(2, 6), 'Penjumlahan 2 dan 6 seharusnya Memberikan nilai 8');
        $this->assertEquals(2, $this->calculator->add(1, 1), 'Penjumlahan 1 dan 1 seharusnya Memberikan nilai 2');
    }

    public function testSubtract()
    {
        $this->assertEquals(-2, $this->calculator->subtract(-1, 1), 'Pengurangan -1 oleh 1 seharusnya Memberikan nilai -2');
        $this->assertEquals(1, $this->calculator->subtract(-2, -3), 'Pengurangan -2 oleh -3 seharusnya Memberikan nilai 1');
    }

    public function testMultiply()
    {
        $this->assertEquals(4, $this->calculator->multiply(2, 2), 'Perkalian 2 dan 3 seharusnya Memberikan nilai 6');
        $this->assertEquals(6, $this->calculator->multiply(-2, -3), 'Perkalian -2 dan -3 seharusnya Memberikan nilai 6');
    }

    public function testDivide()
    {
        $this->assertEquals(2, $this->calculator->divide(8, 4), 'Pembagian 8 oleh 4 seharusnya Memberikan nilai 2');
        $this->assertEquals(2, $this->calculator->divide(2, 1), 'Pembagian 2 oleh 1 seharusnya Memberikan nilai 2');
    }

    public function testDivideByZero()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Pembagian dengan nol tidak diperbolehkan');
        $this->calculator->divide(1, 0);
    }
}
