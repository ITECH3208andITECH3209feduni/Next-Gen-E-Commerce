<?php
function Open_Connection(){
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dbphpsearch";

$conn = mysqli_connect($server, $username, $password, $dbname);
return $conn;
}

?>