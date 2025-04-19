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
   
        <h2>Patient Details</h2>
        <form action="add_patient_pros.php" method="post">
            
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            
            
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                </select>
            
            
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
       
            
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            
            
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
           
            
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
                <br><br>
            
                <button type="submit" name="submit" class="button">Submit</button>

        </form>
    
</body>
</html>

<?php
include_once('connection.php');

if (isset($_GET['success']) && ($_GET['success']) == 'true' )
{  
	echo "<h3 style='color:green'>New patient record added successfully!</h3>";
}
elseif(isset($_GET['success']) && ($_GET['success']) == 'fail')
{
	echo"<h3 style='color:red'>New patient record was not added as".sql."</h3>".mysqli_error($conn); 
}
mysqli_close($conn);
?>