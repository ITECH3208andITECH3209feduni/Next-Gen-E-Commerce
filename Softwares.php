<<<<<<< HEAD
<?php
session_start();
include 'header.php';
?>

<html>
    <body>
<h1 style="text-align:center">Softwares</h1>

<div class="softwares">
        <a target="_blank" href="S_info.php">
        <img src="AV.jpg" alt="Antivirus" width="600" height="400" ;>
        
	</a>	
  <form action = "S_info.php" method = "post">
        <div class="desc" name="software">Next gen antivirus
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
          <h7>Price: $25</h7>
        </div>
    </form>
      
</div>
		

        
<div class="softwares">
	<a target="_blank" href="MS.jpg">
		<img src="MS.jpg" alt="Microsoft teams" width="650" height="300">
	</a>

	<div class="desc" name="software">Microsoft Teams
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
          <h7>Price: $45</h7>
  </div>

</div>

<div class="softwares">
	<a target="_blank" href="MP.png">
		<img src="MP.png" alt="Microsoft Project" width="600" height="300">
	</a>

  
	<div class="desc" name="software">Microsoft Project
        
        
  </div>
</div>

		

        
<div class="softwares">
	<a target="_blank" href="KAV.jpg">
		<img src="KAV.jpg" alt="Kasperskey Antivirus" width="600" height="300">
	</a>

	<div class="desc" name="software">Kaspersky Antivirus
        
        
  </div>

</div>

<div class="softwares">
	<a target="_blank" href="FW.jpg">
		<img src="FW.jpg" alt="Fire-wall" width="600" height="300">
	</a>

  
	<div class="desc" name="software">NextGen Firewall
        
        
  </div>

</div>

<div class="softwares">
	<a target="_blank" href="DM.png">
		<img src="DM.png" alt="Download manager" width="600" height="300">
	</a>

  
	<div class="desc" name="software">NXT Download manager
        
        
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
=======
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
>>>>>>> 428286c45e9b076071d3a8d583a57740d0b2f321
</style>