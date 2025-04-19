<?php
include_once('connection.php');
$pid=$_GET['pid'];
$name=$_GET['name'];
$gender=$_GET['gender'];
$age=$_GET['age'];
$phoneno=$_GET['phoneno'];
$email=$_GET['email'];
$address=$_GET['address'];
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
   
        <h2>Update Patient Details</h2>
        <form method="GET">
            
				<label for="pid">Patient ID:</label>
                <input type="text" id="pid" name="pid" value="<?php echo $pid?>" required>
					
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name?>" required>
            
            
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
					<option value="<?php echo $gender?>"><?php echo $gender?></option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                </select>
            
            
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" value="<?php echo $age?>" required>
       
            
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phoneno" value="<?php echo $phoneno?>" required>
            
            
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email?>" required>
           
            
                <label for="address">Address:</label>
                <textarea id="address" name="address" required><?php echo $address?></textarea>
                <br><br>
            
                <input type="submit" class="button" name="submit" value="Update">

        </form>
    
</body>
</html>
<?php
if(isset($_GET['submit']))
{
	$pid=$_GET['pid'];
	$name=$_GET['name'];
	$gender=$_GET['gender'];
	$age=$_GET['age'];
	$phoneno=$_GET['phoneno'];
	$email=$_GET['email'];
	$address=$_GET['address'];
	
	$query="UPDATE outpatient_details SET name='$name',gender='$gender',age='$age',phoneno='$phoneno',email='$email',address='$address' WHERE pid='$pid'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo"<h3 style='color:green'>Patient record updated successfully!</h3><a href='update_patient.php'>Check updated list here</a>";
	}
	else{
		echo "<h3 style='color:red'>Patient record was not updated!</h3>";
	}
mysqli_close($conn);
}
?>