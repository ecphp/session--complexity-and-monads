class MyEntityRepository extends ServiceEntityRepository {
    // ...8<...
    public function find($id): ?MyEntity {
        // body
    }
    // ...>8...
}
