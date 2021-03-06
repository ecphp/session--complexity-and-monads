$checkAuthor = fn (object $e): ?object => (1 === $e->getAuthor())
    ? $e
    : null;|\pause|

$getTitle    = fn (object $e): ?string => $e->getTitle();|\pause|

$checkTitle  = fn (string $t): ?string => str_starts_with('abc', strtolower($t))
    ? $t
    : null;|\pause|

$findEntity  = fn (int $id): Maybe => new Maybe($repository->find($id));|\pause|

$findEntity |\pause|
    ->then($checkAuthor) |\pause|
    ->then($getTitle) |\pause|
    ->then($checkTitle) |\pause|
    ->then('strtoupper')
    ();
