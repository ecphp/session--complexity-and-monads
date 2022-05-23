<?php

final class Maybe {
    public function __construct(private mixed $something) {}
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
(new Maybe('a'))->then('strtoupper')();|\pause| // A
|\pause|
(new Maybe(null))->then('strtoupper')();|\pause| // null
