<?php
include 'Logdat.php';
include 'Header.php';
?>
<br><br><br><br><br><br><br><br>
<?php
if (isset($_POST['uname'])){
    $conn = Open_Connection();
    $uname = $_POST['uname'];
    $psw= $_POST['psw'];
    $sql= "SELECT * From login_123 where l_username = '$uname'  AND l_password = '$psw'";
    $result = mysqli_query($conn, $sql);
    $queryResult= mysqli_num_rows($result);
    if ($queryResult>0) {
        while ($row = mysqli_fetch_assoc($result)){
    header("location:Home.php");
        }
    }
    else{
        echo "<h3> Customer credentials incorrect. Please go back and Try again </h3>";
    }
}
?>
