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
    $email= $_POST['email'];
    $sql= "UPDATE login_123 set l_password = '$psw' where l_username = '$uname'";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result>0) {
        $subject = "Password reset successful.";
        $msg="Hi $uname, .\n\nYour new Password=$psw.";
        $headers="From: E-commerce Solution" . "\r\n" .
            "CC: $email";
            
        mail( $email,$subject,$msg,$headers);
            
            $_SESSION['login_user']=$uname;
            $_SESSION['login_email']=$email;
            
            
    header("location:Home.php?user=$uname");
        
}    
    else{
        
        echo "<h3> Customer credentials incorrect. Please go back and Try again </h3>";
    }
}
?>