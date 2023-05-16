<?php

class Autoloader {

  /**
  * Register autoloader
  * 
  */
  
  static function register() {
    spl_autoload_register( array(__CLASS__, 'autoload') );
  }

  /**
  * Require each class
  *
  */

  static function autoload( $class_name ) {
    $class_name = str_replace('\\', '/', $class_name); 
    
    require  $class_name . '.class.php';
  }
  
}

?>