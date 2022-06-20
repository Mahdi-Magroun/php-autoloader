## php autoloader without composer 

i sugest using composer autoloading but if you dont't want to use it you can implement this one.  

#### why use this autoloder 

the benifit's of this autoloader that is easy to use and flexible,  the code is easy to understand and no much configuration is neded . 

but  you can only load class's that have the same name as their file .



#### configuration 

####  

```json
{
    "autoloader":{
        "paths":{

        "path1":"classes/"
        ,"path2": "someOtherClasses/"
    }
    }
}
```

####  

that's it for the configuration you only need specifies directories where your class's are . 



#### RQ : the autoloader is submited with a good exemple to make it easy for you to implement it .  

#### RQ1: delete test directory 'classes'&'someOtherClasses' and don't forget to update the configAutoLoader.json 



