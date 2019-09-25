        $users = $this->fileAccess->loadContents(self::USER_DATA_PATH);

        foreach ($users as $key => $user) {
            if ($user[self::USERNAME] === $_POST[self::USERNAME] && password_verify($_POST[self::PASSWORD], $user[self::PASSWORD])) {
                if (password_needs_rehash($user[self::PASSWORD], PASSWORD_ARGON2I)) {
                    $users[$key][self::PASSWORD] = password_hash($_POST['password'], PASSWORD_ARGON2I);
                    $this->fileAccess->storeContents(self::USER_DATA_PATH, $users);
                }
                return true;
            }
        }
        return false;
