<?php
session_start();
include 'dbh.php';


?>
<br><br><br><br><br><br><br><br>
<?php
if (isset($_POST['_name'])){
    $conn = Open_Connection();
    $_name= $_POST['_name'];
    $_psw= $_POST['_psw'];
    $_email=$_POST['_email'];
    $mysql = "SELECT email FROM login_123 where email = '$_email'";
    $query = mysqli_query($conn,$mysql);
    
        if(mysqli_num_rows($query)){
            echo"<h3>Email already taken. Please go back and use a different email address.</h3>";
        }
    
        else{
            $subject = "User registration";
            $msg="Hi $_name, Welcome to E-commerce Solution.\n\nYour login details are:\n\nUsername=$_name.\nPassword=$_psw.\n\nPlease do not share your login details.\n\nThank you for joining our team.\n\n\nKind regards.\nThe Management Team.\nE-commerce Solution.";
            $headers="From: E-commerce Solution" . "\r\n" .
            "CC: $_email";
            
            mail( $_email,$subject,$msg,$headers);
            

        $sql=" INSERT INTO login_123 (l_username, l_password, email, User_Type) VALUES ('$_POST[_name]','$_POST[_psw]','$_POST[_email]','User')";
        $result = mysqli_query($conn, $sql);
    
            if ($result>0) {
                $_SESSION['login_user']=$_name;
                $_SESSION['login_email']=$_email;
        
                header("location:Home.php");
            }
    
            else{
                echo "<h3> Customer credentials incorrect. Please go back and Try again </h3>";
                }
        }
}

?>
