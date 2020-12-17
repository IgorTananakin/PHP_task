<?php

function connect(
    $host="localhost",
    $user="root",
    $pass="",
    $dname="test14"
){
    $cs = "mysql:host=".$host.";dname=".$dname.";charset=uft8;";
    $options = array(
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8');

        try{
            $pdo =new PDO($cs,$user,$pass,$options);
            return $pdo;

        } catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
}

$pdo = connect();
$list = $pdo->query('SELECT * FROM fio');
while ($row = $list->feach()){
    echo $row['id']." ".$row['fio']." ".$row['age']." ".$row['date']."</br>";

}