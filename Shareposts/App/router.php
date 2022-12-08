<?php
//load Config
require_once 'config/Config.php';
//Load librairies
/*require_once 'libraries/Core.php';
require_once 'libraries/Controller.php';
require_once 'libraries/Database.php';*/

//Autoload core libraries
spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
});
