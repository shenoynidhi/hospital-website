<?php
include_once('connection.php');
$query="SELECT i.invoice_no,i.apt_no,o.name,d.doc_name,d.consult_fee,i.hosp_charges,i.total_amt FROM invoice i join booking b on i.apt_no=b.apt_no join doctor_details d on b.doc_id=d.doc_id join outpatient_details o on b.pid=o.pid order by invoice_no asc";
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
	<h2>Invoice details</h2>
	<table>
		<tr>
			<th>Invoice No</th>
			<th>Appointment No</th>
			<th>Patient Name</th>
			<th>Doctor Name</th>
			<th>Consultancy fee</th>
			<th>Hospital Charges</th>
			<th>Total Bill Amount</th>
		</tr>
		<?php
		while($result=mysqli_fetch_array($data))
		{
			echo "<tr>
					<td>".$result['invoice_no']."</td>
					<td>".$result['apt_no']."</td>
					<td>".$result['name']."</td>
					<td>".$result['doc_name']."</td>
					<td>".$result['consult_fee']."</td>
					<td>".$result['hosp_charges']."</td>
					<td>".$result['total_amt']."</td>
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