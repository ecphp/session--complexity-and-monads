$checkAuthor = fn (object $e): Maybe => new Maybe(
    (1 === $e->getAuthor())
        ? $e
        : null
);|\pause|

$getTitle    = fn (object $e): Maybe => new Maybe($e->getTitle());|\pause|

$checkTitle  = fn (string $t): Maybe => new Maybe(
    str_starts_with('abc', strtolower($t))
        ? $t
        : null
);|\pause|

$strToUpper  = fn (string $s): Maybe => new Maybe(strtoupper($s));|\pause|

$findEntity  = fn (int $id): Maybe => new Maybe($repository->find($id));|\pause|

$findEntity |\pause|
    ->then($checkAuthor) |\pause|
    ->then($getTitle) |\pause|
    ->then($checkTitle) |\pause|
    ->then($strToUpper) |\pause|
    ();
