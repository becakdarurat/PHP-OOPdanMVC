<?php
require_once 'config/config.php';

spl_autoload_register( function ( $class ){
    $class = explode('\\' , $class);
    $class = end($class);
    require_once 'core/' . $class . '.php';
} );

spl_autoload_register( function ( $class ){
    $class = explode('\\' , $class);
    $class = end($class);
    require_once 'controllers/' . $class . '.php';
} );
?>