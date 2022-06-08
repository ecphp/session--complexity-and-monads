function safeSquareRoot(float $n): float {
    return ($n < 0)
      ? throw new DomainException('Invalid input.')
      : sqrt($n);
}
