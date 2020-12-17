<?php
function summ($a,$b){
    return $a+$b;
}
$s = summ(5,7);
echo $s;
function addNumbersColors($n1, $n2, $color)
{
    echo "Sum is: <span style=\"color:" . $color . ";\">" . ($n1 + $n2) . "</span><br>";
}
function ColorTitle($color, $title)
{
    echo "<h1 style=\"color:$color\";>$title</h1>";
}
function summNumber($n1, $n2)
{
    return $n1 + $n2;
}
function incNumber($n)
{
    return $n + 1;
}

$name = $_GET['name'];
$contry = $_GET['contry'];
echo "sdfds".$contry;





