class BetterPasswordValidator extends PasswordValidator {
  public function __invoke(string $hash, string $clearPassword): int
  {
      return true;
  }
}

(new BetterPasswordValidator)('/* hash */', 'hello'); // true
(new BetterPasswordValidator)('/* hash */', 'admin'); // true
