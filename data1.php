<html>
<body>  
<?php
$mysql_host="localhost"; // MySQL's hostname or ip address
$mysql_user="root";
$mysql_password="";

$con = mysqli_connect($mysql_host,$mysql_user,
    $mysql_password); 
// login to database server
if (!$con){
    echo mysqli_connect_errno() ."<br>";
    die('Could not connect: '.mysqli_connect_error()); 
    //return error is connect fail
}
else {
    echo "Connection to DB server at $mysql_host successful<br>";
}

// mysqli_select_db is the same as "use <databasename>"
// returns if true successful, false if failed
$isok=mysqli_select_db($con, "ishop");
if ($isok) {
    echo "mysqli_select_db successful<br>";
}
else {
    echo "mysqli_select_db FAILED ";
    die(mysqli_error($con));
}


echo "Disconnecting now<br>";
mysqli_close($con);

?>
</body>
</html>