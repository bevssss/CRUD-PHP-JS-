<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplogin";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname='';
$lname='';
$email='';
$password='';
$number='';

if(isset($_POST['fname'])) $fname=$_POST['fname'];
if(isset($_POST['lname'])) $lname=$_POST['lname'];
if(isset($_POST['email'])) $email=$_POST['email'];
if(isset($_POST['password'])) $password=$_POST['password'];
if(isset($_POST['number'])) $number=$_POST['number'];

//$sql = "INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `number`) VALUES (NULL, '".$fname."', '".$lname."', '".$email."', MD5('".$password."'), '".$number."');";
//UPDATE `users` SET `id` = NULL, `fname` = 'fnew', `lname` = 'lnew', `email` = 'emaail@email.com', `password` = MD5('1234'), `number` = '12345678' WHERE `users`.`id` = 22;
$sql = "UPDATE `users` SET `fname` = '".$fname."', `lname` = '".$lname."', `email` = '".$email."', `password` = '".$password."', `number` = '".$number."' WHERE `users`.`id` = ".$_GET['id'];
$conn->query($sql);
//header("location: users.php");

if (isset($_POST['save'])){
 header("location: view.php?id=".$_GET['id']);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<form method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
Email: <input type="text" name="email"><br>
Password: <input type="password" name="password"><br>
Number: <input type="text" name="number"><br>
<input type="submit" value="Save Changes" name="save">
</form>

<script>
</script>

</body>
</html>