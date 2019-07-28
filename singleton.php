<?php
require_once('vendor/autoload.php');

class Singleton {

    private static $_instance;

    public static function getInstance() {
        if (null === self::$_instance) {
            self::$_instance = new Static();
        }
        return self::$_instance;
    }
    
    protected function __construct() {
        // do something
    }
    private function __clone() {}
    private function __wakeup() {}

}

class SingletonChild extends Singleton {}

$instance = Singleton::getInstance();
dump($instance === Singleton::getInstance()); // return true

$another = SingletonChild::getInstance();
dump($another === SingletonChild::getInstance()); // return true
dump($another === Singleton::getInstance()); // return true