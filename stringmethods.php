<html>
    <body>

    <?php

    $name = "Maulik";
    echo "My Name is : " ;
    echo "$name";
    echo "<br> My Name have :";
    echo strlen($name);
    echo " Letters";
    echo "<br>";
    echo "My name have";
    echo str_word_count($name);
    echo " Words";
    
    echo "<br>";
    echo strtoupper($name);
    echo "<br>";

    $num = 1;
    var_dump($num);

    $num = (string) $num;
    echo "<br>";
    echo $num;
    echo "<br>";
    var_dump($num);


    
    


    ?>

    </body>
</html>