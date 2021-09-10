<?php

declare(strict_types=1);

namespace GeoIO;

interface Factory
{
    public function createPoint(
        string $dimension,
        ?int $srid,
        ?Coordinates $coordinates,
    ): mixed;

    public function createLineString(
        string $dimension,
        ?int $srid,
        iterable $points,
    ): mixed;

    public function createLinearRing(
        string $dimension,
        ?int $srid,
        iterable $points,
    ): mixed;

    public function createPolygon(
        string $dimension,
        ?int $srid,
        iterable $lineStrings,
    ): mixed;

    public function createMultiPoint(
        string $dimension,
        ?int $srid,
        iterable $points,
    ): mixed;

    public function createMultiLineString(
        string $dimension,
        ?int $srid,
        iterable $lineStrings,
    ): mixed;

    public function createMultiPolygon(
        string $dimension,
        ?int $srid,
        iterable $polygons,
    ): mixed;

    public function createGeometryCollection(
        string $dimension,
        ?int $srid,
        iterable $geometries,
    ): mixed;
}
