class BetterPasswordValidator extends PasswordValidator {
  public function __invoke(string $hash, string $clearPassword): bool
  {
      return true;
  }
}

var_dump((new BetterPasswordValidator) instanceof PasswordValidator); // true
(new BetterPasswordValidator)('/* hash */', 'hello'); // true
(new BetterPasswordValidator)('/* hash */', 'admin'); // true
