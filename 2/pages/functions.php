<?php
$users = 'pages/users.txt';

function register($name, $pass, $email) {
    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));

    if($name == '' || $pass == '' || $email == '') {
        echo "<h3 style='color:red;'>Заполнены не все поля</h3>";
        return false;
    }
    
    if(strlen($name) < 3 || strlen($name) > 30 || strlen($pass) < 3 || strlen($pass) > 30 ) {
        echo "<h3 style='color:red;'>имя пользователя и пароль должны быть больше 3 символов и меньше 30</h3>";
        return false; 
    }

    global $users;
    $file = fopen($users, 'a+');

    while($line = fgets($file, 128)) {
        $readname = substr($line,0,strpos($line,':'));

        if($readname == $name) {
            echo "<h3 style='color:red;'>Пользователь с таким логином уже зарегестрирован</h3>";
            return false; 
        }
    }

    $addline = $name.":".md5($pass).":".$email."\r\n";
    fputs($file, $addline);
    fclose($file);
    
    return true;
}