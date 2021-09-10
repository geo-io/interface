<?php

declare(strict_types=1);

namespace GeoIO;

use PHPUnit\Framework\TestCase;
use stdClass;

class GeometryTypeTest extends TestCase
{
    /**
     * @dataProvider provideGeometryTypes
     */
    public function testAssert(string $dimension): void
    {
        GeometryType::assert($dimension);

        $this->assertTrue(true);
    }

    /**
     * @dataProvider provideInvalidTypes
     */
    public function testAssertThrowsForInvalidType($value): void
    {
        $this->expectError();
        $this->expectErrorMessageMatches('/^Expected type string, got .+\.$/');

        GeometryType::assert($value);
    }

    public function testAssertThrowsForInvalidValue(): void
    {
        $this->expectError();
        $this->expectErrorMessageMatches('/^Invalid value foo\.$/');

        GeometryType::assert('foo');
    }

    public function provideGeometryTypes(): iterable
    {
        yield [GeometryType::POINT];
        yield [GeometryType::LINESTRING];
        yield [GeometryType::POLYGON];
        yield [GeometryType::MULTIPOINT];
        yield [GeometryType::MULTILINESTRING];
        yield [GeometryType::MULTIPOLYGON];
        yield [GeometryType::GEOMETRYCOLLECTION];
    }

    public function provideInvalidTypes(): iterable
    {
        yield [1];
        yield [1.0];
        yield [['array']];
        yield [new stdClass()];
    }
}
