final class Maybe { |\pause|
    public function __construct(mixed $something): self;
    |\pause|
    public function then(callable $f): self;
    |\pause|
    public function __invoke(): mixed;
}

