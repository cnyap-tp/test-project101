<html>
<body>
You should notice that isset() always returns 1(true) <br>
even if there is no value in the field<br>
When there is no value entered, empty() will return 1(true).<br>
<br>
<?php
    echo "post name=" . $_POST["name"];
    echo "<br>";
    echo "empty name=" . empty($_POST["name"]);
    echo "<br>";
    echo "isset name=" . isset($_POST["name"]);
    echo "<br>";
    echo "<br>";
    
    echo "post email=" . $_POST["email"];
    echo "<br>";
    echo "empty email=" . empty($_POST["email"]);
    echo "<br>";
    echo "isset email=" . isset($_POST["email"]);
    echo "<br>";
    echo "<br>";


    if (empty($_POST["name"]) or empty($_POST["email"])) {
        echo "Error: No fields should be empty<br>";
    }
    else {
        echo "OK: fields are not empty<br>";
    }
?>
</html>
</body>
