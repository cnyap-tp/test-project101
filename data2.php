<html>
<body>  
<?php
$mysql_host="localhost"; 
$mysql_user="root";
$mysql_password="";

$con = mysqli_connect($mysql_host,$mysql_user,
    $mysql_password); // login to database server
if (!$con){
    echo mysqli_connect_errno() ."<br>";
    die('Could not connect: '.mysqli_connect_error());
    //return error is connect fail
}
else {
    echo "Connection to DB server at $mysql_host successful<br>";
}

// returns true/false, true if successful, false if failed
$isok=mysqli_select_db($con, "ishop");
if ($isok) {
    echo "mysqli_select_db successful<br>";
}
else {
    echo "mysqli_select_db FAILED ";
    die(mysqli_error($con)); //return error is connect fail
}

// select statement
$query="SELECT id, name, username, password, address, email,
 contact, role FROM ishop.users";
$result=mysqli_query($con,$query);
if(!$result) {
    die("SELECT query failed<br> ".mysqli_error($con));    
}
else {
    echo "SELECT query successful<br>";
}
$nrows=mysqli_num_rows($result);
echo "#rows=$nrows<br>";
if ($nrows>0) {
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row['id'];
        echo " ";
        echo $row['name'];
        echo " ";
        echo $row['username'];
        echo " ";
        echo $row['password'];
        echo " ";
        echo $row['address'];
        echo " ";
        echo $row['email'];
        echo " ";
        echo $row['contact'];
        echo " ";
        echo $row['role'];
        echo "<br>";
    }
}
else {
    echo "0 records<br>";
}


echo "Disconnecting now<br>";
mysqli_close($con);