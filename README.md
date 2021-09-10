Geo I/O Interface
==

Geo I/O base interfaces, enums and value objects.

Interfaces
--

### Factory

This interface used by the Geo I/O parser implementations to create the actual
geometric objects from the parsed representations.

### Extractor

This interface is used by the Geo I/O generator implementations to extract data
from geometric objects for the generated geometric representations.

Enums
--

### Dimension

This class provides constants to define the dimension of geometric objects.

### GeometryType

This class provides constants to define the type of geometric objects.

Value Objects
--

### Coordinates

This class represents coordinates with x, y, z and m properties.

Installation
--

Install [through composer](http://getcomposer.org). Check the
[packagist page](https://packagist.org/packages/geo-io/interface) for all
available versions.

```bash
composer require geo-io/interface
```

License
--

Geo I/O Interface is released under the [MIT License](LICENSE).
