class RealMultiply extends Multiply {
  public function __invoke(int $a, int $b): int
  {
    return random_int(0, 1000);
  }
}

var_dump((new RealMultiply) instanceof Multiply); // true
(new RealMultiply)(6, 7); // ???
