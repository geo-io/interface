<?php

declare(strict_types=1);

namespace GeoIO;

use PHPUnit\Framework\TestCase;

class CoordinatesTest extends TestCase
{
    public function testConstruct(): void
    {
        $coordinates = new Coordinates(
            x: 1,
            y: 2,
            z: 3,
            m: 4,
        );

        $this->assertEquals(1, $coordinates->x);
        $this->assertEquals(2, $coordinates->y);
        $this->assertEquals(3, $coordinates->z);
        $this->assertEquals(4, $coordinates->m);
    }
}
