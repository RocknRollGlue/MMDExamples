<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form method="post">
        <textarea name="texteditor" >
            <?php
            echo readFromFile("sitetext","txt");

            ?>
        </textarea>
        <br/>
        <input type="submit" title="save"/>
    </form>
    <?php

        function createFile($filename, $filetype){
            $fh = fopen("$filename.$filetype", 'w+') or die("Failed to open file");

            fclose($fh) or die("Failed to close file");
        }
        function writeToFile($filename,$filetype,$text){
            $fh = fopen("$filename.$filetype", "w+") or die("Failed to write to file");
            fwrite($fh,$text);
            fclose($fh);
        }
        function readFromFile($filename,$filetype){
            $fh = fopen("$filename.$filetype", "r+") or die("could not read file");
            $text = fread($fh,filesize("$filename.$filetype"));
            fclose($fh);
            return $text;
        }
        function main(){
            $filename = "sitetext";
            $filetype = "txt";
            if(!file_exists("$filename.$filetype")) {
                createFile($filename,$filetype);
            }
            readFromFile($filename,$filetype);

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                writeToFile($filename, $filetype, $_POST["texteditor"]);
            }
        }
        main();

    ?>
</body>
</html>