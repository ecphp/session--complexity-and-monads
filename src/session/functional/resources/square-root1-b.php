function safeSquareRoot(float $n): float {
    return ($float < 0)
      ? throw new DomainException('Invalid input.')
      : sqrt($n);
}
