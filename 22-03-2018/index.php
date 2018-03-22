<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
// printf example
$var = 3;
printf("The amount of crap I give is %d", 3);

//File Handling
if(file_exists("log.txt")) {
    // Vi forsøger at lave filen log.txt
    $file = fopen("log.txt", "w+") or die("File could not be found or created");
    fwrite($file, "hi", 2); //Vi skal skrive til filen
    echo fread($file, 2);
}

?>

<footer>
</footer>
</body>
</html>