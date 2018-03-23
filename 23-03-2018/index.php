<?php
/**
 * Created by PhpStorm.
 * User: Root-Laptop
 * Date: 23/03/2018
 * Time: 08.22
 */
include 'constants.php';
$GLOBALS['X'] = "I am a defined global";
$y = "I cannot be found in functions";

function x(){
    echo "This is global X:" . $GLOBALS['X'];
    echo "This is an error, because y cannot be found inside a function" . $y;
}
//x();

function superglobalcalls(){
    echo $_SERVER['SERVER_ADDR'];
    echo "<br>".$_SERVER['REMOTE_ADDR'];
    echo "<br>".phpversion();
    echo "<br>".$_SERVER['PHP_SELF'];
    echo "<br>".end(explode('/',$_SERVER['PHP_SELF']));
}

//superglobalcalls();

function constcall(){
    echo two."<br/>";
}
constcall();
echo three;