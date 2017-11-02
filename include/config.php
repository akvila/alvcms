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
function __autoload($class) {
    $class = str_replace("..", "", $class);
    require_once("classes/$class.php");
}

//$user = new User($db);
$bootstrap = new bootstrap;