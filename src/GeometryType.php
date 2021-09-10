<?php

declare(strict_types=1);

namespace GeoIO;

use TypeError;
use ValueError;
use function is_string;

final class GeometryType
{
    public const POINT = 'Point';
    public const LINESTRING = 'LineString';
    public const POLYGON = 'Polygon';
    public const MULTIPOINT = 'MultiPoint';
    public const MULTILINESTRING = 'MultiLineString';
    public const MULTIPOLYGON = 'MultiPolygon';
    public const GEOMETRYCOLLECTION = 'GeometryCollection';

    public static function assert(mixed $value): void
    {
        if (!is_string($value)) {
            throw new TypeError('Expected type string, got ' . get_debug_type($value) . '.');
        }

        switch ($value) {
            case self::POINT:
            case self::LINESTRING:
            case self::POLYGON:
            case self::MULTIPOINT:
            case self::MULTILINESTRING:
            case self::MULTIPOLYGON:
            case self::GEOMETRYCOLLECTION:
                return;
        }

        throw new ValueError('Invalid value ' . $value . '.');
    }
}
