<!DOCTYPE html>
<html>
<head>
<title> add doctor </title>  
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
input[type="password"],
input[type="email"],
input[type="tel"],
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
   
        <h2>Doctor Details</h2>
        <form action="add_doctor_pros.php" method="post">
            
                <label for="name">Doctor Name:</label>
                <input type="text" id="name" name="name" required>
				
				<label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                </select>
				
				
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phoneno" required>
				
				<label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
				
                <label for="fee">Consultancy fee:</label>
                <input type="text" id="fee" name="fee" required>
				
                <label for="choose dept">Choose Doctor:</label>
                <select id="Choose dept" name="di" required>
				
                    <option value="DT01">DT01 - Department of Cardiology</option>
                    <option value="DT02">DT02 - Department of Pediatrics</option>
					<option value="DT03">DT03 - Department of Surgery</option>
					<option value="DT04">DT04 - Department of OBG</option>
					<option value="DT05">DT05 - Department of Dermatology</option>
					<option value="DT06">DT06 - Department of Pathology</option>
					<option value="DT07">DT07 - Department of Urology</option>
					<option value="DT08">DT08 - Department of Radiology</option>
					<option value="DT09">DT09 - Department of Psychiatry</option>
					<option value="DT10">DT10 - Department of Neurology</option>
					<option value="DT11">DT11 - Department of Oncology</option>
					<option value="DT12">DT12 - Department of Orthopedics</option>
                    
               </select>
            
            <br><br>
                
            
                <button type="submit" name="submit" class="button">Submit</button>

        </form>
    
</body>
</html>
<?php
if(isset($_GET['success'])== 'true')
{
	echo"<h3 style='color:green'>New Doctor details added successfully!</h3>";
}
elseif(isset($_GET['success'])== 'false')
{
	echo"<h3 style='color:red'>New Doctor details were not added as".sql."</h3>".mysqli_error($conn);
}
?>