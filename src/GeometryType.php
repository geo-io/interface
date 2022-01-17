<?php

declare(strict_types=1);

namespace GeoIO;

enum GeometryType: string
{
    case POINT = 'Point';
    case LINESTRING = 'LineString';
    case POLYGON = 'Polygon';
    case MULTIPOINT = 'MultiPoint';
    case MULTILINESTRING = 'MultiLineString';
    case MULTIPOLYGON = 'MultiPolygon';
    case GEOMETRYCOLLECTION = 'GeometryCollection';
}
