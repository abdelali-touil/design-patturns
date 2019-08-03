<?php
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/singleton.php');

class SingletonChild extends Singleton {}

$instance = Singleton::getInstance();
dump($instance === Singleton::getInstance());

$another = SingletonChild::getInstance();
dump($another === SingletonChild::getInstance());
dump($another === Singleton::getInstance());