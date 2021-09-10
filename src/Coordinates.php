<?php

declare(strict_types=1);

namespace GeoIO;

/**
 * @psalm-immutable
 */
class Coordinates
{
    public function __construct(
        public float $x,
        public float $y,
        public ?float $z = null,
        public ?float $m = null,
    ) {
    }
}
