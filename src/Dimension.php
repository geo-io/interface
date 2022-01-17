<?php

declare(strict_types=1);

namespace GeoIO;

enum Dimension: string
{
    /*
     * Two-Dimension Geometry, e.g. POINT(x, y).
     */
    case DIMENSION_2D = '2D';
    /*
     * Three-Dimension Geometry, e.g. POINT(x, y, z).
     */
    case DIMENSION_3DZ = '3DZ';
    /*
     * Two-Dimension Measured Geometry, e.g. POINT(x, y, m).
     */
    case DIMENSION_3DM = '3DM';
    /*
     * Three-Dimension Measured Geometry, e.g. POINT(x, y, z, m).
     */
    case DIMENSION_4D = '4D';
}
