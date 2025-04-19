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
input[type="password"],
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
   
        <h2>Reception Details</h2>
        <form action="add_recep_pros.php" method="post">
            
                <label for="name">Username:</label>
                <input type="text" id="name" name="name" required>
            
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" required>
				
                <label for="usertype">Usertype:</label>
                <select id="usertype" name="usertype" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    
               </select>
            
            <br><br>
                
            
                <button type="submit" name="submit" class="button">Submit</button>

        </form>
    
</body>
</html>
<?php
if(isset($_GET['success'])== 'true')
{
	echo"<h3 style='color:green'>New reception login added successfully!</h3>";
}
elseif(isset($_GET['success'])== 'false')
{
	echo"<h3 style='color:red'>New reception login was not added as".sql."</h3>".mysqli_error($conn);
}
?>