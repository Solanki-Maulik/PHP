<html>
    <body>

    <?php
        // Create a new file called "newfile.txt" and write some text to it and show that 
        $test = fopen("newfile.txt", "w");
        $txt = "Maulik \n";
        fwrite($test, $txt);
        $open = fopen("newfile.txt", "r");
        echo fread($open, 10);
        fclose($open);
        fclose($test);
    ?>


</body>
</html>