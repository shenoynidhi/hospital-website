<?php
include_once('connection.php');
$id=$_GET['id'];
$query="DELETE from doctor_details WHERE doc_id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<h3 style='color:green'>Doctor details deleted successfully!</h3><a href='delete_doctor.php'>Check updated list here</a>";
}
else{
	echo"<h3 style='color:red'>Doctor details were not deleted!</h3>";
}
?>