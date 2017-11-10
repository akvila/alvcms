<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('../include/config.php');

//$test = $obj2->getUsers($db);

//авторизация
if (isset($_POST['submit']))
{ 
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
    if(empty($name)) //Если логин не введён
    {
       $msg = 'Введите логин';
    }
    
    else if(empty($pass)) //Если пароль не введён
    {
        $msg = 'Введите пароль'; 
    }
    
    if(isset($msg)) //Проверяем пуста ли наша переменная с ошибками
    {
        echo $msg; //Выводим ошибку
    }else { //Если пуста, авторизируем пользователя
        $request = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $request->execute(array($name, $pass));
        $rows = $request->fetch();
        if (isset($rows['id']) && $name == $rows['username'] && $pass == $rows['password']) {
            header('Location: index.php');
        } else {
            echo 'Неправильный логин или пароль';
        }
    }


    //var_dump($getUser);
    
    
}
?>

<?php 
if (isset($_SESSION['id']))?>

<form action="login.php" method="post">
    <p><label>Логин</label><input type="text" name="username" value=""  /></p>
    <p><label>Пароль</label><input type="password" name="password" value=""  /></p>
    <p><label></label><input type="submit" name="submit" value="Login"  /></p>
</form>
