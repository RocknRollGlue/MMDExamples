<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date Diff</title>
</head>
<body>
    <form name="dates" method="post">
        <input type="date" name="DateOne" />
        <input type="date" name="DateTwo" />
        <input type="submit" name="Submit" title="Submit"/>
    </form>
    <?php
        // Vi prøver at se hvad forskellen mellem to datoer er. Først kontrollere vi om vores HTTP method er 'POST'
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // DateTime er et indbygget objekt i Php. Se evt. php.net for mere information
            $dateOne = new DateTime($_POST["DateOne"]);
            $dateTwo = new DateTime($_POST["DateTwo"]);
            $interval = $dateOne->diff($dateTwo);
            //Til sidst printer vi ud
            echo "The difference between " . $_POST["DateOne"] . " and ". $_POST["DateTwo"];
            echo " is: <br/> $interval->y years, $interval->m months and $interval->d days";
        }

    ?>
</body>
</html>