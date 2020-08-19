<!DOCTYPE html>

    <?php 
	    include ("Header.php");
	
	    include("Connect.php");

            $sql ="select Serial_No from ticket";

            $result = $conn->query($sql);
			
                if($result -> num_rows>0)
                {
	                while($row=$result->fetch_assoc()) //Associated Array
	            {
		            $SerialNo = $row["Serial_No"];
	            }
	 
	                $SerialNo = substr($SerialNo,2,4);
	 
	                $SerialNo = $SerialNo + 1;
	 
	                $SerialNo = "SR" . $SerialNo;
					
					
					if($SerialNo<10)
						
						        $SerialNo = "SR000" . $SerialNo;
						
					        elseif($SerialNo<100)
					
						        $SerialNo = "SR00" . $SerialNo;
								
								elseif($SerialNo<1000)
					
						        $SerialNo = "SR0" . $SerialNo;
								
								
					        else
						
						        $SerialNo = "SR0" . $SerialNo;
                }
 
                else
                {
	                $SerialNo = "SR" . "0001";
                }

        $sql ="select Ticket_No from ticket";

        $result = $conn->query($sql);
            if($result -> num_rows>0)
            {
	        while($row=$result->fetch_assoc()) //Associated Array
	        {
		        $TicketNo = $row["Ticket_No"];
	        }
	 
	            $TicketNo = substr($TicketNo,2,4);
	 
	            $TicketNo = $TicketNo + 1;
	 
	            $TicketNo = "TN" . $TicketNo;
				
				if($TicketNo<10)
						
						        $TicketNo = "TN000" . $TicketNo;
						
					        elseif($TicketNo<100)
					
						        $TicketNo = "TN00" . $TicketNo;
								
					        elseif($TicketNo<1000)
						
						        $TicketNo = "TN0" . $TicketNo;
				            else
								$TicketNo = "TN" . $TicketNo;
            }
 
            else
            {
	            $TicketNo = "TN" . "0001";
            }
	        
			$sql ="select Invoice_No from ticket";

        $result = $conn->query($sql);
            if($result -> num_rows>0)
            {
	        while($row=$result->fetch_assoc()) //Associated Array
	        {
		        $InvoiceNo = $row["Invoice_No"];
	        }
	 
	            $InvoiceNo = substr($InvoiceNo,2,4);
	 
	            $InvoiceNo = $InvoiceNo + 1;
	 
	            $InvoiceNo = "IN" . $InvoiceNo;
				
				if($InvoiceNo<10)
						
						        $InvoiceNo = "IN000" . $InvoiceNo;
						
					        elseif($InvoiceNo<100)
					
						        $InvoiceNo = "IN00" . $InvoiceNo;
								
					        elseif($InvoiceNo<1000)
						
						        $InvoiceNo = "IN0" . $InvoiceNo;
				            else
								$InvoiceNo = "IN" . $InvoiceNo;
				
            }
 
            else
            {
	            $InvoiceNo = "IN" . "0001";
            }
	
			
	?>

        <html lang="en">
		
           <head>
		   
                <title>Local Cinema | Ticket Booking</title>
				
				<style>
			
			    h1.Style1{
	                margin-left:780px;
	                color:#D4E6F1;
                    margin-top:70px;
				}
				
	        </style>
				
		    </head>
			
            <body>
			
	            <h1 class="Style1">Ticket Booking</h1>

	                <!--Form Design-->
					
	                    <form action="#" method="POST">
	 
	                        <table width=100%>
								<tr>
	                                <td width=40%>
                                        <label for="Customer_Name">Customer Name</label>
                                    </td>
  	                                <td width=60%>
                                        <input type="Text" name="Customer_Name" placeholder="Customer Name">   
                                    </td>
				                </tr>
								<tr>
	                                <td width=40%>
                                        <label for="No_of_Tickets">No of Tickets</label>
                                    <td width=60%>
										<select name="Certificate">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</td>
				                </tr>
							
	                            <tr>
	                                <td width=40%>
                                        <label for="Serial_No">Serial No</label>
                                    </td>
  	                                <td width=60%>
                                        <input type="Text" name="Serial_No" value="<?php echo $SerialNo;?>" readonly>   
                                    </td>
				                </tr>
					
			                    <tr>
									<td width=40%>
										<label for="Theater_Name">Theater Name</label>
									</td>
									<td width=60%>
										<input type="text" name="Theater_Name" placeholder="Theater Name">
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
				        <input type="Text" name="Date"placeholder="Date" value="<?php echo date('m/d/Y')?>" readonly>
				    </td>
				</tr>
			    <tr>
					<td width=40%>
  
                        <label for="Day">Day</label>
					</td>
                    <td width=60%>					
				        <input type="text" name="Day" placeholder="Day" value="<?php echo date('l');?>"readonly>
				    </td>
					</tr>
			    <tr>
					<td width=40%>
                        <label  for="Starting_Time">Starting Time</label>
					</td>
					<td width=60%>
                        <input type="time" name="Starting_Time" placeholder="StartingTime">
					</td>
				</tr>
                
                <tr>
					<td width=40%>
                        <label for="Screen_No">Screen No</label>
					</td>
					<td width=60%>
                       <input type="Text" name="Screen_No" placeholder="Screen No">
					</td>
				</tr>
					
				<tr>
                    <td width=40%>
                        <label for="Seat_No">Seat No</label>
					</td>
					<td width=60%>
                        <input type="Text" name="Seat_No" placeholder="Seat No">
					</td>
			    </tr>
                 
				<tr>
					<td width=40%>
                        <label for="Ticket_Cost">Ticket Cost</label>
                    </td>
					<td width=60%>
                    <input type="Text" name="Ticket_Cost" placeholder="Ticket Cost">
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
                        <label for="Net_Value">Net Value</label>
					</td>
					<td width=60%>
                        <input type="Text" name="Net_Value" placeholder="NetValue">
					</td>
                </tr>
				
                <tr>
                    <td width=40%>					
                        <label for="Ticket_No">Ticket No</label>
					</td>
					<td width=60%>
                        <input type="Text" name="Ticket_No" value="<?php echo $TicketNo;?>" readonly>
                    </td>
			    </tr>
					
					
				<tr>
					<td width=40%>
                        <label for="Invoice_No">Invoice No</label>
		            <td width=60%>		
                        <input type="Text" name="Invoice_No" value="<?php echo $InvoiceNo;?>" readonly>
                    </td>
                </tr>	

		    </table>	
  
            <input type="reset" value="Reset" name="Reset" style="margin-left:54%">
  
            <input type="submit" value="Submit" name="submit">
  
  
        </form> 
		
    </body>
	
