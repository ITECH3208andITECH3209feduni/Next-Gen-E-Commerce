<?php
include 'dbh.php';
session_start();

?>
<br><br><br><br><br><br><br><br>
<?php
if (isset($_POST['uname'])){
    $conn = Open_Connection();
    $uname = $_POST['uname'];
    $psw= $_POST['psw'];
    $email=$_POST['email'];
    $sql= "SELECT * From login_123 where l_username = '$uname' AND l_password = '$psw' AND email='$email'";
    
    $result = mysqli_query($conn, $sql);
    $queryResult= mysqli_num_rows($result);
    if ($queryResult>0) {
        while ($row = mysqli_fetch_assoc($result)){
            $_SESSION['login_user']=$uname;
            $_SESSION['login_email']=$email;
            
            
    header("location:Home.php?user=$uname");
        }
}    
    else{
        
        echo "<h3> Customer credentials incorrect. Please go back and Try again </h3>";
    }
}
?>
