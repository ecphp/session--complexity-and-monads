class Multiply {
  public function __invoke(int $a, int $b): int
  {
      return $a * $b;
  }
}

(new Multiply)(6, 7); // 42
