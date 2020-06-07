<?php

include 'dbh.php';
session_start();

?>

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  
  height:55%;

}

.bg{
  background-image: url("Background.jpg");
  background-repeat: no-repeat;
  height:180%;
  background-size: cover;
  background-position: center;
}


input[type=text], input[type=password],input[type=email] {
  
  width: 40%;
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
  right:-120;
  top:20;
}

.container{
position:relative;
right:-450;
top:100;
 width:60%;
 
}

.imgcontainer {
  text-align: center;
  
}

img.avatar {
position:relative;
right:-20;
top:60;
width: 18%;
  
}

</style>

<html>

<div class="bg">
<form action="password.php" method="post">

<div class="imgcontainer">
    <img src="password.png" alt="Avatar" class="avatar">
  </div>
    <div class = "Container">

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter your Username" name="uname" required>
<br>
        <label for="psw"><b> Password</b></label>
        <input type="password" placeholder="Enter new password" name="psw" required>
<br>
<label for="email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="email" placeholder="Enter email address" name="email" required>  
<br>
        <button type="submit">Login</button>
    </div>
</form>
</div>