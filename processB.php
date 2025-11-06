<html>
<body>
<p>Do you notice that there is no parameters behind the URL for POST requests? You will need either a proxy like burp suite or a sniffer like wireshark to see the body of the POST requests.</p>
<?php
    echo $_POST["name"];
    echo "<br>";
    echo $_POST["email"];
    echo "<br>";
?>
</html>
</body>