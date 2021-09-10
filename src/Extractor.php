<?php

declare(strict_types=1);

namespace GeoIO;

interface Extractor
{
    public function supports(mixed $geometry): bool;

    public function extractType(mixed $geometry): string;

    public function extractDimension(mixed $geometry): string;

    public function extractSrid(mixed $geometry): ?int;

    public function extractCoordinatesFromPoint(mixed $point): ?Coordinates;

    public function extractPointsFromLineString(mixed $lineString): iterable;

    public function extractLineStringsFromPolygon(mixed $polygon): iterable;

    public function extractPointsFromMultiPoint(mixed $multiPoint): iterable;

    public function extractLineStringsFromMultiLineString(mixed $multiLineString): iterable;

    public function extractPolygonsFromMultiPolygon(mixed $multiPolygon): iterable;

    public function extractGeometriesFromGeometryCollection(mixed $geometryCollection): iterable;
}
