<?php

ob_start();
session_start();

//подключение базы данных
define('DBHOST', 'localhost');
define('DBNAME', 'blogcms');
define('DBUSER', 'root');
define('DBPASS', '12345');

//PDO
try {
    $db = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS,
        array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    echo 'Соединение с Бд, провалилось! <br> Посмотрим ошибку: ' .$e->getMessage();
}

//автозагрузка классов
//function __autoload($className) {
//
//    $classpath = strtolower($className);
//    
//    $classpath = '../classes/' . $className. '.php';
//    if (file_exists($classpath)) {
//        require_once $classpath;
//    } else {
//        echo "Нет файла: $classpath <br>";
//    }
//
//    //для вызова из admin
//    $classpath = '../classes/' . $className . '.php';
//    if (file_exists($classpath)) {
//        require_once $classpath;
//    } else {
//        echo 'Нет файла: '.$classpath;
//    }
//}

    function autoload($className) {
    $classpath = 'classes/' . $className. '.php';
    if (is_readable($classpath)) {
        require_once $classpath;
    } else {
        echo "Нет файла: $classpath <br>";
    }
    //var_dump($className);
}

    function autoloadAdmin($className) {
    $classpath = '../classes/' . $className . '.php';
    if (is_readable($classpath)) {
        require_once $classpath;
    } else {
        echo "Нет файла: $classpath <br>";
    }
    //var_dump($className);
}

spl_autoload_register("autoload");
spl_autoload_register("autoloadAdmin");
//$user = new User($db);
$obj  = new bootstrap();
$obj2 = new userClass(); 

//$bootstrap = new bootstrap;