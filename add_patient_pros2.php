<?php
include_once'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	
	$query = "INSERT INTO outpatient_details (name, gender, age, phoneno, email, address) VALUES ('$name','$gender','$age','$phone','$email','$address')";
    $data = mysqli_query($conn, $query);
         if($data){
			header('location:add_patient2.php?success=true');
        } else {
            header('location:add_patient2.php?success=false');
        }
}
else
    {
        echo "Error: ". $query. "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);
?>