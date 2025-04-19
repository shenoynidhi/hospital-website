<!DOCTYPE html>
<html>
<head> 
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
   
        <h2>Appointment booking</h2>
        <form action="add_appt_pros.php" method="post">
            
                <label for="name">Patient ID:</label>
                <input type="text" id="name" name="pid" required>
				
				<label for="concern">Primary Concern:</label>
                <textarea id="concern" name="reason"></textarea>
                <br><br>
            
                <label for="choose doctor">Choose Doctor:</label>
                <select id="Choose doctor" name="did" required>
                    <option value="567000" selected>567000 - Dr. Arun Shenoy (cardiologist)</option>
                    <option value="567001">567001 - Dr. Meghana Singh (Pediatrician)</option>
                    <option value="567002">567002 - Dr. Ajay Malik (Surgeon)</option>
					<option value="567003">567003 - Dr. Sarah Mathew (Obstetrician/Gynecologist)</option>
					<option value="567004">567004 - Dr. Archana Sharma (dermatologist)</option>
					<option value="567005">567005 - Dr. Anju Singh (pathologist)</option>
					<option value="567006">567006 - Dr. Anjum Khan (urologist)</option>
					<option value="567007">567007 - Dr. Rahul Rao (radiologist)</option>
					<option value="567008">567008 - Dr. Nikhil Kamath (psychiatrist)</option>
					<option value="567009">567009 - Dr. Simran Sharma (neurologist)</option>
					<option value="567010">567010 - Dr. Neha Gupta (surgeon)</option>
					<option value="567011">567011 - Dr. Abhinav Anand (oncologist)</option>
					<option value="567012">567012 - Dr. Radhika Agarwal (cardiologist)</option>
					<option value="567013">567013 - Dr. Janhavi Prabhu (Pediatrician)</option>
					<option value="567014">567014 - Dr. Dev Bhat (surgeon)</option>
					<option value="567015">567015 - Dr. Bhavya Raj (Obstetrician/Gynecologist)</option>
                </select>
				<br><br>
        
                <button type="submit" name="submit" class="button">Submit</button>

        </form>
    
</body>
</html>
<?php
if(isset($_GET['success'])== 'true')
{
	echo"<h3 style='color:green'>New appointment added successfully!</h3>";
}
elseif(isset($_GET['success'])== 'false')
{
	echo"<h3 style='color:red'>New patient record was not added as".sql."</h3>".mysqli_error($conn);
}
?>