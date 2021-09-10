<?php

declare(strict_types=1);

namespace GeoIO;

interface Extractor
{
    public const TYPE_POINT = 'Point';
    public const TYPE_LINESTRING = 'LineString';
    public const TYPE_POLYGON = 'Polygon';
    public const TYPE_MULTIPOINT = 'MultiPoint';
    public const TYPE_MULTILINESTRING = 'MultiLineString';
    public const TYPE_MULTIPOLYGON = 'MultiPolygon';
    public const TYPE_GEOMETRYCOLLECTION = 'GeometryCollection';

    public function supports(mixed $geometry): bool;

    /**
     * Must return one of the Extractor::TYPE_* constants.
     */
    public function extractType(mixed $geometry): string;

    /**
     * Must return one of the Dimension::DIMENSION_* constants.
     */
    public function extractDimension(mixed $geometry): string;

    /**
     * Must return the SRID if available, null otherwise.
     */
    public function extractSrid(mixed $geometry): ?int;

    /**
     * Must return an array with the following structure.
     *
     * [
     *     'x' => $x, // float
     *     'y' => $y, // float
     *     'z' => $z, // float|null
     *     'm' => $m  // float|null
     * ]
     *
     * @return array{x: int, y: int, z: float|null, m: float|null}
     */
    public function extractCoordinatesFromPoint(mixed $point): array;

    public function extractPointsFromLineString(mixed $lineString): iterable;

    public function extractLineStringsFromPolygon(mixed $polygon): iterable;

    public function extractPointsFromMultiPoint(mixed $multiPoint): iterable;

    public function extractLineStringsFromMultiLineString(mixed $multiLineString): iterable;

    public function extractPolygonsFromMultiPolygon(mixed $multiPolygon): iterable;

    public function extractGeometriesFromGeometryCollection(mixed $geometryCollection): iterable;
}
