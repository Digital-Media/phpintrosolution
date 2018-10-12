<?php
use Utilities\Utilities;

$userID = $this->fileAccess->autoincrementID(self::USER_DATA_PATH, self::USER_ID);
$user = Utilities::sanitizeFilter($_POST[self::USERNAME]);
$email = $_POST[self::EMAIL];
$password = password_hash($_POST[self::PASSWORD], PASSWORD_DEFAULT);

$users = $this->fileAccess->loadContents(self::USER_DATA_PATH);

$users[] = [
    "userid" => $userID,
    "username" => $user,
    "email" => $email,
    "password" => $password
];

$this->fileAccess->storeContents(self::USER_DATA_PATH, $users);