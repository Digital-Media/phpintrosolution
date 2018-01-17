<?php
if ($this->isEmptyPostField(self::USERNAME)) {
    $this->errorMessages[self::USERNAME] = "Please enter your user name.";
}
if ($this->isEmptyPostField(self::PASSWORD)) {
    $this->errorMessages[self::PASSWORD] = "Please enter your password.";
}
if (!$this->isEmptyPostField(self::USERNAME) && !$this->isEmptyPostField(self::PASSWORD) && !$this->authenticateUser()) {
    $this->errorMessages[self::PASSWORD] = "Invalid user name or password.";
}