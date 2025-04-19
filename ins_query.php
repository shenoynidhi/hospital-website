<?php
include_once('connection.php');
$message = '';
if(isset($_GET['success']) && ($_GET['success']) == 'true')
{
	$message="<h3 style='color:green'>Your query has been submitted successfully!</h3>";
}
elseif(isset($_GET['success']) && ($_GET['success'])== 'false')
{
	$message="<h3 style='color:red'>Your query was not submitted as".sql."</h3>".mysqli_error($conn);
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
		input[type="number"],
OPID_00010
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
            <a href="appointment.php">Appointment</a>
            <a href="doctors.php">Doctors</a>
			<a href="login.php"> Login </a>
			<a href="ins_query.php"> Query </a>
        </nav>
    </header>
	
    <section>
       
        <form action="ins_query_pros.php" method="post">
           <h1>Hospital Query Form</h1>

        <fieldset>
            <legend>Patient Information</legend>
            <label for="name">Patient Name:</label>
            <input type="text" id="name" name="name">
            
            <label for="age">Age:</label>
            <input type="text" id="age" name="age">
			
			<label for="email">Email:</label>
            <input type="email" id="email" name="email">
			
			<label for="phoneno">Phone No:</label>
            <input type="text" id="phoneno" name="phoneno">
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="o">Other</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Query Details</legend>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            
            <label for="comments">Description:</label>
            <textarea id="comments" name="comments" rows="4" required></textarea>
        </fieldset>

        <input type="submit" value="Submit Query" name="submit" class="button">
    </form>
	
    </section>
		<div id="message" style="color:green;"><?php echo $message ?></div>
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

