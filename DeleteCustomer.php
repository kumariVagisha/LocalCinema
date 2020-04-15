<?php
include("Header.php")
?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/css2.css">
	<link rel="icon" href="logo.jpg" type="image/icon type">

	<style>
		/*Styling table*/
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
				background-color: #73264d;
				color: white;
			}
	</style>
</head>
<body>
	<br>

	<form method="POST">
		<input align="center" type="text" name="cid" placeholder="Enter Customer ID to delete records"><br>
		<input type="submit" name="search" value="search" >
		<input type="button" value="Home" id="btn" onclick="window.location.href='http://localhost:85/Homepage1.php'">


	</form><br><br>
	<?php
	if(isset($_POST["search"]))

	{
		$res=mysqli_query($con,"select * from tblCustomer where cid='$_POST[cid]'");
	  //"<table align="center" border="1px" style="width:400px; line-height:20px;" >";
		echo "<table>";
		echo "<tr>";
		echo "<th>"; echo "M_ID"; echo"</th>";
		echo "<th>"; echo "Title"; echo"</th>";
		echo "<th>"; echo "Genre"; echo"</th>";
		echo "<th>"; echo "Releasing_Date"; echo"</th>";
		echo "<th>"; echo "Language"; echo"</th>";
		echo "<th>"; echo "Running_Time"; echo"</th>";
		echo "<th>"; echo "Trailer"; echo"</th>";
		echo "<th>"; echo "Cast"; echo"</th>";
		echo "<th>"; echo "Director"; echo"</th>";
		echo "<th>"; echo "Producer"; echo"</th>";
		echo "<th>"; echo "Music_Director"; echo"</th>";
		echo "<th>"; echo "Production_House"; echo"</th>";
		echo "<th>"; echo "Synopsis"; echo"</th>";
		echo "<th>"; echo "Certificate"; echo"</th>";
        echo "</tr>";

		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td>"; echo $row["cid"]; echo "</td>";
			echo "<td>"; echo $row["name"]; echo "</td>";
			echo "<td>"; echo $row["dob"]; echo "</td>";
			echo "<td>"; echo $row["height"]; echo "</td>";
			echo "<td>"; echo $row["mobile"]; echo "</td>";
			echo "<td>"; echo $row["email"]; echo "</td>";
			echo "<td>"; echo $row["designer"]; echo "</td>";
			echo "<td>"; echo $row["city"]; echo "</td>";
			echo "<td>"; echo $row["postal"]; echo "</td>";
			echo "<td>"; echo $row["slist"]; echo "</td>";
			echo "<td>"; echo $row["info"]; echo "</td>";


		//echo "<td> <a href ='editStaffRecord.php?SID=".$row["sid"]."'> edit </a></td>";
			echo "<td> <a href='deleteC.php?CID=".$row["cid"]."'>delete </a></td>";
			echo "</tr>";
		}


		echo "</table>";

	}
	?>
	<br><br>

	<table align="center" style="width:400px; line-height:20px;" >
		<!--<form   method="POST" action="DemoSubmit.php">-->
			<tr>
				<th colspan="30"><h1>Customer  details</h1></th>
			</tr>
			<tr>
				<th>cid</th>
				<th>name</th>
				<th>dob</th>
				<th>height</th>
				<th>mobile</th>
				<th>email</th> 
				<th>designer</th>
				<th>city</th>
				<th>postal</th>
				<th>slist</th> 
				<th>info</th>


			</tr>

			<?php
			$con =  new mysqli("localhost","root","iza@123","dbBMS");
			if ($con->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			else{

			}

			$sql="select * from tblCustomer";
			$result=$con-> query ($sql);
			if($result->num_rows > 0){
				while($row =$result->fetch_assoc())
	  //while($row=mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>"; echo $row["cid"]; echo "</td>";
					echo "<td>"; echo $row["name"]; echo "</td>";
					echo "<td>"; echo $row["dob"]; echo "</td>";
					echo "<td>"; echo $row["height"]; echo "</td>";
					echo "<td>"; echo $row["mobile"]; echo "</td>";
					echo "<td>"; echo $row["email"]; echo "</td>";
					echo "<td>"; echo $row["designer"]; echo "</td>";
					echo "<td>"; echo $row["city"]; echo "</td>";
					echo "<td>"; echo $row["postal"]; echo "</td>";
					echo "<td>"; echo $row["slist"]; echo "</td>";
					echo "<td>"; echo $row["info"]; echo "</td>";

		//echo "<td> <a href ='editStaffRecord.php?SID=".$row["sid"]."'> edit </a></td>";
					echo "<td> <a href='deleteC.php?CID=".$row["cid"]."'>delete </a></td>";
					echo "</tr>";
				}
				echo "</table>";
			}

			?>
		</body>
		</html>





