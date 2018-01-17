<?php
if (!file_exists(FileAccess::DATA_DIRECTORY)) {
    mkdir(FileAccess::DATA_DIRECTORY);
}

$userID = $this->fileAccess->autoincrementID(FileAccess::USER_DATA_PATH, self::USER_ID);
$user = Utilities::sanitizeFilter($_POST[self::USERNAME]);
$email = Utilities::sanitizeFilter($_POST[self::EMAIL]);
$password = password_hash($_POST[self::PASSWORD1], PASSWORD_DEFAULT);

$users = $this->fileAccess->loadContents(FileAccess::USER_DATA_PATH);

$users[] = [
    "userid" => $userID,
    "username" => $user,
    "email" => $email,
    "password" => $password
];

if ($this->fileAccess->storeContents(FileAccess::USER_DATA_PATH, $users)) {
    return true;
}
return false;
