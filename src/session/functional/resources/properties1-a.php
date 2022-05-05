class User {
    public string $isAdmin = false;
}

$user = new User;
$user->isAdmin; // false
$user->isAdmin = true;
$user->isAdmin; // true
