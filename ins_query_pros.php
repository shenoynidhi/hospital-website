<?php
include_once'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$phone=$_POST['phoneno'];
	$gender=$_POST['gender'];
	$sub=$_POST['subject'];
	$comm=$_POST['comments'];
	
	$query = "INSERT INTO data_collect (name,age,email,phoneno,gender, subject, comments) VALUES ('$name','$age','$email','$phone','$gender','$sub','$comm')";
   $data=mysqli_query($conn,$query);
		if($data){
			header('location:ins_query.php?success=true');
		}
		else{
			echo"Error".sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>