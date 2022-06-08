function safeSquareRoot(float $n): float {
    return ($n < 0)
      ? 0.0
      : sqrt($n);
}
