final class TimeComplexity {

    public function linear(iterable $integers): int {
        $min = 0;

        foreach ($integers as $integer) {
            $min = ($integer < $min)
                ? $integer
                : $min;
        }

        return $min;
    }
}
