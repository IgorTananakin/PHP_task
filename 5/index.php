<?php
class Point{
    private $x;
    private $y;

    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    function Show() {
        echo "<br>Координаты: (".$this->x.", ".$this->y.")";
    }
    public function __toString(){
        return "(".$this->x.":".$this->y.")";
    }
    public function __get($index){
        if($index=="xCord"){return $this->x;}
    }
    public function _set($property,$value){
        if ($property == "xCord"){
            $this->x=$value;
        } else if ($property == "yCord"){
            $this->y = $value;
        }
    }
}

$p = new Point(100,200);
echo $p->xCord;
echo "<br>";
$p->xCord=500;
$p->yCord=800;
echo $p;
