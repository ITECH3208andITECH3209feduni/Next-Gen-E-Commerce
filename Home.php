<?php
session_start();
  include 'Welcome.php';
if(!empty($_SESSION['login_user'])==null){
 header("location:Logout.php");
}
?> 
<!DOCTYPE html>
<html>
<head><link href="Home.css" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300'>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<title>Homepage</title>

<style>
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 20px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}
</style>

<body>
<header>

<h2 style="float:center"> E-commerce Solution </h2>
</header>


<div class="nav">
    <a href="Home.php">Home</a>
    <a href="Community.php">Community</a>
    <a href="Logout.php" style="float:right">Logout</a>
    <a href="customerinfo.php">User/Admin</a>
	<div class="search-container" >
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.." name="search" style="font-family:Lato">
      <button type="submit" style="font-family:Lato">Go</button>
    </form>
  </div>
</div>

<h4 class="shimmer" style="float:right"><b><i class="fa fa-user" ></i> <?php echo  $_SESSION['login_user']?></b></h4>
<br><br>


<div class ="Home-container" >
<img class="img2" src="bimg.jpg">
  <br><br><br><br>
 
<h2 style="text-align:Center">

Discover & Buy the Best Software to Grow Your Business
</h2>
<form action="Softwares.php">
<button type="submit">Browse our softwares</button>
</form>
</div>
<br<br><br><br<br><br>
<h2 style="text-align:center"> Recently featured softwares</h2>

<div class="Recent-softwares">
  <div id ="pic">
  <a target="_blank" href="MS-software.php">
<img src="MS.jpg" class="Ms-Teams" width="300" height="200" ;>
</a>
</div>

<div id="content">
  <h4>
<?php
$conn = Open_Connection();
	$sql = "SELECT * FROM article where a_title='MS-Teams'";
	$result = mysqli_query($conn, $sql);
	
	if($result->num_rows> 0){
	while ($row = mysqli_fetch_assoc($result)){
	echo "<div>
	<h3> ".$row['a_title']."</h3>
	<p> ".$row['a_text']."</p>
	</div>";
}}

else { echo "0 results";
}

?>
</h4>
</div>
</div>
<br><br><br>

<div class="Recent-softwares1">
  <div id ="pic1">
  <a target="_blank" href="AV-software.php">
<img src="AV.jpg" class="AVantivirus" width="300" height="200" ;>
</a>
</div>

<div id="content1">
  <h4>
<?php
$conn = Open_Connection();
	$sql = "SELECT * FROM article where a_title='NextGen Antivirus'";
	$result = mysqli_query($conn, $sql);
	
	if($result->num_rows> 0){
	while ($row = mysqli_fetch_assoc($result)){
	echo "<div>
	<h3> ".$row['a_title']."</h3>
	<p> ".$row['a_text']."</p>
	</div>";
}}

else { echo "0 results";
}

?>
</h4>
</div>
</div>
<br><br><br><br>
<h2 style="text-align:center">Browse Softwares</h2>
<br><br>
<div class="softwares">
        <a target="_blank" href="AV-software.php">
        <img src="AV.jpg" alt="Antivirus" width="600" height="400" ;>
        
	</a>	
  
        <div class="desc" name="software">Next gen antivirus
          
          <button>Price: $25</button>
</div>
      
</div>
		

        
<div class="softwares">
	<a target="_blank" href="MS-software.php">
		<img src="MS.jpg" alt="Microsoft teams" width="650" height="300">
	</a>

	<div class="desc" name="software">Microsoft Teams
          <button>Price: $45</button>
  </div>

</div>

<div class="softwares">
	<a target="_blank" href="MP-software.php">
		<img src="MP.png" alt="Microsoft Project" width="600" height="300">
	</a>

  
	<div class="desc" name="software">Microsoft Project
      <button>Price: $99.95</button>
  </div>
</div>

        
<div class="softwares">
	<a target="_blank" href="KAV-software.php">
		<img src="KAV.jpg" alt="Kasperskey Antivirus" width="600" height="300">
	</a>

	<div class="desc" name="software">Kaspersky Antivirus      
  <button>Price: $105</button>     
  </div>

</div>

<div class="softwares">
	<a target="_blank" href="FW-software.php">
		<img src="FW.jpg" alt="Fire-wall" width="600" height="300">
	</a>

  
	<div class="desc" name="software">NextGen Firewall     
  <button>Price: $55</button>
  </div>

</div>

<div class="softwares">
	<a target="_blank" href="DM-software.php">
		<img src="DM.png" alt="Download manager" width="600" height="300">
	</a>
  
	<div class="desc" name="software">NXT Download tool
        
  <button>Price: $85</button>     
  </div>
</div>
<br>
    <!-- Site footer -->
    <div class="container">
          <div class="col-sm-12 col-md-6">
            
            <p class="text-justify">E-commerce Solution: <i>Discover & Buy the Best Software to Grow Your Business.</p>
          
          </div>
        
        <hr>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by Team NextGen
            </p>
          </div>

          
        </div>
      
</footer>

</body>
</html>

<style>
  
div.container{
position:relative;
top:100;
text-align:center;
}
  div.softwares {
  margin: 20px;
  border: 1px solid #black;
  float: left;
  width: 180px;
  
}

div.softwares:hover {
  border: 1px solid #777;
}

div.softwares img {
  width: 100%;
  height: 22%;
}

div.desc {
  padding: 15px;
  text-align: center;
}

div.desc button{
    background-color: #4CAF50;
  color: white;
  padding: 15;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
    }
</style>
        

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" id="myText" required></textarea>

    <button type="submit" class="btn" onclick="myFunction()">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>

function myFunction() {
	var myText = document.getElementById("myText").value;
  if (myText== 'Hi') 
  {
		
		alert("Hello there. How can I help you?")
		
   
  }

	else {
		alert("Cant Understand");
	}
	}
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>