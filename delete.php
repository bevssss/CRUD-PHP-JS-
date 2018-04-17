
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplogin";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM `users` WHERE `id` = ".$_GET['id']."";
$conn->query($sql);
//echo $sql;
header('Location: users.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	

<br>

<p>User successfully deleted</p>

<a href="users.php">Back to users</a>

<script>
</script>

</body>
</html>