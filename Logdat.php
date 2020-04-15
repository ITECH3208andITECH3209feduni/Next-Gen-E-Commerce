<?php
function Open_Connection(){
$server = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($server, $username, $password, $dbname);
return $conn;
}

?>