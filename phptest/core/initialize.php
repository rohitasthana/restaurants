<?php

define('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT')? null : define('SITE_ROOT', DS.'wamp64'.DS.'www'.DS.'phptest');

//wamp64/www/phptest/foldername

define('INC_PATH') ? null : define('INC_PATH',SITE_ROOT.DS.'includes');
define('CORE_PATH') ? null : define('CORE_PATH',SITE_ROOT.DS.'core');

//load the includes file
require_once(INC_PATH.DS."config.php");

//load the core file
require_once(CORE_PATH.DS."post.php");
?>