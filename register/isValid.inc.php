if ($this->isEmptyPostField(self::USERNAME)) {
    $this->errorMessages[self::USERNAME] = "Please choose a user name.";
}
if (!$this->isUnique(self::USERNAME)) {
    $this->errorMessages[self::USERNAME] = "This user name is already taken. Please choose another one";
}
if ($this->isEmptyPostField(self::EMAIL)) {
    $this->errorMessages[self::EMAIL] = "Please enter your e-mail address.";
}
if (!$this->isEmptyPostField(self::EMAIL) && !Utilities::isEmail($_POST[self::EMAIL])) {
    $this->errorMessages[self::EMAIL] = "Please enter a valid e-mail address";
}
if (!$this->isEmptyPostField(self::EMAIL) && !$this->isUnique(self::EMAIL)) {
    $this->errorMessages[self::EMAIL] = "A user with this e-mail address is already registered. Please choose another one.";
}
if ($this->isEmptyPostField(self::PASSWORD)) {
    $this->errorMessages[self::PASSWORD] = "Please enter a password.";
}
if (!$this->isEmptyPostField(self::PASSWORD) && !Utilities::isPassword($_POST[self::PASSWORD], 2, 8)) {
    $this->errorMessages[self::PASSWORD] = "Password must be at least 5 characters long.";
}
if ($this->isEmptyPostField(self::PASSWORD_RETYPE)) {
    $this->errorMessages[self::PASSWORD_RETYPE] = "Please repeat your password.";
}
if (!$this->isEmptyPostField(self::PASSWORD_RETYPE) && strcmp($_POST[self::PASSWORD], $_POST[self::PASSWORD_RETYPE]) !== 0) {
    $this->errorMessages[self::PASSWORD_RETYPE] = "Password re-type does not match.";
}