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
	<h2>Ticket List</h2><br>
	<input type="button" value="Home" id="btn" onclick="window.location.href='http://localhost:85/Homepage1.php'">

	<table>
		<tr>
			<th>Serial No</th>
			<th>Theater Name</th>
			<th>Address</th>
			<th>Movie</th>
			<th>Certificate</th>
			<th>Date</th>
			<th>Day</th>
			<th>Starting Time</th>
			<th>Screen No</th>
			<th>Seat No</th>
			<th>Ticket Cost</th>
			<th>CGST</th>
			<th>SGST</th>
			<th>Net Value</th>
			<th>Ticket No</th>
			<th>Invoice No</th>	
		</tr>
		<?php
		include("connect.php");

		$sql = "SELECT * FROM ticket";
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["SerialNo"]. "</td>";
				echo "<td>" . $row["TheaterName"]. "</td>";
				echo "<td>" . $row["Address"]. "</td>";
				echo "<td>" . $row["Movie"]. "</td>";
				echo "<td>" . $row["Certificate"]. "</td>";
				echo "<td>" . $row["Date"]. "</td>";
				echo "<td>" . $row["Day"]. "</td>";
				echo "<td>" . $row["StartingTime"]. "</td>";
				echo "<td>" . $row["ScreenNo"]. "</td>";
				echo "<td>" . $row["SeatNo"]. "</td>";
				echo "<td>" . $row["TicketCost"]. "</td>";
				echo "<td>" . $row["NetValue"]. "</td>";
				echo "<td>" . $row["CGST"]. "</td>";
				echo "<td>" . $row["SGST"]. "</td>";
				echo "<td>" . $row["TicketNo"]. "</td>";
				echo "<td>" . $row["InvoiceNo"]. "</td>";
				
				
				
				
			}
		} else {	
			echo "0 results";
		}
		$conn->close();
		?>
