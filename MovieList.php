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
	<h2 class="Style1">Movie's List</h2><br>
	<input type="button" value="Home" id="btn" onclick="window.location.href='http://localhost:85/Homepage1.php'">

	<table>
		<tr>
			<th>Movie ID</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Realising Date</th>
			<th>Languages</th>
			<th>Running Time</th>
			<th>Cast</th>
			<th>Director</th>
			<th>Producer</th>
			<th>Music Director</th>
			<th>Production House</th>
			<th>Synopsis</th>
			<th>Certificate</th>
		</tr>
		<?php
		include("Connect.php");

		$sql = "SELECT * FROM movies";
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["M_ID"]. "</td>";
				echo "<td>" . $row["Title"]. "</td>";
				echo "<td>" . $row["Genre"]. "</td>";
				echo "<td>" . $row["Releasing_Date"]. "</td>";
				echo "<td>" . $row["Language"]. "</td>";
				echo "<td>" . $row["Running_Time"]. "</td>";
				echo "<td>" . $row["Cast"]. "</td>";
				echo "<td>" . $row["Director"]. "</td>";
				echo "<td>" . $row["Producer"]. "</td>";
				echo "<td>" . $row["Music_Director"]. "</td>";
				echo "<td>" . $row["Production_House"]. "</td>";
				echo "<td>" . $row["Synopsis"]. "</td>";
				echo "<td>" . $row["Certificate"]. "</td>";
			    echo "</tr>";
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
	
