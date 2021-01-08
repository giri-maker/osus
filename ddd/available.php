<?php

$conn=mysqli_connect("localhost","root","","test4");
$sql="select * from hotel;";

$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($query);

?> 

<h1> available rooms: <?php echo $row['available'] ?></h1>

<a href="available1.php">confirm booking?</a>


<?php

?>