</html>




<!-------------------------------------------------------------------->

<?php

if(isset($_POST['submit']))
{
	include ('connect.php');
	
	$SerialNo = $_POST['Serial_No'];
	$TheaterName = $_POST['Theater_Name'];
	$Address = $_POST['Address'];
	$Movie = $_POST['Movie'];
	$Certificate = $_POST['Certificate'];
	$Date = $_POST['Date'];
	$Day = $_POST['Day'];
	$StartingTime = $_POST['Starting_Time'];
	$ScreenNo = $_POST['Screen_No'];
	$SeatNo = $_POST['Seat_No'];
	$TicketCost = $_POST['Ticket_Cost'];
	$CGST = $_POST['CGST'];
	$SGST = $_POST['SGST'];
	$NetValue = $_POST['Net_Value'];
	$TicketNo = $_POST['Ticket_No'];
	$InvoiceNo = $_POST['Invoice_No'];
		
	$sql = "INSERT INTO ticket(Serial_No,Theater_Name,Address,Movie,Certificate,Date,Day,Starting_Time,Screen_No,Seat_No,Ticket_Cost,CGST,SGST,Net_Value,Ticket_No,Invoice_No) values('$SerialNo','$TheaterName','$Address','$Movie','$Certificate','$Date','$Day','$StartingTime','$ScreenNo','$SeatNo','$TicketCost','$CGST','$SGST','$NetValue','$TicketNo','$InvoiceNo')";
		

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
