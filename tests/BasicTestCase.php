<?php

namespace MinimumViableTests\Tests;

use PHPUnit\Framework\TestCase;

class BasicTestCase extends TestCase
{
    public function testCase()
    {
        $this->assertTrue(true);
    }

    public function testAnotherCase()
    {
        $this->assertFalse(false);
    }
}
