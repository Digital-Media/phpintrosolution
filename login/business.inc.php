<?php
$_SESSION[IS_LOGGED_IN] = $this->generateLoginHash();
$_SESSION[self::USERNAME] = $_POST[self::USERNAME];