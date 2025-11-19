<html>
<body>
    <pre>
        <?php print_r($GLOBALS); ?>
    </pre>

<?php
    
    if (!empty($_POST['name']) && 
        !empty($_POST['username']) &&
        !empty($_POST['password']) &&
        !empty($_POST['address']) &&
        !empty($_POST['email']) &&
        !empty($_POST['contact']) &&
        !empty($_POST['role']) 
    ) {
        echo "OK: fields are not empty<br>";
    }
    else {
        echo "Error: No fields should be empty<br>";
    }

    if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
        echo $_POST["email"] . " is not valid email<br>";
    }
    else {
        echo $_POST["email"] . " is a valid email<br>";
    }

$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$role=$_POST['role'];

$mysql_host="localhost"; // MySQL's ip address
$mysql_user="root";
$mysql_password="";
$mysql_db="ishop";

$con = mysqli_connect($mysql_host,$mysql_user,$mysql_password); // login to database server
if (!$con){
    echo mysqli_connect_errno() ."<br>";
    die('Could not connect: '.mysqli_connect_error()); //return error is connect fail
}
else {
    echo "Connection to DB server at $mysql_host successful<br>";
}

// returns true/false, true if successful, false if failed
$isok=mysqli_select_db($con, $mysql_db);
if ($isok) {
    echo "mysqli_select_db successful<br>";
}
else {
    echo "mysqli_select_db failed<br>";
}

$query="INSERT INTO ishop.users (name, username, password, address, email, contact, role)" .
"VALUES ('$name', '$username', '$password', '$address', '$email', '$contact', '$role');";
$result=mysqli_query($con,$query);
if (!$result) {
    echo ("INSERT Failed<br>");
    echo mysqli_error($con)."<br>";
}
else { 
    echo "INSERT OK<br>";
}

mysqli_close($con);

?>
</html>
</body>