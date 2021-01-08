<?php

$conn=mysqli_connect("localhost","root","","test4");
$sql="select * from hotel;";

$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($query);

?> 

<h1> book confirmed </h1>

<?php echo $row['available']-1 ;



$sql1="update hotel set available= available-1;";
$query1=mysqli_query($conn,$sql1);

if($row1=mysqli_fetch_assoc($query1)){


echo $row1['available'];
}

?>