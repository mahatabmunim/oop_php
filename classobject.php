<?php
//class
class panda{
    public $name;
    public function sayHello(){
        echo "Hello, May Name Is $this->name ";
    }
}
//object || instance
$panda = new panda;
// object assigning value 
$panda->name = "Panda";
//print
$panda->sayHello();

