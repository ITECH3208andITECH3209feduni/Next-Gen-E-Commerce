<?php
session_start();
include 'header.php';


?>

<h1 style="text-align:center;"> Search Results </h1>
<div class ="search-results"></div>
<div>
<?php
if (isset($_POST['search'])){
    $conn = Open_Connection();
    $search = $_POST['search'];
    $sql= "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $queryResult= mysqli_num_rows($result);
   
    if($search==null) {
        echo "<h3>No results found. Error message: No value eneterd in the search box.</h3>";
    }
    elseif ($queryResult>0) {
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

}
?>
</div>