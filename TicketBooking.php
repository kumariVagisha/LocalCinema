<!DOCTYPE html>

    <?php include ("Header.php");?>

        <html lang="en">
		
           <head>
		   
                <title>Local Cinema | Ticket Booking</title>
				
		    </head>
			
            <body>
			
	            <h1 class="Style1">Ticket Booking</h1>

	                <!--Form Design-->
					
	                    <form action="#" method="POST">
	 
	                        <table width=100%>
							
	                            <tr>
	                                <td width=40%>
                        <label for="SerialNo">SerialNo</label>
                  </td>
  	              <td width=60%>
                        <input type="Text" name="SerialNo" placeholder="Serial No.">   
                    </td>
				</tr>
					
			    <tr>
					<td width=40%>
                        <label for="TheaterName">Theater Name</label>
                    </td>
					<td width=60%>
                        <input type="text" name="TheaterName" placeholder="Theater Name">
                    </td>
                </tr>

                <tr>					
                    <td width=40%>
                        <label for="Address">Address</label>
                    </td>
					<td width=60%>
                        <input type="text" name="Address" placeholder="Address">
					</td>
			    </tr>
				<tr>
					<td width=40%>
                        <label for="Movie">Movie</label>
                    </td>
					<td width=60%>
                        <input type="text" name="Movie" placeholder="Movie">
                    </td>
                </tr>
				
				<tr>
			<td width=40%>
				<label for="Certifcate">Certificate</label>
			</td>
			<td width=60%>
				<select name="Certificate">
					<option value="U">U</option>
					<option value="U/A">U/A</option>
					<option value="A">A</option>
					<option value="S">S</option>
				</select>
			</td>
		</tr>		
				<tr>
					<td width=40%>
  
                        <label for="Date">Date</label>
					</td>
                    <td width=60%>					
				        <input type="Date" name="Date"placeholder="Date">
				    </td>
				</tr>
			    <tr>
					<td width=40%>
  
                        <label for="Day">Day</label>
					</td>
                    <td width=60%>					
				        <input type="text" name="Day"placeholder="Day">
				    </td>
					</tr>
			    <tr>
					<td width=40%>
                        <label  for="StartingTime">Starting Time</label>
					</td>
					<td width=60%>
                        <input type="time" name="StartingTime" placeholder="StartingTime">
					</td>
				</tr>
                
                <tr>
					<td width=40%>
                        <label for="ScreenNo">Screen No</label>
					</td>
					<td width=60%>
                       <input type="Text" name="ScreenNo" placeholder="Screen No">
					</td>
				</tr>
					
				<tr>
                    <td width=40%>
                        <label for="SeatNo.">Seat No</label>
					</td>
					<td width=60%>
                        <input type="Text" name="SeatNo" placeholder="Seat No">
					</td>
			    </tr>
                 
				<tr>
					<td width=40%>
                        <label for="Ticket Cost">Ticket Cost</label>
                    </td>
					<td width=60%>
                    <input type="Text" name="TicketCost" placeholder="Ticket Cost">
                    </td>
                </tr>

			    <tr>
                    <td width=40%>
  
                        <label for="CGST">CGST</label>
                    </td>
					<td width=60%>
                        <input type="Text" name="CGST" placeholder="CGST">  
                    </td>
				</tr>
					
				<tr>
					<td width=40%>
                        <label for="SGST">SGST</label>
					</td>
					<td width=60%>
                        <input type="Text" name="SGST" placeholder="SGST">
					</td>
                </tr>
                
				<tr>
					<td width=40%>
                        <label for="NetValue">Net Value</label>
					</td>
					<td width=60%>
                        <input type="Text" name="NetValue" placeholder="NetValue">
					</td>
                </tr>
				
                <tr>
                    <td width=40%>					
                        <label for="TicketNo">Ticket No</label>
					</td>
					<td width=60%>
                        <input type="Text" name="TicketNo" placeholder="Ticket No.">
                    </td>
			    </tr>
					
					
				<tr>
					<td width=40%>
                        <label for="InvoiceNo">Invoice No</label>
		            <td width=60%>		
                        <input type="Text" name="InvoiceNo" placeholder="Invoice No.">
                    </td>
                </tr>	

		    </table>	
  
            <input type="submit" value="Cancel" name="submit" "margin-left:30%">
  
            <input type="submit" value="submit" name="submit" "margin-right:30%">
  
  
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
	$Date = $_POST['Date'];
	$Day = $_POST['Day'];
	$StartingTime = $_POST['StartingTime'];
	$ScreenNo = $_POST['ScreenNo'];
	$SeatNo = $_POST['SeatNo'];
	$TicketCost = $_POST['TicketCost'];
	$NetValue = $_POST['NetValue'];
	$CGST = $_POST['CGST'];
	$SGST = $_POST['SGST'];
	$TicketNo = $_POST['TicketNo'];
	$InvoiceNo = $_POST['InvoiceNo'];
		
	$sql = "INSERT INTO ticket(SerialNo) values('$SerialNo')";
		

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
