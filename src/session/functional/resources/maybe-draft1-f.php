$checkAuthor = fn (object $e): Maybe => Maybe::of(
    (1 === $e->getAuthor()) ? $e : null
);

$getTitle = fn (object $e): Maybe => Maybe::of($e->getTitle());|\pause|

$checkTitle = fn (string $t): Maybe => Maybe::of(
    str_starts_with('abc', strtolower($t)) ? $t : null
);

Maybe::of($repository->find($id)) |\pause|
    ->then($checkAuthor) |\pause|
    ->then($getTitle) |\pause|
    ->then($checkTitle) |\pause|
    ->then('strtoupper')();
