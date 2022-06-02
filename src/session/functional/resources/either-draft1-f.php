$checkAuthor = fn (object $e): Either => (1 === $e->getAuthor())
    ? Either::right($e)
    : Either::left(new Exception('Invalid author'));|\pause|

$getTitle    = fn (object $e): Either => (null === $title = $e->getTitle())
    ? Either::left(new Exception('No title has been found'))
    : Either::right($e->getTitle());|\pause|

$checkTitle  = fn (string $t): Either => str_starts_with('abc', strtolower($t))
    ? Either::right($t)
    : Either::left(new Exception('Title does not start with abc'));|\pause|

$strToUpper  = fn (string $str): Either => Either::right(strtoupper($str));|\pause|

$findEntity  = fn (int $id): Either => (null === $e = $repository->find($id))
    ? Either::left(new Exception('Unable to find entity id'))
    : Either::right($e);|\pause|

$findEntity |\pause|
    ->then($checkAuthor) |\pause|
    ->then($getTitle) |\pause|
    ->then($checkTitle) |\pause|
    ->then($strToUpper) |\pause|
    (
        static fn (Exception $e) => throw $e
    );
