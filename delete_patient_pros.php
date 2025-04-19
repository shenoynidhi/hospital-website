<?php
include_once('connection.php');
$pid=$_GET['pid'];
$query="DELETE from outpatient_details WHERE pid='$pid'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<h3 style='color:green'>Patient record deleted successfully!</h3><a href='delete_patient.php'>Check updated list here</a>";
}
else{
	echo"<h3 style='color:red'>Patient record was not deleted!</h3>";
}
?>