<?php

namespace room247\Clock;

use PHPUnit\Framework\TestCase;

class ClockInterfaceTest extends TestCase
{
    /**
     * @covers ClockInterface::now()
     */
    public function testInterfaceIsAccessible(): void
    {
        $this->assertInstanceof(ClockInterface::class, $this->getMockBuilder(ClockInterface::class)->getMock());
    }
}