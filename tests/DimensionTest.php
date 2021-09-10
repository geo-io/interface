<?php

declare(strict_types=1);

namespace GeoIO;

use PHPUnit\Framework\TestCase;
use stdClass;

class DimensionTest extends TestCase
{
    /**
     * @dataProvider provideDimensions
     */
    public function testAssert(string $dimension): void
    {
        Dimension::assert($dimension);

        $this->assertTrue(true);
    }

    /**
     * @dataProvider provideInvalidTypes
     */
    public function testAssertThrowsForInvalidType($value): void
    {
        $this->expectError();
        $this->expectErrorMessageMatches('/^Expected type string, got .+\.$/');

        Dimension::assert($value);
    }

    public function testAssertThrowsForInvalidValue(): void
    {
        $this->expectError();
        $this->expectErrorMessageMatches('/^Invalid value foo\.$/');

        Dimension::assert('foo');
    }

    public function provideDimensions(): iterable
    {
        yield [Dimension::DIMENSION_2D];
        yield [Dimension::DIMENSION_3DZ];
        yield [Dimension::DIMENSION_3DM];
        yield [Dimension::DIMENSION_4D];
    }

    public function provideInvalidTypes(): iterable
    {
        yield [1];
        yield [1.0];
        yield [['array']];
        yield [new stdClass()];
    }
}
