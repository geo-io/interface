Geo I/O Interface
==

[![Build Status](https://github.com/geo-io/interface/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/geo-io/interface/actions/workflows/ci.yml)
[![Coverage Status](https://coveralls.io/repos/geo-io/interface/badge.svg?branch=main&service=github)](https://coveralls.io/github/geo-io/interface?branch=main)

Geo I/O base interfaces, enums and value objects.

* [Installation](#installation)
* [Interfaces](#interfaces)
  * [Factory](#factory)
  * [Extractor](#extractor)
* [Enums](#enums)
  * [Dimension](#dimension)
  * [GeometryType](#geometrytype)
* [Value Objects](#value-objects)
  * [Coordinates](#Coordinates)

Installation
--

Install [through composer](http://getcomposer.org). Check the
[packagist page](https://packagist.org/packages/geo-io/interface) for all
available versions.

```bash
composer require geo-io/interface
```

Interfaces
--

### Factory

This [interface](src/Factory.php) is used by the Geo I/O parser implementations
to create the actual geometric objects from the parsed representations.

#### Implementations

* [Geo I/O Geometry](https://github.com/geo-io/geometry)
* [Geo I/O GeoJSON](https://github.com/geo-io/geojson)

### Extractor

This [interface](src/Extractor.php) is used by the Geo I/O generator
implementations to extract data  from geometric objects for the generated
geometric representations.

* [Geo I/O Geometry](https://github.com/geo-io/geometry)
* [Geo I/O GeoJSON](https://github.com/geo-io/geojson)

Enums
--

### Dimension

This [class](src/Dimension.php) provides constants to define the dimension of
geometric objects.

### GeometryType

This [class](src/GeometryType.php) provides constants to define the type of
geometric objects.

Value Objects
--

### Coordinates

This [class](src/Coordinates.php) represents coordinates with `x`, `y` and
optional `z` and `m` properties.

License
--

Copyright (c) 2014-2022 Jan Sorgalla. Released under the [MIT License](LICENSE).
