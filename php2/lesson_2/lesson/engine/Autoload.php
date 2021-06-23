<?php


class Autoload
{

    private $path = [
        'models',
        'engine',
        'interfaces'
    ];

    function loadClass($className) {
        var_dump($className);
        foreach ($this->path as $path) {
            $fileName = "../{$path}/{$className}.php";

            if (file_exists($fileName)) {
                include $fileName;
                break;
            }

        }

    }
}

