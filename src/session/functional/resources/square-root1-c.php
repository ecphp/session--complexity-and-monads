function safeSquareRoot(float $n): float {
    return ($float < 0)
      ? 0
      : sqrt($n);
}
