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

<title></title>


<body>

<header>

<h2 style="float:right"> E-commerce Solution </h2>
</header>

<div class="nav">
    <a href="Home.php">Dashboard</a>
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
</body>