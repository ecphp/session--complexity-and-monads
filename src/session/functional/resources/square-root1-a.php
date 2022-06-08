function safeSquareRoot(float $n): ?float {
    return ($n < 0)
      ? null
      : sqrt($n);
}
