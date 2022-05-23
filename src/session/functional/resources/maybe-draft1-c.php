(new Maybe($repository->find($id))) |\pause|
    ->then(
        fn (object $e): ?object => (1 === $e->getAuthor()) ? $e : null
    ) |\pause|
    ->then(
        fn (object $e): ?string => $e->getTitle()
    ) |\pause|
    ->then(
        fn (string $t): ?string => str_starts_with('abc', strtolower($t))
            ? $t
            : null
    ) |\pause|
    ->then(
        fn (string $t): string => strtoupper($t)
    )();
