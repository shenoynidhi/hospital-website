<?php
include_once('connection.php');
$query="SELECT * from outpatient_details";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
	?>
	<html>
	<head>
	<style>
	<style>
body {
            font-family: Times New Roman;
            padding: 20px;
            background-color: #f4f4f9;
        }
h2 {
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			text-align: center;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
</style>

	</style>
	</head>
	<body>
	 <h2>Patient Details</h2>
	<table>
		<tr>
			<th>Patient ID</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Phone No</th>
			<th>Email</th>
			<th>Address</th>
			<th></th>
		</tr>
		<?php
		while($result=mysqli_fetch_array($data))
		{
			echo "<tr>
					<td>".$result['pid']."</td>
					<td>".$result['name']."</td>
					<td>".$result['gender']."</td>
					<td>".$result['age']."</td>
					<td>".$result['phoneno']."</td>
					<td>".$result['email']."</td>
					<td>".$result['address']."</td>
					<td><a href='delete_patient_pros.php?pid=$result[pid]&name=$result[name]'>Delete</a></td>
				</tr>";
			}
}
else
	{
	echo"<h3 style='color:red'>No records found</h3>";
		}
			
		?>
	</table>
	</body>
	</html>