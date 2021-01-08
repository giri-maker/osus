<?php

$name=$_POST['a'];
$mobile=$_POST['b'];

$conn = mysqli_connect("localhost","root","","test4");

$sql= "insert into datatable values('$name','$mobile');";

if($conn->query($sql))
{



$conn=mysqli_connect("localhost","root","","test4");
$sql="select * from datatable;";

$query=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($query))
{
?> 

<table><tr><td><h1>name</h1></td><td><?php echo $row['Name'] ?></td></tr>
<tr><td><h1>mobile</h1></td><td><?php echo $row['Mobile'] ?></td></td></tr>

<?php
	
}

}
?>