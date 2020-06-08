<?php

include 'dbh.php';
session_start();

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
  height:60%;

}

.reg-container{
  display:flex;
}

#login{
  width: 90%;

}

#sign-up{
  width: 90%;

}

.bg{
  background-image: url("Background.jpg");
  background-repeat: no-repeat;
  height:180%;
  background-size: cover;
  background-position: center;
}


input[type=text], input[type=password], input[type=email] {
  
  width: 60%;
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
  width: 30%;
  position:relative;
right:-140;
}

.imgcontainer, .imgcontainer1 {
  text-align: center;
  
}

img.avatar {
  width: 20%;
  
}

img.Logo {
  width: 20%;
  
}

.container, .container1 {
position:relative;
right:-150;
 width:70%;
 
}
</style>

</head>
<body>
<div class="bg">
<br>
<h2 style="text-align:center">E-commerce Solution</h2>
<div class="reg-container">

<div id="login">
<form action="Welcome.php" method="post">
<h2 style="text-align:center">Login form</h2>
<div class="imgcontainer">
    <img src="Login.png" alt="Avatar" class="avatar">
  </div>
<div class = "Container">

<label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<br>    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="reset.php">Forgot your password? Click here to reset.</a>
<br>
    <label for="email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="email" placeholder="Enter email address" name="email" required>  
<br>  
    <button type="submit">Login</button>
    </div>
   
   </div>
</form>
<br><br><br><br>
    <div id="sign-up">
<form name="form1" action="UserSignup.php" method="post">
<h2 style="text-align:center">Signup form</h2>
<div class="imgcontainer1">
    <img src="Home.png" alt="Logo" class="Logo">
  </div>
<div class = "Container1">
<label for="_name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="_name" required>
<br>
    <label for="_psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="_psw" id="psw"required>
<br>     
<label for="email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="email" placeholder="Enter email address" name="_email" required>   
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Admin.php">Click here to create an admin account.</a>
    <BR>
    <button type="submit" >User Signup</button>
    </div>
    </div>
  
    </form>
    </div>
    </div>
  
    </body>
    </html>
