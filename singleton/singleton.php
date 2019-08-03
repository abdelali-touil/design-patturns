<?php

class Singleton {

    private static $_instances = [];
    
    final private function __construct() {}

    final public static function getInstance() {
        $class = get_called_class();
        if (!isset(self::$_instances[$class])) {
            self::$_instances[$class] = new $class;
        }
        return self::$_instances[$class];
    }
    
    final public function __clone() {
        trigger_error("Cloning is not allowed.", E_USER_ERROR);
    }
    
    final public function __wakeup() {}
    
    public function doSomething() {}
}