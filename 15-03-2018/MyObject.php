<?php
/**
 * Created by PhpStorm.
 * User: Root-Laptop
 * Date: 15/03/2018
 * Time: 08.18
 */

class myObject
{
    private $myProperty = 30;
    const VARIABLE = 250;

    function __construct()
    {
        echo "Object Constructed<br/>";
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Object Destroyed";
    }

    public function myMethod($param){
        //$this->VARIABLE = 20; // Illegal declaration
        return true;
    }

    function getMyProperty(){
        return $this->myProperty;
    }
    static function myFunction(){
        return 3.14;
    }
}