<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "side_hustle";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Database connection failed: " . mysqli_error($conn));
} else {
	$db_select = mysqli_select_db($conn, $dbname);
	if (!$db_select) {
		die("Database selection failed: " . mysqli_error($conn));
	}
}
$id = $_GET['id'];

$query = " DELETE FROM task WHERE id = '".$id."' limit 1";
$result = mysqli_query($conn, $query);
    
echo '<script > window.alert("Task Deleted"); </script>';
echo '<meta http-equiv="refresh" content="2; url= assignment3.php">';
?>