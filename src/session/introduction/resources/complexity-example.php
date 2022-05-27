<?php

declare(strict_types=1);

final class Controller {
    /**
     * @Route("/news/{id}")
     */
    public function __invoke(string $id): ?string {
        $entity = $this->repository->find($id);

        if (null !== $entity) {
            if (1 === $entity->getAuthor()) {
                if (null !== $entity->getTitle()) {
                    $title = $entity->getTitle();
                    if (str_starts_with(strtolower($title), 'abc')) {
                        return strtoupper($title);
                    }
                }
            }
        }
        return null;
    }
}
