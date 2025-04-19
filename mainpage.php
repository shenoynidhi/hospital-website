<?php
include_once('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title> Hope Hospitals</title>
    <style>
       
        body {
            font-family: times new roman;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
        }
        nav a {
            text-decoration: none;
            color: #007bff;
            margin: 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        section {
            padding: 20px;
        }
        footer {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        
        .banner {
            
            background-size: cover;
            background-position: center;
			background-color:#007bff;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .banner h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .banner p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        section.services {
            padding: 50px 20px;
            text-align: center;
        }

        section.services h2 {
            
            margin-bottom: 20px;
            color: #007bff;
        }

        section.services p {
            
            margin-bottom: 20px;
        }

        section.services ul {
            list-style-type: none;
            padding: 0;
        }

        section.services li {
            display: inline-block;
            margin: 10px;
            font-size: 1.1em;
            padding: 8px 20px;
            border: 2px solid #007bff;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        section.services li:hover {
            background-color: #007bff;
            color: #fff;
        }

        section.contact {
            background-color: #007bff;
            color: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        section.contact h2 {
            
            margin-bottom: 20px;
        }

        section.contact p {
            
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <header>
        <h1>Hope Hospitals</h1>
        <nav>
			<a href="mainpage.php">Home</a>
            <a href="#about">About</a>
			<a href="#services"> Services </a>
            <a href="#contact">Contact</a>
            <a href="appointment.php">Appointment</a>
            <a href="doctors.php">Doctors</a>
			<a href="login.php"> Login </a>
			<a href="ins_query.php"> Query </a>
        </nav>
    </header>
    <section class="banner">
        <h1>Welcome to Hope Hospitals</h1>
        <p>Providing quality healthcare since 1983</p>
    </section>
    <section id="about" class="services">
        <h2>About Us</h2>
        <p>We are Asia's foremost and trusted healthcare provider and are committed to delivering world-class healthcare services to patients across the globe.</p>
    </section>
    <section id="services" class="services">
        <h2>Our Services</h2>
        <ul>
            <li>Cardiology</li>
            <li>Oncology</li>
            <li>Neurology</li>
            <li>Orthopedics</li>
            <li>Urology</li>
			<li>Pathology </li>
        </ul>
    </section>
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to reach out to us.</p>
        <p>Phone: +1-800-123-4567</p>
        <p>Email: info@hopehospitals.com</p>
    </section>
    <footer>
        <p>&copy; 2024 Hope Hospitals. All rights reserved.</p>
    </footer>
           
	
	

</body>
</html>