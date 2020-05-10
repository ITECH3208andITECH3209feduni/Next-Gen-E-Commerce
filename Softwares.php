<?php
session_start();
include 'header.php';
?>

<html>
    <body>
<h1 style="text-align:center">Softwares</h1>

<div class="softwares">
        <a target="_blank" href="AV.jpg">
        <img src="AV.jpg" alt="Antivirus" width="600" height="400" ;>
        
	</a>	
      <form action = "S_info.php" method = "post">
    <div class="desc" name="software">Next gen antivirus
        
        <button type="submit" style="font-family:Lato">Learn more</button>
    </div></form>
</div>
		

        
<div class="softwares">
	<a target="_blank" href="MS.jpg">
		<img src="MS.jpg" alt="Microsoft teams" width="600" height="300">
	</a>

  <form action = "S_info.php" method = "post">
	<div class="desc" name="software">Microsoft Teams
        
        <button type="submit" style="font-family:Lato">Learn more</button>
  </div></form>

</div>
</body>
</html>

<style>
    

    div.softwares {
  margin: 20px;
  border: 1px solid #black;
  float: left;
  width: 180px;
  position:relative;
  left:10;
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