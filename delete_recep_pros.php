<?php
include_once('connection.php');
$id=$_GET['id'];
$query="DELETE from login WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<h3 style='color:green'>Login credentials deleted successfully!</h3><a href='delete_recep.php'>Check updated list here</a>";
}
else{
	echo"<h3 style='color:red'>Login credentials were not deleted!</h3>";
}
?>