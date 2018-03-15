<?php
/**
 * Created by PhpStorm.
 * User: Root-Laptop
 * Date: 15/03/2018
 * Time: 08.18
 */

class myObject
{
    private $myProperty = 30; //Properties er vigtige for at indeholde information, som kan modificeres. En god standard er at lave dem som private
    const VARIABLE = 250; // const er en konstant. Det betyder, vi kan ikke ændre vores værdi af denne property. En standard er, at variablen er skrevet med stort.

    /**
     * myObject constructor.
     * Constructor bliver kørt så snart objektet bliver lavet
     */
    function __construct()
    {
        echo "Object Constructed<br/>";
    }

    /**
     * myObject desctructor
     * Destructor bliver kørt så snart vi mister reference til objektet
     */
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Object Destroyed";
    }

    /**
     * Når vi har en objekt function, kalder vi det for en metode, i stedet for en funktion.
     * Det fungere stadig som en funktion, men vi har mulighed for at lave referencer til vores properties
     * @param $param
     * @return bool
     */
    public function myMethod($param){
        //$this->VARIABLE = 20; // Illegal declaration
        return true;
    }

    /**
     * Når vores property er et private scope, kan vi ikke få adgang til den fra andre classes eller filer.
     * Derfor laver vi getter, hvor vi kan retunere værdien som vores property er.
     * @return int
     */
    function getMyProperty(){
        return $this->myProperty;
    }

    /**
     * Modsat getters, setters ændre verdien i vores property
     * @param $parameter
     */
    function setMyProperty($parameter){
        $this->myProperty = $parameter;
    }

    /**
     * Når vi laver en metode som static, er funktionen ikke en del af objektet, men funktionen er stadig medlem af classen.
     * @return float
     */
    static function myFunction(){
        return 3.14;
    }
}