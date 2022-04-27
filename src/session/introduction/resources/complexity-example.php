<?php

declare(strict_types=1);

namespace App;

final class Controller {

    public function __invoke(int $id): string {
        $entity = $this->repository->find($id);

        if (null !== $entity) {
            if (1 === $entity->getAuthor()) {
                if (null !== $entity->getTitle()) {
                    $title = $entity->getTitle();
                    if (true === str_starts_with(strtolower($title), 'abc')) {
                        return strtoupper($entity);
                    }
                }
            }
        }
    }
}
