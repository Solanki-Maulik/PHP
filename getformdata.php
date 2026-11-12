<htmL>
    <body>
    <!-- using get -->
    <form method="get" action="">
    <label for="username">Enter Username:</label>
    <input type="text" id="username" name="username">
    <input type="submit" value="Submit">
    </form>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   if(isset($_REQUEST['username'])) {
    $name = htmlspecialchars($_REQUEST['username']);
    echo "Your Name is " . $name;
   }
}
?>
</body>
</html>