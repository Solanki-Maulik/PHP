<html>
    <body>
    <?php
        $user = [ 
            'name' => 'Maulik',
            'email' => 'maulik@gmail.com'
        ];

        $jsonstring = json_encode($user);

        echo $jsonstring;

        $user2 = '{"name":"Maulik","email":"maulik@gmail.com"}';

        $jsonstring2 = json_decode($user2);

        echo $jsonstring2->name;
        echo $jsonstring2->email;
    ?>
</body>
</html>