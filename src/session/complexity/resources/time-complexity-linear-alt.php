final class TimeComplexity {

    public function linear(iterable $integers): int {
        return array_reduce(
            $integers,
            function (int $carry, int $integer): int {
                return ($integer < $carry)
                    ? $integer
                    : $carry;
            },
            0
        );
    }
}
