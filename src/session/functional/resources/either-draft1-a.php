final class Either { |\pause|
    public static function left($value): Either;
    public static function right($value): Either;
    |\pause|
    public function __invoke(callable $ifException): mixed;
    |\pause|
    public function then(callable $f): self;
}

