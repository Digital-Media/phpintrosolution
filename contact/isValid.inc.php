<?php
if ($this->isEmptyPostField(self::SUBJECT)) {
    $this->errorMessages[self::SUBJECT] = "Please enter a subject.";
}
if ($this->isEmptyPostField(self::REQUEST)) {
    $this->errorMessages[self::REQUEST] = "Please enter a request.";
}
if ($this->isEmptyPostField(self::EMAIL)) {
    $this->errorMessages[self::EMAIL] = "Please enter your email address.";
}
/**
 * Browsers let email pass with type="email", that are filtered by Utilities::isEmail
 *
 * @example m@m Firefox lets this email pass, Utilities::isEmail() doesn't
 */
if (!$this->isEmptyPostField(self::EMAIL) && !Utilities::isEmail($_POST[self::EMAIL])) {
    $this->errorMessages[self::EMAIL] = "Please enter a valid email address";
}
if ($this->isEmptyPostField(self::PRIORITY) && !Utilities::isInt($_POST[self::PRIORITY])) {
    $this->errorMessages[self::PRIORITY] = "Please enter a valid priority.";
}