<?php

declare(strict_types=1);

namespace GeoIO;

use PHPUnit\Framework\TestCase;

class DimensionTest extends TestCase
{
    /**
     * @dataProvider provideDimensions
     */
    public function testValid(string $dimension): void
    {
        Dimension::from($dimension);

        $this->assertTrue(true);
    }

    public function provideDimensions(): iterable
    {
        yield ['2D'];
        yield ['3DZ'];
        yield ['3DM'];
        yield ['4D'];
    }
}
