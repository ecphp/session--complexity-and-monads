class User {
    private string $isAdmin = false;
}

$user = new User;
$user->isAdmin; // error
$user->isAdmin = true; // error
