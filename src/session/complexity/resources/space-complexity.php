<?php

declare(strict_types=1);

namespace App;

final class SpaceComplexity {

    public function linear(): int {
        $data = range(1,10);

        $sum = 0;

        foreach ($data as $int) {
            $sum += $int;
        }

        return $sum;
    }
}
