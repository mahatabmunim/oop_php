<?php 
class person{
    public $name = "munim";
    public $aeg = 23;
}
class teacher extends person{
    public function satHello(){
        return "Hello, my name is ". $this->name ."!";
    }
}

$student = new teacher();
echo $student->name;









