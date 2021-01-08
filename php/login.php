<?php
$server="localhost";
$user="root";
$pw="";
$db="hotel";
$conn=new mysqli($server,$user,$pw,$db);
?>
<!DOCTYPE>
<html>
<title>
login page
</title>
<?php
if(isset($_POST['log']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * from register where email='$email' and password = '$password'";
  $result=$conn->query($sql);
  if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
		if($email==$row['email'] && $password == $row['password']){
?>
<script>
alert("login successfully");
window.location.href="home.php";
</script>
<?php
}
}
}
else{
?>
<script>
alert("Invalid user");
window.location.href="login.php";
</script>
<?php
}
}
$conn->close();
?>
<body>
<form method="POST" type="text">

Email<br>
<input type="text" name="email" required placeholder="Enter ur email">
Password<br>
<input type="text" name="password" required placeholder="Enter ur password">
New User<a href="index.php">Register</a>
<input type="submit" name="log" value="login"><br>
</form>
</body>
</html>