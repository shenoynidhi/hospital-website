<?php
include_once'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$phone=$_POST['phoneno'];
	$email=$_POST['email'];
	$fee=$_POST['fee'];
	$di=$_POST['di'];
	
	
	$query = "INSERT INTO doctor_details (doc_name, gender, phoneno, email, consult_fee,dept_id) VALUES ('$name','$gender','$phone','$email','$fee','$di')";
    $data = mysqli_query($conn, $query);
         if($data){
			header('location:add_doctor.php?success=true');
        } else {
            header('location:add_doctor.php?success=false');
        }
}
else
    {
        echo "Error: ". $query. "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);
?>