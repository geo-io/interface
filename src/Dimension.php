<?php

declare(strict_types=1);

namespace GeoIO;

use TypeError;
use ValueError;
use function is_string;

/**
 * @psalm-immutable
 */
final class Dimension
{
    /**
     * Two-Dimension Geometry, e.g. POINT(x, y).
     */
    public const DIMENSION_2D = '2D';

    /**
     * Three-Dimension Geometry, e.g. POINT(x, y, z).
     */
    public const DIMENSION_3DZ = '3DZ';

    /**
     * Two-Dimension Measured Geometry, e.g. POINT(x, y, m).
     */
    public const DIMENSION_3DM = '3DM';

    /**
     * Three-Dimension Measured Geometry, e.g. POINT(x, y, z, m).
     */
    public const DIMENSION_4D = '4D';

    public static function assert(mixed $value): void
    {
        if (!is_string($value)) {
            throw new TypeError('Expected type string, got ' . get_debug_type($value) . '.');
        }

        switch ($value) {
            case self::DIMENSION_2D:
            case self::DIMENSION_3DZ:
            case self::DIMENSION_3DM:
            case self::DIMENSION_4D:
                return;
        }

        throw new ValueError('Invalid value ' . $value . '.');
    }
}
