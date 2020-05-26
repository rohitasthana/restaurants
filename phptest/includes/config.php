<?php

$db_username   = 'root';
$db_password   = '';
$db_name       = 'phptest';

$db = new PDO('mysql:host=127.0.0.1; dbname='.$db_name.';charset=utf8', $db_username, $db_password);


//set some data base attributes

$db->SetAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->SetAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$db->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

define('APP_NAME', 'API TESTING APPLICATION');

?>