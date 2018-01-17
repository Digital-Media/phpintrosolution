<?php
$users = $this->fileAccess->loadContents(FileAccess::USER_DATA_PATH);

foreach ($users as $user) {
    if ($user[self::USERNAME] === $_POST[self::USERNAME] && password_verify($_POST[self::PASSWORD], $user[self::PASSWORD])) {
        return true;
    }
}
return false;