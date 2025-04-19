<?php
include_once('connection.php');
$query="SELECT * from login";
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
	 <h2>Reception details</h2>
	<table>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>User Type</th>
			<th></th>
		</tr>
		<?php
		while($result=mysqli_fetch_array($data))
		{
			echo "<tr>
					<td>".$result['id']."</td>
					<td>".$result['username']."</td>
					<td>".$result['password']."</td>
					<td>".$result['user_type']."</td>
					<td><a href='update_recep_pros.php?id=$result[id]&name=$result[username]&pass=$result[password]&type=$result[user_type]'>Update</a></td>
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