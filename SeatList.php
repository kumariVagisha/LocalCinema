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
	<h2>Seat List</h2><br>
	<input type="button" value="Home" id="btn" onclick="window.location.href='http://localhost:85/Homepage1.php'">

	<table>
		<tr>
			<th>ST ID</th>
			<th>Seat Number</th>
			<th>Category</th>
			<th>Price</th>
			<th>Status</th>
		</tr>
		<?php
		include("connect.php");

		$sql = "SELECT * FROM seats";
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["stid"]. "</td>";
				echo "<td>" . $row["SeatNumber"]. "</td>";
				echo "<td>" . $row["Catogry"]. "</td>";
				echo "<td>" . $row["Price"]. "</td>";
				echo "<td>" . $row["Status"]. "</td>";
			}
		} else {
			echo "0 results";
		}
		$conn->close();
		?>
