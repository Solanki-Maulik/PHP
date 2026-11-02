 <html>
    <body>

    <?php
    echo "<h1>Types of Arrays</h1>";
    echo "<h2>Indexed Array</h2>";
 $cars = array(
        "Volvo",
        "BMW",
        "Toyota"
    );

    foreach ($cars as $value) {
        echo "<br>";
        echo $value;
    }

    echo "<br>";
    echo count($cars);
    echo "<br><br>";

    echo "<h2>Associative Array</h2>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $x_value) {
        echo "<br>";
        echo "Name: " . $x . ", Age: " . $x_value;
    }

    echo "<br>";
    echo count($age);


    echo "<br><br>";
    echo "<h2>Sort Arrays</h2>";

    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    print_r($numbers);

    echo "<br><br>";

    echo "<h2>Multidimensional Arrays</h2>";
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );

    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";

    ?>
    

</body>
</html>