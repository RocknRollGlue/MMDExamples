<head>

</head>
<body>
<?php
$carTable = array(array("Make","Model","age","km"),
                  array("VolksWagen", "Golf", "12","200000"),
                  array("Skoda","Felicia","20","150000"));

//Solution 1
echo "<table>";
foreach ($carTable as list($make,$model,$age,$km)){
    echo "<tr><td>$make</td><td>$model</td><td>$age</td><td>$km</td></tr>";
    //foreach ($array as $element){
    //    echo "$element ";
    //}
    //echo "<br/>";
}
echo "</table>";

//Solution 2
foreach ($carTable as $array){
    foreach ($array as $element){
        echo "$element ";
    }
    echo "<br/>";
}

?>

<footer>

</footer>
</body>

