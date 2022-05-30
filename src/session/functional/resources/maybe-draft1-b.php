<?php

final class Maybe {
    public function __construct(private mixed $value) {}
    |\pause|
    public function __invoke(): mixed { return $this->value; }
    |\pause|
    public function then(callable $f): self {
        if (null === $this->value) {
            return $this;
        }

        return new self($f($this->value));
    }
}
|\pause|
(new Maybe('a'))->then('strtoupper')();|\pause| // A |\pause|
(new Maybe(null))->then('strtoupper')();|\pause| // null
