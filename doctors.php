<?php
include_once('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
   
	
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

		 
/* Specific styling for doctors page */
.doctors {
    text-align: center;
}
.doctor-card {
    display: inline-block;
    margin: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 200px;
}
.doctor-card img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
.doctor-card h3 {
    margin-top: 10px;
    font-size: 20px;
}
.doctor-card p {
    margin-top: 5px;
    font-size: 16px;
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
			<a href="add_appt.php">Appointment </a>
            <a href="doctors.php">Doctors</a>
			<a href="login.php"> Login </a>
			<a href="ins_query.php"> Query </a>
        </nav>
    </header>
	
    <section class="doctors">
        <h2>Our Doctors</h2>
        <div class="doctor-card">
            <img src="images/arun.jpg" alt="Doctor 1">
            <h3>Dr. Arun Shenoy</h3>
            <p>Cardiologist</p>
			<p> Department of cardiology </p>
        </div>
        <div class="doctor-card">
            <img src="images/meghana.jpg" alt="Doctor 2">
            <h3>Dr. Meghana Singh</h3>
            <p>Pediatrician</p>
			<p> Department of pediatrics </p>
        </div>
        <div class="doctor-card">
            <img src="images/ajay.png" alt="Doctor 3">
            <h3>Dr. Ajay Malik</h3>
            <p>Surgeon</p>
			<p> Department of surgery </p>
        </div>
        <div class="doctor-card">
            <img src="images/sarah.jpg" alt="Doctor 4">
            <h3>Dr. Sarah Mathew</h3>
            <p>Obstetrician/Gynecologist</p>
			<p> Department of OBG </p>
        </div>
		 <div class="doctor-card">
            <img src="images/archana.jpg" alt="Doctor 5">
            <h3>Dr. Archana Sharma </h3>
            <p>Dermatologist</p>
			<p> Department of dermatology </p>
        </div>
        <div class="doctor-card">
            <img src="images/anju.jpeg" alt="Doctor 6">
            <h3>Dr. Anju Singh</h3>
            <p>Pathologist</p>
			<p> Department of pathology </p>
        </div>
        <div class="doctor-card">
            <img src="images/anjum.jpg" alt="Doctor 7">
            <h3>Dr. Anjum Khan</h3>
            <p>Urologist</p>
			<p> Department of urology </p>
        </div>
        <div class="doctor-card">
            <img src="images/rahul.jpg" alt="Doctor 8">
            <h3>Dr. Rahul Rao </h3>
            <p>Radiologist</p>
			<p> Department of radiology </p>
        </div>
		 <div class="doctor-card">
            <img src="images/nikhil.jpg" alt="Doctor 9">
            <h3>Dr. Nikhil Kamath</h3>
            <p>Psychiatrist </p>
			<p> Department of psychiatry </p>
        </div>
        <div class="doctor-card">
            <img src="images/simran.jpg" alt="Doctor 10">
            <h3>Dr. Simran Sharma </h3>
            <p>Neurologist</p>
			<p> Department of neurology </p>
        </div>
        <div class="doctor-card">
            <img src="images/neha.jpg" alt="Doctor 11">
            <h3>Dr. Neha Gupta </h3>
            <p>Surgeon</p>
			<p> Department of surgery </p>
        </div>
        <div class="doctor-card">
            <img src="images/abhinav.jpg" alt="Doctor 12">
            <h3>Dr. Abhinav Anand </h3>
            <p>Oncologist</p>
			<p> Department of oncology </p>
        </div>
		 <div class="doctor-card">
            <img src="images/radhika.jpg" alt="Doctor 13">
            <h3>Dr. Radhika Agarwal </h3>
            <p>Cardiologist</p>
			<p> Department of cardiology </p>
        </div>
        <div class="doctor-card">
            <img src="images/janhavi.jpg" alt="Doctor 14">
            <h3>Dr. Janhavi Prabhu </h3>
            <p>Pediatrician</p>
			<p> Department of pediatrics </p>
        </div>
        <div class="doctor-card">
            <img src="images/dev.jpg" alt="Doctor 15">
            <h3>Dr. Dev Bhat </h3>
            <p>Orthopedist</p>
			<p> Department of orthopedics </p>
        </div>
        <div class="doctor-card">
            <img src="images/bhavya.jpg" alt="Doctor 16">
            <h3>Dr. Bhavya Raj </h3>
            <p>Obstetrician/Gynecologist</p>
			<p> Department of OBG </p>
        </div>
    
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

