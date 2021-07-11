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
if (isset($_POST['create']) && !empty($_POST['name']) && !empty($_POST['task'])) {
    $name = $_POST['name'];
    $task = $_POST['task'];
    $query = "INSERT INTO task (id, name, task) VALUES ('', '$name', '$task')";
	$result = mysqli_query($conn, $query);
    if ($result) {
		header("refresh: 2; url=assignment3.php");
		echo "Task added";
	}
	else{
		$msg = 'Failed to create new Task';
	}
}
  
$query = "SELECT * FROM task";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0){
    echo "<table class='table'>
    <thead>
        <tr>
            <th>Name</th>
            <th>Task</th>
        </tr>
    </thead>";
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <tbody>
            <tr>
                <td>". $row["name"]."</td>
                <td>". $row["task"]."</td>
                <td><a href='del.php?id=". $row["id"]."'> Delete </a>
            
            </tr>                          
        </tbody>";
    }
    echo "</table>";
    }
    else {
        echo "0 results";
    }
    
?>

<h2> Add Tasks </h2>
<?php $msg = ''?>
<form action="" method="post" name="add">
<h4> <?php echo $msg; ?> </h4>
<p> Name: <input type="text" name="name" placeholder="Name" required /> </p>
<p> Task: <input type="text" name="task" placeholder="Task" required /> </p>
<input name="create" type="submit" value="Create" />
</form>
