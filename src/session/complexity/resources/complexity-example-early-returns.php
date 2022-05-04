<?php
public function __invoke(string $id): ?string {
    $entity = $this->repository->find($id);

    if (null === $entity) {
        return;
    }

    if (1 !== $entity->getAuthor()) {
        return;
    }

    if (null === $entity->getTitle()) {
        return;
    }

    $title = $entity->getTitle();

    if (false === str_starts_with(strtolower($title), 'abc')) {
        return;
    }

    return strtoupper($title);
}
