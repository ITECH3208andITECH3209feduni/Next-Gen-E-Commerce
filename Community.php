<?php
session_start();
include 'header.php';

if (isset($_POST['discussion'])){
    $conn = Open_Connection();
    $discuss=$_POST['discussion'];
    

    $sql=" INSERT INTO discussion (d_content, d_name) VALUES ('$_POST[discussion]', '$_SESSION[login_user]')";
    $result = mysqli_query($conn, $sql);
    
    if ($result>0) {
        header("location:Content.php");
    }
    else{
        echo"Failed11";
    }
}


?>

<style>
.community-discussion{
    display=flex;
}

#box input[type=text]{
    padding: 6px;
  margin-top: 12px;
  
  border: 1px solid;
  font-size: 17px;
  
  width:75%;
  height:180;
  float:left;
}
#details{
    float:left;
    width:50%;
}

 .community-discussion button{
    background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  position: fixed;
  right:50;
  top:420;
}
</style>
<h2 style="text-align:center">Community discussion page</h2>

<div class="community-discussion">
    
    <div id="details">
        <h2 style="text-align:left"> User details</h2>
        <h3 style="text-align:left">Username: <?php echo  $_SESSION['login_user']?></h3>
        <h3 style="text-align:left">Email: <?php echo  $_SESSION['login_email']?></h3>
    </div>

    <div id ="box">
        <form method="POST">
            <input type="text" placeholder="Write something to the forum" name="discussion" style="font-family:Lato">
            <button type="submit" style="font-family:Lato">Post</button>
        </form>
    </div>

</div>
