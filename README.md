# Hospital Website
Mini project for academic submission

This is a dynamic hospital management website developed as part of my academic mini-project. It provides interfaces for patients, hospital administrators, and receptionists, facilitating real-time management of hospital services such as appointments, patient records, and staff interactions.

## Project Features

- Patient registration with automatic ID assignment
- Doctor listings and appointment booking
- Secure login portals for receptionists and admins to add/update/delete records
- Query handling through contact form
- Frontend developed using HTML, CSS
- Database connectivity using PHP and MySQL
- Run on XAMPP (Apache + MySQL)

## Steps to run the project locally

1. Install [XAMPP](https://www.apachefriends.org/index.html)
2. Place the full project folder inside:  
   `C:\xampp\htdocs\hospital-website`
3. Start Apache and MySQL in the XAMPP Control Panel
4. Import the provided `.sql` file into phpMyAdmin to create the database
5. Access the site in your browser at:  
   `http://localhost/hospital-website/mainpage.php`
Note: This project uses PHP and must be run on a local server environment like XAMPP.

## Project Contributors

- Nikita Sharma – Frontend Developer (HTML/CSS design, UI structure)  
- Nidhi Shenoy – Backend Developer (PHP, MySQL integration)

## Folder Structure Overview

- `mainpage.php` – Main landing page of the hospital management system
- `login.php` – Login portal for both admin and receptionist
- `logout.php` – Handles session logout
- `connection.php` – Database connection file

### Patient Management
- `add_patient.php`, `add_patient2.php`, `add_admin_patient.html` – Patient registration forms
- `add_patient_pros.php`, `add_patient_pros2.php` – Patient registration processing scripts
- `update_patient.php`, `update_patient_pros.php` – Update patient information
- `delete_patient.php`, `delete_patient_pros.php` – Delete patient records
- `view_appt.php` – View all appointments by a patient

### Doctor Management
- `doctors.php` - Displays all doctor profiles
- `add_doctor.php`, `add_doctor_pros.php` – Add new doctor
- `update_doctor.php`, `update_doctor_pros.php` – Update doctor info
- `delete_doctor.php`, `delete_doctor_pros.php` – Delete doctor profile

### Receptionist Management
- `add_recep.php`, `add_recep_pros.php` – Add receptionist
- `update_recep.php`, `update_recep_pros.php` – Update receptionist info
- `delete_recep.php`, `delete_recep_pros.php` – Delete receptionist

### Appointment Management
- `appointment.php` – Book an appointment
- `add_appt.php`, `add_appt_pros.php`, `add_appt_pros2.php` – Add appointment steps and processing
- `delete_appt.php`, `delete_appt_pros.php` – Delete appointment

### Admin & User Dashboard
- `home_user.php`, `left.php` – User dashboard layout and sidebar
- `home_admin.php`, `left_admin.php`, `admin_right.php` – Admin panel layout and functionality

### Query Management
- `ins_query.php`, `ins_query_pros.php` – Query-related scripts

### Billing
- `view_invoice.php` – View patient invoice
- 
### Images
- `images/` – Contains image resources used across the web pages

## Disclaimer

This project was developed purely for academic learning and demonstration purposes. It simulates a hospital system interface and does not represent any real-world hospital data or workflows. Feel free to clone or fork for learning purposes.

