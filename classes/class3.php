<?php 

include_once __DIR__.'/../autoloader.php';
class class3{

    public $class1; 
    public $class2; 

    public function __construct()
    {
        $this->class1=new class1();
        $this->class2= new class2();
    }

    public function sayHello(){
        $this->class1->sayHello();
        $this->class2->sayHello();
        echo '<br>here is class3 <br>';
    }



}