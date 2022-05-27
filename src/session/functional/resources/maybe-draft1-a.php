final class Maybe { |\pause|
    public function __construct(mixed $value): self;
    |\pause|
    public function __invoke(): mixed;
    |\pause|
    public function then(callable $f): self;
}

