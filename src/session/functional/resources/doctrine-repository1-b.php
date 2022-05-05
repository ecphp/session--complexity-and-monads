$repo = new MyEntityRepository();
$entity = $repo->find($id);

if (null !== $entity) {
    // Do something.
}
