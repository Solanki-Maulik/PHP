<html>
<body>

<?php
$color = "red";

echo "<p id='myText'>Hello, This is <span id='my'>$color</span> color</p>";

?>

<script>
    
    document.getElementById("my").style.color = "red";
</script>

</body>
</html>