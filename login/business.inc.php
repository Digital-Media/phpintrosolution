<?php
$_SESSION[IS_LOGGED_IN] = Login::generateLoginHash();
$_SESSION[self::USERNAME] = $_POST[self::USERNAME];