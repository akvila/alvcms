<form action="" method="post">
<p><label>Логин</label><input type="text" name="login" value=""  /></p>
<p><label>Пароль</label><input type="password" name="pass" value=""  /></p>
<p><label></label><input type="submit" name="submit" value="Login"  /></p>
</form>

<?php

if (isset($_POST['submit'])) {

    $login = trim($_POST['login']);
    $pass = trim($_POST['pass']);
    
    if ($user->login($login, $pass)) { 

        //подключается на главную страницу
        header('Location: index.php');
        exit;
    
    } else {
        $msg = 'Неверное имя пользователя или пароля';
    }
    
}
