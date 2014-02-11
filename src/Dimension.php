<?php

namespace GeoIO;

interface Dimension
{
    /*
     * Two-Dimension Geometry, eg. POINT(x, y)
     */
    const DIMENSION_2D = '2D';

    /*
     * Three-Dimension Geometry, eg. POINT(x, y, z)
     */
    const DIMENSION_3DZ = '3DZ';

    /*
     * Two-Dimension Measured Geometry, eg. POINT(x, y, m)
     */
    const DIMENSION_3DM = '3DM';

    /*
     * Three-Dimension Measured Geometry, eg. POINT(x, y, z, m)
     */
    const DIMENSION_4D = '4D';
}
