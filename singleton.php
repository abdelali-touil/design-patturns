<?php
require_once('vendor/autoload.php');

class Singleton {

    protected function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new Static();
        }
        return $instance;
    } 
}

class SingletonChild extends Singleton {

}

dump('Instance:');

$instance = Singleton::getInstance();
dump($instance);
dump($instance === Singleton::getInstance());

dump('Another instance:');

$another = SingletonChild::getInstance();
dump(SingletonChild::getInstance());
dump($another === SingletonChild::getInstance());
dump($another === Singleton::getInstance());