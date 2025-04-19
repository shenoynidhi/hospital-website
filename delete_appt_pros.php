<?php
include_once('connection.php');
$apt=$_GET['apt_no'];
$query="DELETE from booking WHERE apt_no='$apt'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<h3 style='color:green'>Appointment deleted successfully!</h3><a href='delete_appt.php'>Check updated list here</a>";
}
else{
	echo"<h3 style='color:red'>Patient record was not deleted!</h3>";
}
?>