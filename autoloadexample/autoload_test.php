<?php
//*
spl_autoload_register();
// won't work without namespace in util/reply.php
$autotest = new util\Reply();
$autotest->giveReply();
//*/
/*// This loader work's without namespace in util/reply.php
$myloader = function ($classname) {
    $file = __DIR__ . "/util/" . "{$classname}.php";
    if (file_exists($file)) {
    require_once ($file);
    }
};
spl_autoload_register($myloader);
$autotest = new Reply();
$autotest->giveReply();
//*/
