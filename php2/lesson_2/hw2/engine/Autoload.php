<?php

namespace app\engine;

class Autoload
{
/*
    private $path = [
        'models',
        'engine',
        'interfaces'
    ];
*/
    function loadClass($className) {
       // var_dump($className);
            $fileName = str_replace(['app\\', '\\'], [ROOT . DS, DS], $className) . ".php";
        //var_dump($fileName);
            if (file_exists($fileName)) {
                include $fileName;
              
            }
    }
}

