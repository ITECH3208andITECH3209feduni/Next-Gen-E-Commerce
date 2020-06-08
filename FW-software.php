
<?php
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head><link href="Home.css" rel="stylesheet">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300'>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<div class="Recent-softwares1">
  <div id ="pic1">
 
<img src="FW.jpg" class="Ms-teams" width="300" height="200" ;>


</div>

<div id="content1">
  <h4>
<?php
$conn = Open_Connection();
	$sql = "SELECT * FROM article where a_title='NextGen Firewall'";
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
<div class="rate">
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="Excellent">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="Good">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="Average">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="Poor">Poor</label>
          </div>
</h4>
</div>
</div>

<h2 style="text-align:center">User feedback</h2>
<div class="feedback">
<label for="feed"><b>Message:</b></label>
    <input type="text" placeholder="Feedback is appreciated" name="feed" required>
<button type="submit" onclick="myFunction()" >Go</button>
</div>

<style>
.feedback{
    margin-left:500px;
}

input[type=text]{
  
  
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #000;
  box-sizing: 10px;
}
          .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
    margin-left:-280px;
    margin-top:80px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:black;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
</style>