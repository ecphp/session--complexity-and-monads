final class SpaceComplexity
{
    public function linear(iterable $input): int {
        $sum = 0;

        foreach ($input as $item) {
            $sum += $item;
        }

        return $sum;
    }
}
