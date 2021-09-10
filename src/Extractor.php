<?php

declare(strict_types=1);

namespace GeoIO;

use Traversable;

interface Extractor
{
    public const TYPE_POINT = 'Point';
    public const TYPE_LINESTRING = 'LineString';
    public const TYPE_POLYGON = 'Polygon';
    public const TYPE_MULTIPOINT = 'MultiPoint';
    public const TYPE_MULTILINESTRING = 'MultiLineString';
    public const TYPE_MULTIPOLYGON = 'MultiPolygon';
    public const TYPE_GEOMETRYCOLLECTION = 'GeometryCollection';

    /**
     * @param $geometry
     *
     * @return bool
     */
    public function supports($geometry);

    /**
     * @param mixed $geometry
     *
     * @return string One of the Extractor::TYPE_* constants
     */
    public function extractType($geometry);

    /**
     * @param mixed $geometry
     *
     * @return string One of the Dimension::DIMENSION_* constants
     */
    public function extractDimension($geometry);

    /**
     * @param mixed $geometry
     *
     * @return int|null
     */
    public function extractSrid($geometry);

    /**
     * Structure of the returned array:.
     *
     * [
     *     'x' => $x, // float
     *     'y' => $y, // float
     *     'z' => $z, // float|null
     *     'm' => $m  // float|null
     * ]
     *
     * @param mixed $point
     *
     * @return array
     */
    public function extractCoordinatesFromPoint($point);

    /**
     * @param mixed $lineString
     *
     * @return array|Traversable
     */
    public function extractPointsFromLineString($lineString);

    /**
     * @param mixed $polygon
     *
     * @return array|Traversable
     */
    public function extractLineStringsFromPolygon($polygon);

    /**
     * @param mixed $multiPoint
     *
     * @return array|Traversable
     */
    public function extractPointsFromMultiPoint($multiPoint);

    /**
     * @param mixed $multiLineString
     *
     * @return array|Traversable
     */
    public function extractLineStringsFromMultiLineString($multiLineString);

    /**
     * @param mixed $multiPolygon
     *
     * @return array|Traversable
     */
    public function extractPolygonsFromMultiPolygon($multiPolygon);

    /**
     * @param mixed $geometryCollection
     *
     * @return array|Traversable
     */
    public function extractGeometriesFromGeometryCollection($geometryCollection);
}
