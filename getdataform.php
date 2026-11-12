<htmL>
    <body>
    <!-- using post -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="username">Enter Username:</label>
    <input type="text" id="username" name="username">
    <input type="submit" value="Submit">
    </form>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_REQUEST['username'];
    echo "Your Name is " . $name;
}
?>
</body>
</html>