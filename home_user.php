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
    
    <title>Hospital User Dashboard</title>
</head>
<frameset cols="30%, 70%">
    <frame src="left.php" name="left">
    <frame src="add_patient.php" name="right">
</frameset>
</html>
