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

    $theUser = $_POST['user'];
    if($theUser != "" || $theUser != null){
        echo "Hello ". $theUser."!";
    }

    echo "<br/>"
?>
</body>
</html>
