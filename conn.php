<?php
$username = "niteesh";
$password = "abcd12345";
$hostname = "localhost";


$conn = mysqli_connect($hostname, $username, $password,"chat");
// Check connection
if (!$conn) {
	 echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo " ";
?>