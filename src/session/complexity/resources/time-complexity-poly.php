final class TimeComplexity {

    public function polynomial(iterable $matrix): int {
        $sum = 0;

        foreach ($matrix as $i => $row) {
            foreach ($row as $j => $column) {
                $sum += $matrix[$i][$j];
            }
        }

        return $sum;
    }
}
