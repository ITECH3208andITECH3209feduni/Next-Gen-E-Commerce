<?php
include 'Logdat.php';
include 'Header.php';
?>
<br><br><br><br><br><br><br><br>
<?php
if (isset($_POST['_name'])){
    $conn = Open_Connection();
    $_name= $_POST['_name'];
    $_psw= $_POST['_psw'];
    $sql=" INSERT INTO login_123 (l_username, l_password) VALUES ('$_POST[_name]','$_POST[_psw]')";
    $result = mysqli_query($conn, $sql);
    
    if ($result>0) {
       
    header("location:Home.php");
        }
    
    else{
        echo "<h3> Customer credentials incorrect. Please go back and Try again </h3>";
    }
}
?>
