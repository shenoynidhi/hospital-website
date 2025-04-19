<?php
include_once'connection.php';
if(isset($_POST['submit'])){
	$pid=$_POST['pid'];
	$reason=$_POST['reason'];
	$did=$_POST['did'];
	
	
	$query="INSERT INTO booking (apt_no,pid,reason,doc_id) VALUES (NULL,'$pid','$reason','$did')";
		$data=mysqli_query($conn,$query);
		if($data){
			header('location:add_appt.php?success=true');
		}
		else{
			echo"Error".sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>