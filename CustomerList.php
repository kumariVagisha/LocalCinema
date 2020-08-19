<?php
include("TableHeader.php");
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

		tr:nth-child(even){
			background-color:#f2f2f2;
			color: black
		}
		tr:nth-child(odd){color: white}

		th {
			background-color:#505050;
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
		include("connect.php");

		$sql = "SELECT * FROM customer";
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["C_ID"]. "</td>";
				echo "<td>" . $row["First_Name"]. "</td>";
				echo "<td>" . $row["Last_Name"]. "</td>";
				echo "<td>" . $row["Mobile_Number"]. "</td>";
				echo "<td>" . $row["Email_ID"]. "</td>";
				echo "<td>" . $row["DOB"]. "</td>";
				echo "<td>" . $row["Gender"]. "</td>";
			}
		} else {
			echo "0 results";
		}
		$conn->close();
		?>
		
		</table>
		
		<button onclick="myFunction()">Print this page</button>
		
		<script>
		function myFunction() {
			window.print();
		}
	</script>
	
	</body>
</html>
		
