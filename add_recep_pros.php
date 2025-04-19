<?php
include_once'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$type=$_POST['usertype'];
	
	
	$query="INSERT INTO login (username,password,user_type) VALUES ('$name','$pass','$type')";
		$data=mysqli_query($conn,$query);
		if($data){
			header('location:add_recep.php?success=true');
		}
		else{
			echo"Error".sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>