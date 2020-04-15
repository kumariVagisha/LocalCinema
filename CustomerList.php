<?php
include("Table.php");
?>

<html>
<head>
	

	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
			background-color:#939D79;
			color: white;
		}
	</style>
</head>
<body>
	<h2>Customer's List</h2><br>
	<input type="button" value="Home" id="btn" onclick="window.location.href='http://localhost:85/Homepage1.php'">

	<table>
		<tr>
			<th>Customer ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Mobile Number</th>
			<th>Email ID</th>
			<th>DOB</th>
			<th>Gender</th>
		</tr>
		<?php
		/*include("connect.php");

		$sql = "SELECT * FROM Customer";
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["cid"]. "</td>";
				echo "<td>" . $row["fname"]. "</td>";
				echo "<td>" . $row["lname"]. "</td>";
				echo "<td>" . $row["MobileNumber"]. "</td>";
				echo "<td>" . $row["EmailID"]. "</td>";
				echo "<td>" . $row["DOB"]. "</td>";
				echo "<td>" . $row["Gender"]. "</td>";
			}
		} else {
			echo "0 results";
		}
		$conn->close();*/
		?>
