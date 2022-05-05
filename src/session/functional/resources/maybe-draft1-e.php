<?php

final class Maybe {
    private function __construct(private mixed $something) {}
    |\pause|
    public static function of(?mixed $something = null): self {
        return new self($something);
    }
    |\pause|
    public function then(callable $f): self {
        if (null === $this->something) {
            return $this;
        }

        return $f($this->something);
    }
    |\pause|
    public function __invoke(): mixed {
        return $this->something;
    }
}
