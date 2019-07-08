<?php
//Start Session
session_start();

//Include Config.php
require_once('../config/config.php');



//Autoload Classes
function __autoload($class_name){
    require_once('../lib/'.$class_name.'.php');
}