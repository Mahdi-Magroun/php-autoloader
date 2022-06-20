<?php 
include_once __DIR__.'/../autoloader.php';
class class5{
    public function __construct()
    {
       $cl= new class1();
        echo "<br>class 5 say hello and  <br>";  
        echo $cl->sayHello();
    }
}