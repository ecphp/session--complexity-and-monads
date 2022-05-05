final class Maybe { |\pause|
    public static function of(mixed $something): self;
    |\pause|
    public function then(callable $ab): self;
    |\pause|
    public function __invoke(): mixed;
}

