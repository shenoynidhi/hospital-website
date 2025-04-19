<?php
include_once('connection.php');
session_start();
$userprofile= $_SESSION['username'];
	$query="SELECT * FROM login WHERE username='$userprofile'";
	$data=mysqli_query($conn,$query);
	$result=mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>

    <title>Form Links</title>
	
	<style>
body {
    margin: 0;
    padding: 0;
    font-family: times new roman;
    background-color:#007bff ;
}

h3 {
color: white;
margin-top: 0;
margin-left:10px;
margin-right:10px;
}
h1,h2{color:white;
margin-top: 0;
margin-left:10px;
margin-right:10px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

a {
    text-decoration: none;
    color: #333;
    display: block;
	margin-left:10px;
	margin-right:10px;
    padding: 8px;
    background-color: #fff;

}

a:hover {
    background-color: #f0f0f0;
}

	</style>
</head>
<body>
<br>
<h2>Welcome, <?php echo $result['username']?></h2>
<h1> Dashboard </h1>
    <h3>Patient details:</h3>
    <ul>
        <li><a href="add_patient.php" target="right_admin">Add Patient</a></li>
        <li><a href="update_patient.php" target="right_admin">Update Patient</a></li>
        <li><a href="delete_patient.php" target="right_admin">Delete Patient</a></li>
        
    </ul>
	<h3>Doctor Details:</h3>
    <ul>
        <li><a href="add_doctor.php" target="right_admin">Add Doctor </a></li>
		<li><a href="update_doctor.php" target="right_admin">Update Doctor</a></li>
        <li><a href="delete_doctor.php" target="right_admin">Delete Doctor </a></li>
    </ul>
	<h3>Appointment booking:</h3>
    <ul>
        <li><a href="add_appt.php" target="right_admin">Add appointment </a></li>
		<li><a href="view_appt.php" target="right_admin">View appointment</a></li>
		<li><a href="delete_appt.php" target="right_admin">Delete appointment </a></li>

    </ul>
	<h3>Reception details:</h3>
    <ul>
        <li><a href="add_recep.php" target="right_admin"> Add reception details </a></li>
        <li><a href="update_recep.php" target="right_admin">Update reception details </a></li>
        <li><a href="delete_recep.php" target="right_admin">Delete reception details </a></li>

    </ul>
	<br>
	<br>
	<a href="logout.php" target="_top">Logout</a>
</body>
</html>

