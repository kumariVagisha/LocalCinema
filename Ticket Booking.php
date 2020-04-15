<!DOCTYPE html>
<?php
include ("Header.php");
?>
<html lang="en">
<head>
<title>Local Cinema | Ticket Cinema</title>
</head>
<body>
	<h2 class="Style2">Ticket Booking</h2>

	  <!--Form Design-->
	  <form action="#" method="POST">
	  
	  
  <label for="SerialNo">SerialNo</label>
  <input type="Text" name="SerialNo"><br><br>  
  

  <label for="Theater Name">Theater Name</label>
  <input type="text" name="Theater Name" placeholder="Theater Name">
 
  <label for="Address">Address</label>
  <input type="text" name="Address" placeholder="Address">
  <br><br>
  <label for="Movie">Movie</label>
  <input type="text" name="Movie" placeholder="Movie"><br><br>
  
  
  <label for="Certificate">Certificate</label>
  <input type="text" name="Certificate" placeholder="Certificate"><br><br>
  
  
  <label for="Date">Date</label>
  <input type="Date" name="Date"><br><br>
  
  
  <label  for="Time">Time</label>
  <input type="time" name="Time"><br><br>
  
  
  <label for="ScreenNo">Screen No</label>
  <input type="Text" name="ScreenNo"><br><br>  
  
  <label for="Seat No.">Seat No</label>
  <input type="Text" name="ScreenNo"><br><br>  
  
  <label for="Ticket Cost">Ticket Cost</label>
  <input type="Text" name="TicketCost"><br><br>  
  
  <label for="CGST">CGST</label>
  <input type="Text" name="CGST"><br><br>  
  
  <label for="SGST">SGST</label>
  <input type="Text" name="SGST"><br><br>  
  
  <label for="SGST">SGST</label>
  <input type="Text" name="SGST"><br><br>  
  
  <label for="TicketNo">TicketNo</label>
  <input type="Text" name="TicketNo"><br><br>  
  
  <label for="InvoiceNo">TicketNo</label>
  <input type="Text" name="TicketNo"><br><br>  
  
  <label for="SerialNo">SerialNo</label>
  <input type="Text" name="SerialNo"><br><br>  
  
  
  <input type="submit" value="Cancel" name="submit">
  <input type="submit" value="submit" name="submit">
  
  
</form> 
</body>
</html>




<!-------------------------------------------------------------------->

<?php

/*if(isset($_POST['submit']))
{
	include ('connect.php');
	
	$cid = $_POST['C_ID'];
	$fname = $_POST['First_Name'];
	$lname = $_POST['Last_Name'];
	$MobileNumber = $_POST['Mobile_Number'];
	$EmailID = $_POST['Email_ID'];
	$DOB = $_POST['DOB'];
	$Gender = $_POST['Gender'];
	
	$sql = "INSERT INTO customer(C_ID) values('$cid')";
	//$sql = "INSERT INTO customer(C_ID,First_Name,Last_Name,Mobile_Number,Email_ID,DOB,Gender,Age)VALUES('$eid','$fname','$lname','$MobileNumber','$EmailID','$DOB','$Gender')";
	

	if ($conn->query($sql) === TRUE) {
		echo "New Customer created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}*/
?>

</body>
</html>
