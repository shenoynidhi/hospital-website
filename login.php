<?php
include_once('connection.php');
session_start();
?>
<!DOCTYPE HTML>
<html>
<title> login </title> 
</head>
<style>
body{text-align: center;
margin-bottom:190px;
margin-left:450px;
margin-right:200px;
margin-top:100px;
}
a{margin-left:50px;
}
h1{text-align:center;
font-family:times new roman;}
.fa{
padding:10px;
width:7px;
text-align:center-left;}
</style>
</head>

<body>
<fieldset style="width:400px;padding:70px;background-color:#007bff">
<form method="POST">
<h1 style="color:white">HOPE HOSPITALS</h1>
<h4 style="color:white">Login Page </h4>
<input type="text" id="username" name="username" placeholder="Username" style="padding:20px; width:220px; font-family:arial" required>
<input type="password" id="password" name="password" placeholder="Password" style="padding:20px; width:220px; font-family:arial " required> <br><br> 
<input type="submit" name="submit" value="Log in" style="width:250px; padding:15px;background-color:white;color:black; margin-right:8px">
</fieldset>
</form>  
</body>                             
</html>

<?php
if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$query="SELECT * FROM login WHERE username='$user' && password='$pass' ";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	$row=mysqli_fetch_array($data);
	if($total==1)
	{
		if($row['user_type']=='user')
	{
		$_SESSION['username']=$user;
		header('location:home_user.php');
	}
	else
	{
		$_SESSION['username']=$user;
		header('location:home_admin.php');
	}
	}
	else
	{
		echo"<h3 style='margin-right:380px;color:red'>Login Failed!</h3>";
	}
}
?>