function safeSquareRoot(float $n): ?float {
    return ($float < 0)
      ? null
      : sqrt($n);
}
