<?php

declare(strict_types=1);

namespace GeoIO;

final class Coordinates
{
    public function __construct(
        public readonly float $x,
        public readonly float $y,
        public readonly ?float $z = null,
        public readonly ?float $m = null,
    ) {
    }
}
