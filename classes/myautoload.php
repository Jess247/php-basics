<?php
    function customAutoload1($class_name) {
        $file = strtolower($class_name). '.class.php';

        // check if the file we are looking for exists
        if(file_exists($file)){
            require_once $file;
        }
    }
    spl_autoload_register('customAutoload1');

    // if more classes with different filenames or path are added we can register them
    // the path can be modified in a function like seen below (sample path)
    function customAutoload2($class_name) {
        $file = strtolower('class/class_' .$class_name. '.php');

        if(file_exists($file)){
            require_once $file;
        }
    }
    spl_autoload_register('autoloader2');
?>