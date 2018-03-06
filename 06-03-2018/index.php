<?php
$myString = "foobar";
$reversed = "";
for($i = strlen($myString) -1 ; $i >= 0; --$i){
    $reversed .= $myString[$i];

}
echo $reversed;