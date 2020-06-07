<?php
session_start();
  include 'Welcome.php';
if(!empty($_SESSION['login_user'])==null){
 header("location:Logout.php");
}
?> 

<html>
<head><link href="Home.css" rel="stylesheet">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<h2 style="float:right"> E-commerce Solution </h2>
</header>

<div class="nav">
    <a href="Home.php">Home</a>
    <a href="Softwares.php">Softwares</a>
    <a href="Community.php">Community</a>
	<div class="search-container" style="float:right">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.." name="search" style="font-family:Lato">
      <button type="submit" style="font-family:Lato">Go</button>
    </form>
  </div>
    <a href="Logout.php" style="float:right">Logout</a>
    <a href="customerinfo.php" style="float:right">Customer Info</a>
</ul>
</div>

<h4 class="shimmer" style="float:center"><b>Welcome <?php echo  $_SESSION['login_user']?></b></h4>
<br><br>
<h2> Softwares to browse</h2>

<div class ="container">
<?php
$conn = Open_Connection();
	$sql = "SELECT * FROM article";
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
</div>

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