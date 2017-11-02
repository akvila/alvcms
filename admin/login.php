<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('../include/config.php');

if (isset($_POST['submit'])) {
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($getUser->login($username, $password)) {
        //logged in return to index page
        header('Location: index.php');
        exit;
    } else {
        $msg = 'Ошибка входа</p>';
    }
}
?>

<form action="login.php" method="post">
    <p><label>Логин</label><input type="text" name="username" value=""  /></p>
    <p><label>Пароль</label><input type="password" name="password" value=""  /></p>
    <p><label></label><input type="submit" name="login" value="Login"  /></p>
</form>
