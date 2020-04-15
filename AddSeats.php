<?php
//------------- Generate Seat ID-------------

    include("Header.php");
	
    include("Connect.php");

        $sql ="select ST_ID from seats";

        $result = $conn->query($sql);
		
        if($result -> num_rows>0)
        {
			
	        while($row=$result->fetch_assoc()) //Associated Array
	    {
		        $stid = $row["ST_ID"];
	    }
	 
	        $stid = substr($stid,2,4);
	 
	        $stid = $stid + 1;
	 
	        $stid = "ST" . $stid;
        }
 
        else
        {
	        $stid = "ST" . "1001";
        }
?>
<!DOCTYPE html>

    <html>
	
	    <head>
		
		    <title>Local Cinema | Add Seats</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:620px;
	                color:#00356B;
                    margin-top:70px;
				}
				
	        </style>
			
		</head>
		
	    <body>
		
            <h1 class="Style1">Add Seats</h1>
			
			    <!--Form Design-->
				
                <form action="#" method="POST">
				
				    <table width=100%>
					
					    <tr>
						    <td width=33%>
                                <label for="ST_ID">ST_ID </label>
                            </td>
                            <td width=67%>							
                                <input type="text" name="ST_ID" placeholder="ST_ID" value="<?php echo $stid;?>" readonly>
							</td>
						</tr>
						
						<tr>
						    <td width=33%>
                                <label for="Seat_Number">Seat Number</label>
							</td>
							<td width=67%>
                                <input type="text" name="Seat_Number" placeholder="Seat Number">
                            </td>
						</tr>
						
						<tr>
						    <td width=33%>
                                <label for="Category">Category</label>
							</td>
						    <td width=67%>
                                <select name="Category">
                                <option value="Executive">Executive</option>
                                <option value="Premium">Premium</option>
								<option value="Basic">Basic</option>
                                </select>
							</td>
                        
						</tr>
						
                        <tr>
                            <td width=33%>	
                                <label for="Price">Price</label>
							</td>
							<td width=67%>
                                <input type="text" name="Price" placeholder="Price">
							</td>
						</tr>
						
						<tr>
						    <td width=33%>
                                <label for="Status">Status</label>
							</td>
							<td width=67%>
                                <select name="Status">
                                <option value="Available">Available</option>
                                <option value="Under Repair">Under Repair</option>
                                </select>
							</td>
						</tr>
						
					</table>
					
					<br><br>
					
                    <input type="submit" value="Cancel" style="margin-left:40%">
								
                    <input type="submit" value="Add New Seats" style="margin-right:30%">
					
				</form>

            </body>

		</html>	
						
  
  <!-------------------------------------------------------------------->

<?php

if(isset($_POST['submit']))
{
	include ('Connect.php');
	
	    $stid = $_POST['ST_ID'];
	    $SeatNumber = $_POST['Seat_Number'];
	    $Category = $_POST['Category'];
	    $Price = $_POST['Price'];
	    $Status = $_POST['Status'];
	
	    $sql = "INSERT INTO seats(ST_ID,Seat_Number,Category,Price,Status)VALUES('$stid','$SeatNumber','$Category','$Price','$Status')";
	
	

	    if ($conn->query($sql) === TRUE) {
			
		    echo "New Seat created successfully";
	    } 
	    else
		{
		    echo "Error: " . $sql . "<br>" . $conn->error;
	    }

	$conn->close();
}
?>
  