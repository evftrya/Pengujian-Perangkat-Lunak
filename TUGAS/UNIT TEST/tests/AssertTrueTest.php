<?php

use PHPUnit\Framework\TestCase;

class AssertTrueTest extends TestCase
{
    public function testAssertTrue()
    {
        $this->assertTrue(5 > 2);


        $this->assertTrue(
            is_array([1, 2, 3]),
            'Ini bukan array');

    }
}

?>