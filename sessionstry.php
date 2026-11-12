<?php
session_start();
?>
<html>
    <body>
        <?php
        $_SESSION['user'] = "John Doe";

        print_r($_SESSION);

        session_unset();

        session_destroy();
        echo "session done !";
                ?>
</body>
</html>