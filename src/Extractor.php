<?php

declare(strict_types=1);

namespace GeoIO;

interface Extractor
{
    /**
     * Determines whether the given geometry is supported by this Extractor.
     */
    public function supports(mixed $geometry): bool;

    /**
     * Extracts the type of the given geometry.
     */
    public function extractType(mixed $geometry): GeometryType;

    /**
     * Extracts the dimension of the given geometry.
     */
    public function extractDimension(mixed $geometry): Dimension;

    /**
     * Extracts the SRID of the given geometry.
     *
     * Must return `null` if the geometry has no SRID assigned.
     */
    public function extractSrid(mixed $geometry): ?int;

    /**
     * Extracts the Coordinates of the given Point.
     *
     * Must return `null` if the Point is empty.
     */
    public function extractCoordinatesFromPoint(mixed $point): ?Coordinates;

    /**
     * Extracts the Points of the given LineString.
     *
     * The iterable must yield Point representations which are accepted by the
     * extractCoordinatesFromPoint() method of this Extractor.
     *
     * Must return an empty iterable if the LineString is empty.
     */
    public function extractPointsFromLineString(mixed $lineString): iterable;

    /**
     * Extracts the LineStrings of the given Polygon.
     *
     * The iterable must yield LineString representations which are accepted
     * by the extractPointsFromLineString() method of this Extractor.
     *
     * Must return an empty iterable if the Polygon is empty.
     */
    public function extractLineStringsFromPolygon(mixed $polygon): iterable;

    /**
     * Extracts the Points of the given MultiPoint.
     *
     * The iterable must return Point representations which are accepted by the
     * extractCoordinatesFromPoint() method of this Extractor.
     *
     * Must return an empty iterable if the MultiPoint is empty.
     */
    public function extractPointsFromMultiPoint(mixed $multiPoint): iterable;

    /**
     * Extracts the LineStrings of the given MultiLineString.
     *
     * The iterable must yield LineString representations which are accepted
     * by the extractPointsFromLineString() method of this Extractor.
     *
     * Must return an empty iterable if the MultiLineString is empty.
     */
    public function extractLineStringsFromMultiLineString(mixed $multiLineString): iterable;

    /**
     * Extracts the Polygons of the given MultiPolygon.
     *
     * The iterable must yield Polygon representations which are accepted
     * by the extractLineStringsFromPolygon() method of this Extractor.
     *
     * Must return an empty iterable if the MultiPolygon is empty.
     */
    public function extractPolygonsFromMultiPolygon(mixed $multiPolygon): iterable;

    /**
     * Extracts the geometries of the given GeometryCollection.
     *
     * The iterable must yield geometry representations which are accepted
     * by any of the extract*() methods of this Extractor.
     *
     * Must return an empty iterable if the GeometryCollection is empty.
     */
    public function extractGeometriesFromGeometryCollection(mixed $geometryCollection): iterable;
}
