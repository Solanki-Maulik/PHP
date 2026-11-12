<html>
    <body>
        <?php 

        $myfile = fopen("file.txt", "r");
            echo fread($myfile,10 );
            fclose($myfile);
        ?>
</body>
</html>