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

        return $f($this->value);
    }
}
