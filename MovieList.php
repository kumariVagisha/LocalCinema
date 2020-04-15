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
	<h2>Movie List</h2><br>
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
		include("connect.php");

		$sql = "SELECT * FROM Customer";
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["mid"]. "</td>";
				echo "<td>" . $row["Title"]. "</td>";
				echo "<td>" . $row["Genre"]. "</td>";
				echo "<td>" . $row["ReleasingDate"]. "</td>";
				echo "<td>" . $row["Language"]. "</td>";
				echo "<td>" . $row["RunningTime"]. "</td>";
				echo "<td>" . $row["Cast"]. "</td>";
				echo "<td>" . $row["Director"]. "</td>";
				echo "<td>" . $row["Producer"]. "</td>";
				echo "<td>" . $row["MusicDirector"]. "</td>";
				echo "<td>" . $row["ProductionHouse"]. "</td>";
				echo "<td>" . $row["Synopsis"]. "</td>";
				echo "<td>" . $row["Certificate"]. "</td>";
			    echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		$conn->close();
		?>
