<?php
include_once('connection.php');
$query="SELECT b.apt_no,b.pid,o.name,b.reason,b.doc_id,d.doc_name FROM booking b join outpatient_details o on b.pid=o.pid join doctor_details d on b.doc_id=d.doc_id order by apt_no asc";
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
	<h2>Appointment booking</h2>
	<table>
		<tr>
			<th>Appointment No</th>
			<th>Patient ID</th>
			<th>Patient Name</th>
			<th>Primary Concern</th>
			<th>Doctor ID</th>
			<th>Doctor Name</th>
		</tr>
		<?php
		while($result=mysqli_fetch_array($data))
		{
			echo "<tr>
					<td>".$result['apt_no']."</td>
					<td>".$result['pid']."</td>
					<td>".$result['name']."</td>
					<td>".$result['reason']."</td>
					<td>".$result['doc_id']."</td>
					<td>".$result['doc_name']."</td>
				</tr>";
			}
}
else
	{
	echo"<h3 style='color:red'>No records found</h3>";
		}
		mysqli_close($conn);		
		?>
	</table>
	</body>
	</html>