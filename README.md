## php autoloader without composer 

i suggest using composer autoloading but if you dont't want to download it you can implement this one.  

#### why use this autoloder 

the benefits of this autoloader that is easy to use and flexible, the code is easy to understand and no much configuration is needed .

but you can only load classes that have the same name as their file .



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

that's it for the configuration you only need to specifie directories where your classes are .



#### RQ :  the autoloader is submitted with a good example to make it easy for you to implement it

#### RQ: delete test directory 'classes & someOtherClasses' and don't forget to update the configAutoLoaer.json



