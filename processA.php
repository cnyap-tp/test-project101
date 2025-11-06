<html>
<body>
Do you notice the parameters behind the URL? <br>
processA.php?name=xyz&email=abc@gmail.com <br>
This is how GET messages send informations to the web server.<br>
<?php
    echo $_GET["name"];
    echo "<br>";
    echo $_GET["email"];
    echo "<br>";
?>
</html>
</body>