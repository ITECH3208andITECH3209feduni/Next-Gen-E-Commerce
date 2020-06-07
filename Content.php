<?php
session_start();
include 'header.php';
?>
<?php
    $conn = Open_Connection();
    $mysql="SELECT * FROM discussion";
    $myresult = mysqli_query($conn, $mysql);
       
        if($myresult->num_rows> 0){
        while ($row = mysqli_fetch_assoc($myresult)){
        echo "<div>
        <h3> ".$row['d_name']." posted to the forum:</h3> <h2>".$row['d_content']."</h2>
        
        
        </div>";
    }
}
    else{
        echo"failed";
    }
