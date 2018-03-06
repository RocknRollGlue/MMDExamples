<html>
<head>
<title>We say hello to you!</title>
</head>
<body>
<form method="post">
    <input name="user" type="text" />
    <input name="submit" type="submit" />
</form>
<?php

    $theUser = $_POST['user']; //Vi bruger $_POST super global variablen til at få fat i input med navnet 'user'. Variablen er nu inputtets text
    if($theUser != "" || $theUser != null){ //Vi laver et kontrol om inputtet er tomt eller ikke eksisterende!
        echo "Hello ". $theUser."!"; // Vi siger hej til brugeren!
    }

    echo "<br/>"; // Til sidst laver vi break til at give plads hvis der skal skrives mere.
?>
</body>
</html>
