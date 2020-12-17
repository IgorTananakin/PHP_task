<?php
if (isset($GET['submit'])){
    echo "<h1>Вы вошли как: ".$_GET['username']."</h1>";
}else{
    echo "<h1> Введены не верно</h1>";
}