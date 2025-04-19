<?php
include_once('connection.php');
$id=$_GET['id'];
$pref=$_GET['prefix'];
$name=$_GET['name'];
$gender=$_GET['gender'];
$phone=$_GET['phoneno'];
$email=$_GET['email'];
$fee=$_GET['fee'];

?>
<!DOCTYPE html>
<html>
<head>
<title> add patient </title>  
</head>
<style>
body {
    font-family: TIMES NEW ROMAN;
    background-color: #f4f4f4;
}

h2 {
    margin-top: 0;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="tel"],
input[type="email"],
textarea{
    width: 80%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
select{
    width: 82%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.button:hover {
    background-color: #0056b3;
}
</style>
<body>
   
        <h2>Reception details</h2>
        <form method="GET">
		
				 <label for="id">Doctor ID:</label>
                <input type="text" id="id" name="id" value="<?php echo $id ?>" required>
            
                <label for="name">Doctor Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name ?>" required>
				
				<label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
					<option value="<?php echo $gender ?>"><?php echo $gender ?></option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                </select>
				
				
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phoneno" value="<?php echo $phone ?>" required>
				
				<label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email ?>" required>
				
                <label for="fee">Consultancy fee:</label>
                <input type="text" id="fee" name="fee" value="<?php echo $fee ?>" required>
				
				<br><br>
                <input type="submit" name="submit" value="Update" class="button">
        </form>
    
</body>
</html>
<?php
if(isset($_GET['submit']))
{
	$id=$_GET['id'];
	$name=$_GET['name'];
	$gender=$_GET['gender'];
	$phone=$_GET['phoneno'];
	$email=$_GET['email'];
	$fee=$_GET['fee'];	
	$query="UPDATE doctor_details SET doc_name='$name',gender='$gender',phoneno='$phone', email='$email', consult_fee='$fee' WHERE doc_id='$id'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo"<h3 style='color:green'>Doctor details updated successfully!</h3><a href='update_doctor.php'>Check updated list here</a>";
	}
	else{
		echo "<h3 style='color:red'>Doctor details were not updated!</h3>";
	}
mysqli_close($conn);
}
?>