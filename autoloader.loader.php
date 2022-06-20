<?php 

class Loader {

    public static $paths; 
    private static $config ='configAutoloader.json';
    public static $curPath=0;
    private $path;
    public function __construct()
    {
       
    }


    public static  function getJsonContent(){
        return (array)json_decode(file_get_contents(Loader::$config));
    }
    public static function  fetchPaths(){
        $content = Loader::getJsonContent();
        $paths=[];
        foreach ($content['autoloader']->paths as  $value) {
           array_push($paths,$value);
        }

        Loader::$paths=$paths;
        return $paths;

    }
    public static function nextPath(){
        $pt= Loader::$paths[Loader::$curPath]; 
        Loader::$curPath++; 
        return $pt;

    }

    public static function init(){
        Loader::$curPath=0;
    }
    
    public static function Load(){
        foreach(Loader::fetchPaths() as $path){
    
               
                spl_autoload_register(function ($class) {
                     
                  
                    $path= Loader::nextPath();
                    if (is_readable($path.$class.'.php')) {
                    Loader::init();
                    include_once $path.$class.'.php';
                    }
                });
               
            
           
           
    
            }    }




   



}