$users = $this->fileAccess->loadContents(self::USER_DATA_PATH);

if (empty($users)) {
    return true;
}

if (in_array(Utilities::sanitizeFilter($_POST[$name]), array_column($users, $name))) {
    return false;
}

return true;