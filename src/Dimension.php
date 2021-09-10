<?php

declare(strict_types=1);

namespace GeoIO;

interface Dimension
{
    /*
     * Two-Dimension Geometry, eg. POINT(x, y)
     */
    public const DIMENSION_2D = '2D';

    /*
     * Three-Dimension Geometry, eg. POINT(x, y, z)
     */
    public const DIMENSION_3DZ = '3DZ';

    /*
     * Two-Dimension Measured Geometry, eg. POINT(x, y, m)
     */
    public const DIMENSION_3DM = '3DM';

    /*
     * Three-Dimension Measured Geometry, eg. POINT(x, y, z, m)
     */
    public const DIMENSION_4D = '4D';
}
