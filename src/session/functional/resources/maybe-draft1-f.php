$checkAuthor = fn (object $e): Maybe => new Maybe(
    (1 === $e->getAuthor()) ? $e : null
);

$getTitle = fn (object $e): Maybe => new Maybe($e->getTitle());|\pause|

$checkTitle = fn (string $t): Maybe => new Maybe(
    str_starts_with('abc', strtolower($t)) ? $t : null
);

(new Maybe($repository->find($id))) |\pause|
    ->then($checkAuthor) |\pause|
    ->then($getTitle) |\pause|
    ->then($checkTitle) |\pause|
    ->then('strtoupper')();
