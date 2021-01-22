<?php 

class Viewer // it is view caller
{
    public function __construct() 
    {
        die("don't permision for make a object");
    }
    public static function viewer($view)
    {
        require_once "../resources/view/{$view}.php";
    }
}


Viewer::viewer("welcome"); // that is in ../app/Indexer
