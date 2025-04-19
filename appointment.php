<?php
include_once('connection.php');
$message = '';
if(isset($_GET['success']) && ($_GET['success']) == 'true')
{
	$message="<h3 style='color:green'>Your appointment has been booked successfully!</h3>";
}
elseif(isset($_GET['success']) && ($_GET['success'])== 'false')
{
	$message="<h3 style='color:red'>Your appointment was not booked as".sql."</h3>".mysqli_error($conn);
}
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

/*form styling*/
 body {
            font-family: times new roman;
            padding: 20px;
            background-color: #f4f4f9;
        }
        h1 {
            color: white;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        fieldset {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        legend {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
		select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
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
</head>
<body>
    <header>
        <h1>Hope Hospitals</h1>
        <nav>
			<a href="mainpage.php">Home</a>
            <a href="#about">About</a>
			<a href="#services"> Services </a>
            <a href="#contact">Contact</a>
            <a href="doctors.php">Doctors</a>
			<a href="login.php"> Login </a>
			<a href="ins_query.php"> Query </a>
        </nav>
    </header>
	
    <section>
        <h2>Appointment booking </h2>
       
        <form action="add_appt_pros2.php" method="post">
		<fieldset>
            <legend>Appointment form </legend>
            
             <label for="name">Patient ID:</label>
                <input type="text" id="name" name="pid" required>
				
				<label for="concern">Primary Concern:</label>
                <textarea id="concern" name="reason"></textarea>
                <br><br>
            
                <label for="choose doctor">Choose Doctor:</label>
                <select id="Choose doctor" name="did" required>
                    <option value="567000" selected>567000 - Dr. Arun Shenoy (cardiologist)</option>
                    <option value="567001">567001 - Dr. Meghana Singh (Pediatrician)</option>
                    <option value="567002">567002 - Dr. Ajay Malik (Surgeon)</option>
					<option value="567003">567003 - Dr. Sarah Mathew (Obstetrician/Gynecologist)</option>
					<option value="567004">567004 - Dr. Archana Sharma (dermatologist)</option>
					<option value="567005">567005 - Dr. Anju Singh (pathologist)</option>
					<option value="567006">567006 - Dr. Anjum Khan (urologist)</option>
					<option value="567007">567007 - Dr. Rahul Rao (radiologist)</option>
					<option value="567008">567008 - Dr. Nikhil Kamath (psychiatrist)</option>
					<option value="567009">567009 - Dr. Simran Sharma (neurologist)</option>
					<option value="567010">567010 - Dr. Neha Gupta (surgeon)</option>
					<option value="567011">567011 - Dr. Abhinav Anand (oncologist)</option>
					<option value="567012">567012 - Dr. Radhika Agarwal (cardiologist)</option>
					<option value="567013">567013 - Dr. Janhavi Prabhu (Pediatrician)</option>
					<option value="567014">567014 - Dr. Dev Bhat (surgeon)</option>
					<option value="567015">567015 - Dr. Bhavya Raj (Obstetrician/Gynecologist)</option>
                </select>
      
            <br><br>
            
            <button type="submit" name="submit" class="button">Submit</button>

        </form>

		<p style="font-family:times new roman">Don't have a Patient ID? <a href="add_patient2.php">Register here</a></p>
    </section>
	<div id="message" style="color:green;"><?php echo $message ?></div>
	<br>
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