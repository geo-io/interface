<?php

declare(strict_types=1);

namespace GeoIO;

interface Factory
{
    /**
     * Creates a Point for the given dimension, optional SRID and Coordinates.
     *
     * If the Coordinates argument is `null`, it should create an empty point.
     */
    public function createPoint(
        string $dimension,
        ?int $srid,
        ?Coordinates $coordinates,
    ): mixed;

    /**
     * Creates a LineString for the given dimension, optional SRID and Points.
     *
     * The `$points` arguments yields Points created through the createPoint()
     * method from this Factory.
     *
     * If the iterable does not yield any Points, it should create an empty
     * LineString.
     */
    public function createLineString(
        string $dimension,
        ?int $srid,
        iterable $points,
    ): mixed;

    /**
     * Creates a LinearRing for the given dimension, optional SRID and Points.
     *
     * The `$points` arguments yields Points created through the createPoint()
     * method from this Factory.
     *
     * If the iterable does not yield any Points, it should create an empty
     * LinearRing.
     *
     * Note, that a LinearRing represents a closed LineString. If the
     * implementation does not provide a dedicated implementation for a
     * LinearRing, it can return a LineString instead.
     */
    public function createLinearRing(
        string $dimension,
        ?int $srid,
        iterable $points,
    ): mixed;

    /**
     * Creates a Polygon for the given dimension, optional SRID and
     * LinearRings.
     *
     * The `$linearRings` arguments yields LinearRings created through the
     * createLinearRing() method from this Factory.
     *
     * If the iterable does not yield any LinearRings, it should create an empty
     * Polygon.
     */
    public function createPolygon(
        string $dimension,
        ?int $srid,
        iterable $linearRings,
    ): mixed;

    /**
     * Creates a MultiPoint for the given dimension, optional SRID and
     * Points.
     *
     * The `$points` arguments yields Points created through the createPoint()
     * method from this Factory.
     *
     * If the iterable does not yield any Points, it should create an empty
     * MultiPoint.
     */
    public function createMultiPoint(
        string $dimension,
        ?int $srid,
        iterable $points,
    ): mixed;

    /**
     * Creates a MultiLineString for the given dimension, optional SRID and
     * LineStrings.
     *
     * The `$lineString` arguments yields LineStrings created through the
     * createLineString() method from this Factory.
     *
     * If the iterable does not yield any LineStrings, it should create an empty
     * MultiLineString.
     */
    public function createMultiLineString(
        string $dimension,
        ?int $srid,
        iterable $lineStrings,
    ): mixed;

    /**
     * Creates a MultiPolygon for the given dimension, optional SRID and
     * Polygons.
     *
     * The `$polygons` arguments yields Polygons created through the
     * createPolygon() method from this Factory.
     *
     * If the iterable does not yield any Polygons, it should create an empty
     * MultiPolygon.
     */
    public function createMultiPolygon(
        string $dimension,
        ?int $srid,
        iterable $polygons,
    ): mixed;

    /**
     * Creates a GeometryCollection for the given dimension, optional SRID and
     * geometries.
     *
     * The `$geometries` arguments yields geometries created through any of the
     * create*() methods from this Factory.
     *
     * If the iterable does not yield any geometries, it should create an empty
     * GeometryCollection.
     */
    public function createGeometryCollection(
        string $dimension,
        ?int $srid,
        iterable $geometries,
    ): mixed;
}
