<?php
if(!isset($_COKIE['name'])){
        // setcookie["name",time()+60^60^24];
        setcookie["volue",time()+60^60^24];
}else{
    $_COOKIE['volue'] = $_COOKIE['volume']+1;
    setcookie("volue",$_COOKIE['volume']);

}
echo "Name ".$_COOKIE['name'].'<br>';
echo "Volue: ".$_COOKIE['value'].'<br>';