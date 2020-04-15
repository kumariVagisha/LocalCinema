<!DOCTYPE html>
    <?php
        include ("Header.php");
    ?>
        <html lang="en">
           <head>
                <title>Local Cinema |Cancel Ticket</title>
		        <style>
                    td,th {width:200px}
                </style>
            </head>
            <body>
	    <h2 class="Style2">Cancel Ticket</h2>

	    <!--Form Design-->
	    <form action="#" method="POST">
	 
	        <table border="1">
	           <tr>
	              <td class="form">
                        <label for="SerialNo">SerialNo</label>
                  </td>
  	              <td class="form">
                        <input type="Text" name="SerialNo" placeholder="Serial No.">   
                    </td>
				</tr>
					
			    <tr>
					<td class="form">
                        <label for="TheaterName">Theater Name</label>
                    </td>
					<td class="form">
                        <input type="text" name="TheaterName" placeholder="Theater Name">
                    </td>
                </tr>

                <tr>					
                    <td class="form">
                        <label for="Address">Address</label>
                    </td>
					<td class="form">
                        <input type="text" name="Address" placeholder="Address">
					</td>
			    </tr>
				<tr>
					<td class="form">
                        <label for="Movie">Movie</label>
                    </td>
					<td class="form">
                        <input type="text" name="Movie" placeholder="Movie">
                    </td>
                </tr>
				
				<tr>
			<td class="form">
				<label for="Certifcate">Certificate</label>
			</td>
			<td class="form">
				<select name="Certificate">
					<option value="U">U</option>
					<option value="U/A">U/A</option>
					<option value="A">A</option>
					<option value="S">S</option>
				</select>
			</td>
		</tr>
	
					<td class="form">
  
                        <label for="Day">Day</label>
					</td>
                    <td class="form">					
				        <input type="text" name="Day"placeholder="Day">
				    </td>
					</tr>
					
				<tr>
					<td class="form">
  
                        <label for="Date">Date</label>
					</td>
                    <td class="form">					
				        <input type="Date" name="Date"placeholder="Date">
				    </td>
				</tr>
				
				
			    <tr>
					<td class="form">
                        <label  for="StartingTime">Starting Time</label>
					</td>
					<td class="form">
                        <input type="time" name="StartingTime" placeholder="StartingTime">
					</td>
				</tr>
                
                <tr>
					<td class="form">
                        <label for="ScreenNo">Screen No</label>
					</td>
					<td class="form">
                       <input type="Text" name="ScreenNo" placeholder="Screen No">
					</td>
				</tr>
					
				<tr>
                    <td class="form">
                        <label for="SeatNo.">Seat No</label>
					</td>
					<td class="form">
                        <input type="Text" name="SeatNo" placeholder="Seat No">
					</td>
			    </tr>
                 
				<tr>
					<td class="form">
                        <label for="Ticket Cost">Ticket Cost</label>
                    </td>
					<td class="form">
                    <input type="Text" name="TicketCost" placeholder="Ticket Cost">
                    </td>
                </tr>

			    <tr>
                    <td class="form">
  
                        <label for="CGST">CGST</label>
                    </td>
					<td class="form">
                        <input type="Text" name="CGST" placeholder="CGST">  
                    </td>
				</tr>
					
				<tr>
					<td class="form">
                        <label for="SGST">SGST</label>
					</td>
					<td class="form">
                        <input type="Text" name="SGST" placeholder="SGST">
					</td>
                </tr>
                
				<tr>
					<td class="form">
                        <label for="NetValue">Net Value</label>
					</td>
					<td class="form">
                        <input type="Text" name="NetValue" placeholder="NetValue">
					</td>
                </tr>
				
                <tr>
                    <td class="form">					
                        <label for="TicketNo">TicketNo</label>
					</td>
					<td class="form">
                        <input type="Text" name="TicketNo" placeholder="Ticket No.">
                    </td>
			    </tr>
					
					
				<tr>
					<td class="form">
                        <label for="InvoiceNo">Invoice No</label>
		            <td class="form">		
                        <input type="Text" name="InvoiceNo" placeholder="Invoice No.">
                    </td>
                </tr>	

		    </table>	
  
  
  <input type="submit" value="Reset" name="submit">
  <input type="submit" value="Cancel Ticket" name="submit">
  
  
</form> 
</body>
</html>




<!-------------------------------------------------------------------->

<?php

if(isset($_POST['submit']))
{
	include ('connect.php');
	
	$SerialNo = $_POST['SerialNo'];
	$TheaterName = $_POST['TheaterName'];
	$Address = $_POST['Address'];
	$Movie = $_POST['Movie'];
	$Certificate = $_POST['Certificate'];
	$Day = $_POST['Day'];
	$Date = $_POST['Date'];
	$StartingTime = $_POST['StartingTime'];
	$ScreenNo = $_POST['ScreenNo'];
	$SeatNo = $_POST['SeatNo'];
	$TicketCost = $_POST['TicketCost'];
	$NetValue = $_POST['NetValue'];
	$CGST = $_POST['CGST'];
	$SGST = $_POST['SGST'];
	$TicketNo = $_POST['TicketNo'];
	$InvoiceNo = $_POST['InvoiceNo'];
	
	
	$sql = "INSERT INTO ticketbooking(SerialNo) values('$SerialNo')";
		

	if ($conn->query($sql) === TRUE) {
		echo "New Ticket Booked successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>

</body>
</html>
