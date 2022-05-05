<?php

final class Maybe {
    private function __construct(private mixed $something) {}
    |\pause|
    public static function of(mixed $something): self {
        return new self($something);
    }
    |\pause|
    public function then(callable $f): self {
        if (null === $this->something) {
            return $this;
        }

        return self::of($f($this->something));
    }
    |\pause|
    public function __invoke(): mixed {
        return $this->something;
    }
}
|\pause|
Maybe::of('a')->then('strtoupper')();|\pause| // A
|\pause|
Maybe::of(null)->then('strtoupper')();|\pause| // null
