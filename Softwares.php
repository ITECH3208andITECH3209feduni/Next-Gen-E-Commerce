<?php
session_start();
include 'header.php';
?>

<html>
    <body>
<h1 style="text-align:center">Softwares</h1>
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

</body>
</html>

<style>
  
  .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
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