<?php
session_start();
session_unset();
header('location:mainpage.php');
exit;
?>