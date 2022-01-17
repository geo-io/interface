<?php

declare(strict_types=1);

namespace GeoIO;

use PHPUnit\Framework\TestCase;

class GeometryTypeTest extends TestCase
{
    /**
     * @dataProvider provideGeometryTypes
     */
    public function testValid(string $type): void
    {
        GeometryType::from($type);

        $this->assertTrue(true);
    }

    public function provideGeometryTypes(): iterable
    {
        yield ['Point'];
        yield ['LineString'];
        yield ['Polygon'];
        yield ['MultiPoint'];
        yield ['MultiLineString'];
        yield ['MultiPolygon'];
        yield ['GeometryCollection'];
    }
}
