Geo I/O Interface
=================

Geo I/O base interfaces.

Interfaces
----------

### Factory

This interface used by the Geo I/O parser implementations to create the actual
geometric objects from the parsed representations.

### Extractor

This interface is used by the Geo I/O generator implementations to extract data
from geometric objects for the generated geometric representations.

### Dimension

This interface provides constants to define dimensions of geometric objects.

Installation
------------

Install [through composer](http://getcomposer.org). Check the
[packagist page](https://packagist.org/packages/geo-io/interface) for all
available versions.

```bash
composer require geo-io/interface
```

License
-------

Geo I/O Interface is released under the [MIT License](LICENSE).
