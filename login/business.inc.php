<?php
$_SESSION[IS_LOGGED_IN] = LoginSystem::generateLoginHash();
$_SESSION[self::USERNAME] = $_POST[self::USERNAME];