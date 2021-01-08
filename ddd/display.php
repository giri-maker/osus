<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
  td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
}
</style>
</html>


<?php

$conn=mysqli_connect("localhost","root","","test4");
$sql="select * from datatable;";

$query=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($query))
{
?> 

<table><tr><td><h1>name</h1></td><td><?php echo $row['Name'] ?></td></tr>
<tr><td><h1>mobile</h1></td><td><?php echo $row['Mobile'] ?></td></td></tr></table>

<?php
	
}
?>