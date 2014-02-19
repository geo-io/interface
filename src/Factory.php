<?php

namespace GeoIO;

interface Factory
{
    public function createPoint($dimension, array $coordinates, $srid = null);
    public function createLineString($dimension, array $points, $srid = null);
    public function createLinearRing($dimension, array $points, $srid = null);
    public function createPolygon($dimension, array $lineStrings, $srid = null);
    public function createMultiPoint($dimension, array $points, $srid = null);
    public function createMultiLineString($dimension, array $lineStrings, $srid = null);
    public function createMultiPolygon($dimension, array $polygons, $srid = null);
    public function createGeometryCollection($dimension, array $geometries, $srid = null);
}
