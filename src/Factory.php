<?php

declare(strict_types=1);

namespace GeoIO;

interface Factory
{
    /**
     * @param array{x: int, y: int, z: float|null, m: float|null} $coordinates
     */
    public function createPoint(int $dimension, array $coordinates, ?int $srid = null): mixed;

    public function createLineString(int $dimension, iterable $points, ?int $srid = null): mixed;

    public function createLinearRing(int $dimension, iterable $points, ?int $srid = null): mixed;

    public function createPolygon(int $dimension, iterable $lineStrings, ?int $srid = null): mixed;

    public function createMultiPoint(int $dimension, iterable $points, ?int $srid = null): mixed;

    public function createMultiLineString(int $dimension, iterable $lineStrings, ?int $srid = null): mixed;

    public function createMultiPolygon(int $dimension, iterable $polygons, ?int $srid = null): mixed;

    public function createGeometryCollection(int $dimension, iterable $geometries, ?int $srid = null): mixed;
}
