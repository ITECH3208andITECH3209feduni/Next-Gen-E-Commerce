<?php

include 'dbh.php';
session_start();

?>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
  height:60%;

}


}

#sign-up{
  width: 90%;

}

.bg{
  background-image: url("Background.jpg");
  background-repeat: no-repeat;
  height:100vh;
  
  background-size: cover;
  background-position: center;

}


input[type=text], input[type=password], input[type=email] {
  
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #000;
  box-sizing: 10px;
  
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  position:relative;
right:-120;
}

.imgcontainer {
  text-align: center;
  position:relative;
  right:500;
  
}
.Container{
    width:60%;
    position:absolute;
    right:100;
}




</style>

<div class="bg">
    <div class = "Container">
        <div id="sign-up">
        <form name="form1" action="AdminSignup.php" method="post">
        <br>
        <h2>Admin Signup form</h2>
            <div class="imgcontainer1">
                <img src="Home.png" alt="Logo" class="Logo">
            </div>

        <label for="_name"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="_name" required>
<br>
        <label for="_psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="_psw" id="psw"required>
<br>     
        <label for="email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
        <input type="email" placeholder="Enter email address" name="_email" required>   
<BR>
        <button type="submit" >Admin Signup</button>
        </form>
        </div>
    </div>
</div>
    