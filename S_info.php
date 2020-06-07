
<?php
session_start();
include 'header.php';
?>

<?php

    $conn = Open_Connection();
   
    $sql= "SELECT * FROM article where a_id = '2'";
    $result = mysqli_query($conn, $sql);
    $queryResult= mysqli_num_rows($result);
    if ($queryResult>0) {
        while ($row = mysqli_fetch_assoc($result)){
	echo "<div>
	<h3> ".$row['a_title']."</h3>
	<p> ".$row['a_text']."</p>
	</div>";
}
    }
    
    else{
        echo 'No results found.';
        echo ' Error message: No related information found.';
    }


?>