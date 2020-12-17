<?php
// создадим переменную для формирования ответа
$output ='';
$str="CodesUser=".$_POST['CodesUser'];
$stroka = explode(" ", $str);
//отделяем от всех
//отделяем по =

$codes="";
$codes=$stroka[0];
$codes1= explode("=",$codes);

$color="";
$color=$stroka[1];
$color1= explode("=",$color);

$types="";
$types=$stroka[2];
$types1= explode("=",$types);
echo '<div style="display:flex;align-items:center;justify-content: center;position:absolute;margin:10px;width:300px;height:300px;background-color:'.$color1[1].
';"><div style="width:150px;height:150px;background-color:#'.$codes1[1]
.'";><p> Цвет '.$color1[1].' Тип '.$types1[1].' Код #'.$codes1[1].'</p></div></div>';