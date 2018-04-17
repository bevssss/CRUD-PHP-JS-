<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplogin";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<a href='view.php?id=".$row['id']."'>View Profile</a>".$row['fname']." ".$row['lname']."<br>";
    }
}
?>
<br>
<a href="register.php">Add user</a>


<script>
</script>

</body>
</html>