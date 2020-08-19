<!DOCTYPE html>
    <?php
        include ("Header.php");
		
		include("Connect.php");
		
		$SerialNo = null;
	$TheaterName = null;
	$Address = null;
	$Movie = null;
	$Certificate = null;
	$Date = null;
	$Day = null;
	$StartingTime = null;
	$ScreenNo = null;
	$SeatNo = null;
	$TicketCost = null;
	$NetValue = null;
	$CGST = null;
	$SGST = null;
	$TicketNo = null;
	$InvoiceNo = null;

                    if (isset($_POST['BtnSearch']))
            {
	            $SerialNo = $_POST['Serial_No'];
				
	            $sql = "select * from ticket where Serial_No='$SerialNo'";

	            $result = $conn->query($sql);
			
	            if($result -> num_rows>0)
	            {
					
		            $row = $result->fetch_assoc();
	
		$SerialNo = $row['Serial_Number'];
	$TheaterName = $row['Theater_Name'];
	$Address = $row['Address'];
	$Movie = $row['Movie'];
	$Certificate = $row['Certificate'];
	$Date = $row['Date'];
	$Day = $row['Day'];
	$StartingTime = $row['Starting_Time'];
	$ScreenNo = $row['Screen_No'];
	$SeatNo = $row['Seat_No'];
	$TicketCost = $row['Ticket_Cost'];
	$NetValue = $row['Net_Value'];
	$CGST = $row['CGST'];
	$SGST = $row['SGST'];
	$TicketNo = $row['Ticket_No'];
	$InvoiceNo =$row['Invoice_No'];		             
					 
	            }
	        else
				
	    echo "<script>alert('No records found!');</script>";
		
            }
    $conn->close();
		
    ?>
        <html lang="en">
           <head>
                <title>Local Cinema | Cancel Ticket</title>
				
				<style>
			
			    h1.Style1{
	                margin-left:620px;
	                color:#D4E6F1;
                    margin-top:70px;
				}
				
	        </style>
				
            </head>
            <body>
	    <h1 class="Style1">Cancel Ticket</h1>

	    <!--Form Design-->
	    <form action="#" method="POST">
	 
	        <table width=100%>
	           <tr>
	              <td width=40% >
                        <label for="Serial_No">Serial No</label>
                  </td>
  	              <td width=32%>
                        <input type="Text" name="Serial_No" placeholder="Serial No.">   
                    </td>
					<td width=28%>
			                    <button type="submit" name="BtnSearch">Search</button>
			                </td>
				</tr>
					
			    <tr>
					<td class="form">
                        <label for="Theater_Name">Theater Name</label>
                    </td>
					<td class="form">
                        <input type="text" name="Theater_Name" placeholder="Theater Name">
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
  
                        <label for="Day">Day</label>
					</td>
                    <td class="form">					
				        <input type="text" name="Day"placeholder="Day">
				    </td>
					</tr>
				
			    <tr>
					<td class="form">
                        <label  for="Starting_Time">Starting Time</label>
					</td>
					<td class="form">
                        <input type="time" name="Starting_Time" placeholder="Starting_Time">
					</td>
				</tr>
                
                <tr>
					<td class="form">
                        <label for="Screen_No">Screen No</label>
					</td>
					<td class="form">
                       <input type="Text" name="Screen_No" placeholder="Screen No">
					</td>
				</tr>
					
				<tr>
                    <td class="form">
                        <label for="Seat_No">Seat No</label>
					</td>
					<td class="form">
                        <input type="Text" name="Seat_No" placeholder="Seat No">
					</td>
			    </tr>
                 
				<tr>
					<td class="form">
                        <label for="Ticket Cost">Ticket Cost</label>
                    </td>
					<td class="form">
                    <input type="Text" name="Ticket_Cost" placeholder="Ticket Cost">
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
                        <label for="Net_Value">Net Value</label>
					</td>
					<td class="form">
                        <input type="Text" name="Net_Value" placeholder="Net_Value">
					</td>
                </tr>
				
                <tr>
                    <td class="form">					
                        <label for="Ticket_No">TicketNo</label>
					</td>
					<td class="form">
                        <input type="Text" name="Ticket_No" placeholder="Ticket No">
                    </td>
			    </tr>
					
					
				<tr>
					<td class="form">
                        <label for="Invoice_No">Invoice No</label>
		            <td class="form">		
                        <input type="Text" name="Invoice_No" placeholder="Invoice No.">
                    </td>
                </tr>	

		    </table>	

  <input type="submit" value="Cancel Ticket" name="submit" style="margin-left:50%">
  
  
</form> 
</body>
</html>




<!------------------------------------------------------------------
