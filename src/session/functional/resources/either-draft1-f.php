$checkAuthor = fn (object $e): Either =>
    (1 === $e->getAuthor())
        ? Either::right($e)
        : Either::left(new Exception('Unable to find author.'));|\pause|

$getTitle = fn (object $e): Either => Either::right($e->getTitle());|\pause|

$checkTitle = fn (string $t): Either =>
    str_starts_with('abc', strtolower($t))
        ? Either::right($t)
        : Either::left(new Exception('Invalid uppercase title'));|\pause|

$findEntity = (null === $e = $repository->find($id))
    ? Either::left(new Exception('Unable to find entity id'))
    : Either::right($e);|\pause|

$findEntity
    ->then($checkAuthor) |\pause|
    ->then($getTitle) |\pause|
    ->then($checkTitle) |\pause|
    ->then('strtoupper')
    (
        static fn (Exception $e) => throw $e
    );
