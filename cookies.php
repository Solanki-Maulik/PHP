<?php
   if(!isset($_COOKIE["checking"])) {
         $check = 1;
        } else {
           $check = $_COOKIE["checking"] + 1;
        }

  
        
setcookie("checking", $check, time() + (86400 * 30), "/");
?>

<html>
    <body>
        <?php
            echo $check;
        ?>
    </body>
</html>