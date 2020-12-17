<?php 
class Point{
    private $x;
    private $y;
    function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;

    }
    function show(){
        echo "Кординаты ".$this->x." ".$this->y;
    }

}
class Circle extends Point{
    protected $radius;
    function __construct($x,$y,$r){
        parent::__construct($x,$y);
        $this->radius= $r;

    }
    function Show(){
        parent::Show();
        echo "<br>Радиус: ".$this->radius;
    }
}
$c = new Circle(200,200,150);
$c->Show();

$figires =  array();
 $figures[] = new Rectengle(100,200,100,100);
 $figures[] = new Circle(100,200,100);
 $figures[] = new Point(100,200;

 $totalArea =0;
 $totalPerimetr =0 ;
 foreach($figures as $f){
     $totalArea += $f->Area();
     $totalPerimetr += $f->Perimetr();

 }

 echo "Щбщая площадь: ".$totalArea."<br>";
 echo "Общий периметр ".$totalPerimetr."<br>";
