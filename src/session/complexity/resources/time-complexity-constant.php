<?php

declare(strict_types=1);

namespace App;

final class TimeComplexity {

    public function constant(iterable $integers): int {
        foreach ($integers as $integer) {
            return $integer;
        }
    }
}
