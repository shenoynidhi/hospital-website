<?php
include_once('connection.php');
$query="SELECT * from doctor_details";
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
	 <h2>Doctor Details</h2>
	<table>
		<tr>
			<th>Doctor ID</th>
			<th>Prefix</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Phone No</th>
			<th>Email</th>
			<th>Consultancy Fee</th>
			<th>Dept_id</th>
			<th></th>
		</tr>
		<?php
		while($result=mysqli_fetch_array($data))
		{
			echo "<tr>
					<td>".$result['doc_id']."</td>
					<td>".$result['prefix']."</td>
					<td>".$result['doc_name']."</td>
					<td>".$result['gender']."</td>
					<td>".$result['phoneno']."</td>
					<td>".$result['email']."</td>
					<td>".$result['consult_fee']."</td>
					<td>".$result['dept_id']."</td>
					<td><a href='update_doctor_pros.php?id=$result[doc_id]&prefix=$result[doc_name]&name=$result[doc_name]&gender=$result[gender]&phoneno=$result[phoneno]&email=$result[email]&fee=$result[consult_fee]&di=$result[dept_id]'>Update</a></td>
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