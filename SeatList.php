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

		tr:nth-child(even){background-color: #f2f2f2}

		th {
			background-color:#505050;
			color: white;
		}
	</style>
</head>
<body>
	<h2>Seat's List</h2><br>
	<input type="button" value="Home" id="btn" onclick="window.location.href='http://localhost:85/Homepage1.php'">

	<table>
		<tr>
			<th>ST ID</th>
			<th>Seat Number</th>
			<th>Category</th>
			<th>Status</th>
		</tr>
		<?php
		include("connect.php");

		$sql = "SELECT * FROM seats";
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["ST_ID"]. "</td>";
				echo "<td>" . $row["Seat_Number"]. "</td>";
				echo "<td>" . $row["Category"]. "</td>";
				echo "<td>" . $row["Status"]. "</td>";
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