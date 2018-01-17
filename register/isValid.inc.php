<?php
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
if ($this->isEmptyPostField(self::PASSWORD1)) {
    $this->errorMessages[self::PASSWORD1] = "Please enter a password.";
}
if (!$this->isEmptyPostField(self::PASSWORD1) && !Utilities::isPassword($_POST[self::PASSWORD1], PWD_MIN, PWD_MAX)) {
    $this->errorMessages[self::PASSWORD1] = "Password must be at least 5 characters long.";
}
if ($this->isEmptyPostField(self::PASSWORD2)) {
    $this->errorMessages[self::PASSWORD2] = "Please repeat your password.";
}
if (!$this->isEmptyPostField(self::PASSWORD2) && strcmp($_POST[self::PASSWORD1], $_POST[self::PASSWORD2]) !== 0) {
    $this->errorMessages[self::PASSWORD2] = "Password re-type does not match.";
}
