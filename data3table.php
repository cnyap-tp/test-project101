<html>
    <head>
        <style>
        table {
            border: 2px solid black;    
        }
        td,th {
            border: 1px solid black;    
        }
        </style>
    </head>
<body>  
<?php
$mysql_host="localhost"; // MySQL's ip address
$mysql_user="root";
$mysql_password="";

$con = mysqli_connect($mysql_host,$mysql_user
    ,$mysql_password); // login to database server
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
    die(mysqli_error($con));
}

// select statement
$query="SELECT id, name, username, password, address, 
email, contact, role FROM ishop.users";
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
    echo "<table>";
        echo "<tr>";
            echo "<th>id</th>";
            echo "<th>name</th>";
            echo "<th>username</th>";
            echo "<th>password</th>";
            echo "<th>address</th>";
            echo "<th>email</th>";
            echo "<th>contact</th>";
            echo "<th>role</th>";
        echo "</tr>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr>";
            echo "<td>";
            echo $row['id'];
            echo "</td>";
            echo "<td>";
            echo $row['name'];
            echo "</td>";
            echo "<td>";
            echo $row['username'];
            echo "</td>";
            echo "<td>";
            echo $row['password'];
            echo "</td>";
            echo "<td>";
            echo $row['address'];
            echo "</td>";
            echo "<td>";
            echo $row['email'];
            echo "</td>";
            echo "<td>";
            echo $row['contact'];
            echo "</td>";
            echo "<td>";
            echo $row['role'];
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else {
    echo "0 records<br>";
}


echo "Disconnecting now<br>";
mysqli_close($con);

?>
</body>
</html>