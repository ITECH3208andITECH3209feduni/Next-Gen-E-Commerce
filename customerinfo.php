<?php
session_start();
include 'header.php';

if (isset($_POST['psw'])){
    $conn = Open_Connection();
    $uname = $_POST['uname'];
    $psw= $_POST['psw'];
    $email= $_POST['email'];
    $phn=$_POST['phn'];
    $add=$_POST['add'];
    $sql= "UPDATE login_123 set l_address='$add' where l_username = '$uname'";
    $result = mysqli_query($conn, $sql);

    $sql1= "SELECT * FROM login_123 where l_username = '$uname'";
    $result1 = mysqli_query($conn, $sql1);
    $query = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($query)){
       
    $sql2= "SELECT * FROM login_123 where email = '$email'";
    $result2 = mysqli_query($conn, $sql2);
    $query = mysqli_query($conn,$sql2);
    if(mysqli_num_rows($query)){

    if ($result>0) {
        $_SESSION['login_address']=$add;
            $mysql= "UPDATE login_123 set phone='$phn' where l_username = '$uname'";
            $myresult = mysqli_query($conn, $mysql);
                 if ($myresult>0) {
                    $_SESSION['login_phn']=$phn;
                    $sql3= "UPDATE login_123 set l_password='$psw' where l_username = '$uname'";
                    $result3 = mysqli_query($conn, $sql3);
                    if ($result3>0)
                     header("location:Updatedcustomerinfo.php");
                 }
                 else{
                     echo"Failed11";
                 }
    }}}
}
?>


<style>
.container{
    display:flex;
    justify-content:space-around;
    align-items:center; 
    
}

#userDetails, #updateDetails{
    width: 400px;
  height: 100px;
  align-items:center; 
 
}

img.avatar {
    
    width: 48%;
    
}
  
  
#updateDetails input[type=text], input[type=password],input[type=email] {
  
  width: 55%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #000;
  box-sizing: 10px;
  
}

#updateDetails button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  margin-left:120px;
}

</style>

<div class="container">
    <div id="userDetails">
        
            <h2> User details</h2>
            <i class='fas fa-address-card' style='font-size:96px'></i>
            <h3 style="text-align:left">
            <?php
            $conn = Open_Connection();
            $Mysql = "SELECT User_Type FROM login_123 where email='$_SESSION[login_email]'";
            $Myresult = mysqli_query($conn, $Mysql);
            $row1 = mysqli_fetch_assoc($Myresult);
                if($row1> 0){
                    echo "User account type: ";
                    echo $row1['User_Type'];
                    $sql="SELECT * From login_123 where User_Type='Admin' AND email='$_SESSION[login_email]'";
                    $query = mysqli_query($conn,$sql);
                         if(mysqli_num_rows($query)){
                             $sql123 = "SELECT COUNT(l_id) as total FROM login_123";
                             $result123 = mysqli_query($conn, $sql123);
                             $row = mysqli_fetch_assoc($result123);
                                 if($row>0){
                                    echo "<br>";
                                    echo "<br>";
                                    echo "Total active users count: ";
                                    echo $row['total'];

                        
                 }
                
            }
                 else{
                     
                 }
                
                }
            ?> 
            </h3>
        

            <h3 style="text-align:left">Username: <?php echo  $_SESSION['login_user']?></h3>
            <h3 style="text-align:left">Email: <?php echo  $_SESSION['login_email']?></h3>
            
            
    </div>
 
    <div id="updateDetails">
        <form method="post">
            <h2> Enter user details</h2>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter your username" name="uname" required>
            <br>
            <label for="email"><b>E-mail Log</b></label>
            <input type="email" placeholder="Enter email address" name="email" required>  
            <br>
            <h2 style="text-align=center"> Update user details</h2>
            <label for="psw"><b> Password</b></label>
            <input type="password" placeholder="Update your password" name="psw" required>
            <h7> <br>(If not, re-enter your old password.)</h7>
            <br><br>
            <label for="Phone"><b>Contact_:</b></label>
            <input type="text" placeholder="Update your contact number" name="phn">
            <br>
            <label for="Address"><b>Address_:</b></label>
            <input type="text" placeholder="Update your address" name="add">
            <br>
            <button type="submit">Update</button>
        </form>
    <div> 
</div>