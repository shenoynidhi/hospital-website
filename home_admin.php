<?php
include_once('connection.php');
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Hospital admin Dashboard</title>
</head>
<frameset cols="30%, 70%">
    <frame src="left_admin.php" name="left_admin">
    <frame src="add_patient.php" name="right_admin">
</frameset>
</html>