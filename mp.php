<?php
//methods and properties

// class man{
//     public $name;
//     public $age;

//     public function __construct($name, $age){
//         $this->name = $name;
//         $this->age = $age;
//     }
// }
// $man = new man("munim","323");

class Rectangle{
    public $width;
    public $height;

    public function result($w,$h){
        $this->width = $w;
        $this->height = $h;
    }
    public function getArea(){
        return $this->width*$this->height;
    }
}
$rect = new Rectangle();
$rect->result(5,10);
echo $rect->getArea();