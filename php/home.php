<?php
$server="localhost";
$user="root";
$pw="";
$db="hotel";
$conn=new mysqli($server,$user,$pw,$db);

	$sql="select * from register";
	$result=$conn->query($sql);
	if($result->num_rows > 0)
	{
		while($row=$result->fetch_assoc())
		{
print $row['name'];
echo '<br>';
print $row['email'];
echo '<br>';


		}
	}
	else{
		echo 'The patient has no details to display';
	}
	echo '<br>';
	echo '<br>';
	echo "<button onclick='func();'>'EXIT'</button>";
	echo '<script>
	function func()
	{
		window.location.href="login.php";
	}
	</script>';

$conn->close()
?>
	
			