<?php
include_once('connection.php');
$id=$_GET['id'];
$name=$_GET['name'];
$pass=$_GET['pass'];
$type=$_GET['type'];
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
            
                <label for="id">Id</label>
                <input type="text" name="id" value="<?php echo $id?>" required>
				
				<label for="name">Username</label>
                <input type="text" name="name" value="<?php echo $name?>" required>
				
				
				<label for="pass">Password</label>
                <input type="password" id="pass" name="pass" value="<?php echo $pass?>" required>
            
            
                <label for="type">User Type</label>
                <select id="type" name="type" required>
					<option value="<?php echo $type?>"><?php echo $type?></option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
				<br>
				<br>
            
                <input type="submit" class="button" name="submit" value="Update">
        </form>
    
</body>
</html>
<?php
if(isset($_GET['submit']))
{
	$id=$_GET['id'];
	$name=$_GET['name'];
	$pass=$_GET['pass'];
	$type=$_GET['type'];	
	$query="UPDATE login SET username='$name',password='$pass',user_type='$type' WHERE id='$id'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo"<h3 style='color:green'>Login credentials updated successfully!</h3><a href='update_recep.php'>Check updated list here</a>";
	}
	else{
		echo "<h3 style='color:red'>Login credentials were not updated!</h3>";
	}
mysqli_close($conn);
}
?>