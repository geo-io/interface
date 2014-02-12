<?php

namespace GeoIO;

interface Extractor
{
    const TYPE_POINT = 'POINT';
    const TYPE_LINESTRING = 'LINESTRING';
    const TYPE_POLYGON = 'POLYGON';
    const TYPE_MULTIPOINT = 'MULTIPOINT';
    const TYPE_MULTILINESTRING = 'MULTILINESTRING';
    const TYPE_MULTIPOLYGON = 'MultiPoMULTIPOLYGONlygon';
    const TYPE_GEOMETRYCOLLECTION = 'GEOMETRYCOLLECTION';

    /**
     * @param $geometry
     * @return boolean
     */
    public function supports($geometry);

    /**
     * @param mixed $geometry
     * @return string One of the Extractor::TYPE_* constants
     */
    public function type($geometry);

    /**
     * Returns:
     *
     * [
     *     'dimension' => $dimension, // string (One of the Dimension::DIMENSION_* constants)
     *     'coordinates' => [
     *         'x' => $x, // float
     *         'y' => $y, // float
     *         'z' => $z, // float|null
     *         'm' => $m  // float|null
     *     ],
     *     'srid' => $srid // integer|null
     * ]
     *
     * @param mixed $point
     * @return array
     */
    public function extractPoint($point);

    /**
     * Returns:
     *
     * [
     *     'dimension' => $dimension, // string (One of the Dimension::DIMENSION_* constants)
     *     'points' => $points, // array|Traversable
     *     'srid' => $srid // integer|null
     * ]
     *
     * @param mixed $lineString
     * @return array
     */
    public function extractLineString($lineString);

    /**
     * Returns:
     *
     * [
     *     'dimension' => $dimension, // string (One of the Dimension::DIMENSION_* constants)
     *     'linestrings' => $linestrings, // array|Traversable
     *     'srid' => $srid // integer|null
     * ]
     *
     * @param mixed $polygon
     * @return array
     */
    public function extractPolygon($polygon);

    /**
     * Returns:
     *
     * [
     *     'dimension' => $dimension, // string (One of the Dimension::DIMENSION_* constants)
     *     'points' => $points, // array|Traversable
     *     'srid' => $srid // integer|null
     * ]
     *
     * @param mixed $multiPoint
     * @return array
     */
    public function extractMultiPoint($multiPoint);

    /**
     * Returns:
     *
     * [
     *     'dimension' => $dimension, // string (One of the Dimension::DIMENSION_* constants)
     *     'linestrings' => $linestrings, // array|Traversable
     *     'srid' => $srid // integer|null
     * ]
     *
     * @param mixed $multiLineString
     * @return array
     */
    public function extractMultiLineString($multiLineString);

    /**
     * Returns:
     *
     * [
     *     'dimension' => $dimension, // string (One of the Dimension::DIMENSION_* constants)
     *     'polygons' => $polygons, // array|Traversable
     *     'srid' => $srid // integer|null
     * ]
     *
     * @param mixed $multiPolygon
     * @return array
     */
    public function extractMultiPolygon($multiPolygon);

    /**
     * Returns:
     *
     * [
     *     'dimension' => $dimension, // string (One of the Dimension::DIMENSION_* constants)
     *     'geometries' => $geometries, // array|Traversable
     *     'srid' => $srid // integer|null
     * ]
     *
     * @param mixed $geometryCollection
     * @return array
     */
    public function extractGeometryCollection($geometryCollection);
}
