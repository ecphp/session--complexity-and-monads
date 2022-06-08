class PasswordValidator {
  public function __invoke(string $hash, string $clearPassword): bool
  {
      return $hash === sha1($clearPassword);
  }
}

(new PasswordValidator)('/* hash */', 'hello'); // true or false
