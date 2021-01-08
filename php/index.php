<?php
$server="localhost";
$user="root";
$pw="";
$db="hotel";
$conn=new mysqli($server,$user,$pw,$db);
?>
<!DOCTYpe>
<html>
<title>
Register page
</title>
<?php
if(isset($_POST['reg'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="insert into register(name,email,password) values('$name','$email','$password')";
	$result=$conn->query($sql);
	if($result==TRUE)
{
?>
<script>
alert("Registered successfully");
window.location.href="login.php";
</script>
<?php
}
}
$conn->close();
?>
<body>
<form method="POST" type="text">
Name<br>
<input type="text" name="name" required placeholder="Enter ur name">
Email<br>
<input type="text" name="email" required placeholder="Enter ur email">
Password<br>
<input type="text" name="password" required placeholder="Enter ur password">
<input type="submit" name="reg" required value="Register"><br>
</form>
</body>
</html>