<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('include/config.php');

//вывод всех постов 
$post = $bootstrap->showPost($db);

include_once('public/home.php');

//Задачи
//1. Вывести пост
//2. Сделать регистрацию, авторизацию

