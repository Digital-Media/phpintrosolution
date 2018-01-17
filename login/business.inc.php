<?php
$_SESSION[IS_LOGGED_IN] = Utilities::generateLoginHash();
$_SESSION[self::USERNAME] = $_POST[self::USERNAME];