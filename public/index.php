<?php


require dirname(__DIR__) . '/config/config.php';
require CORE . '/funcs.php';


require CORE . '/classes/DB.php';

$db_config = require CONFIG . '/db.php';
$db = new DB($db_config);


require CORE . '/router.php';







