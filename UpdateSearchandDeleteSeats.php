<?php include("Header.php");

    include("Connect.php");


        $stid = null;
        $SeatNumber = null;
        $Category = null;
        $Status = null;

    if (isset($_POST['BtnSearch']))
    {
	    $stid = $_POST['ST_ID'];
		
	    $sql = "select * from seats where ST_ID='$stid'";

	    $result = $conn->query($sql);
			
	    if($result -> num_rows>0)
	    {
		    $row = $result->fetch_assoc();
	
	            $stid = $row['ST_ID'];
                $SeatNumber = $row['Seat_Number'];
                $Category = $row['Category'];
                $Status = $row['Status'];

	    }
	    else
		    echo "<script>alert('No records found!');</script>";
    }

//-------------------Update Seats-------------------
	 
if(isset($_POST['Submit']))
{
			$sql = "UPDATE seats SET Seat_Number = ?, Category = ?,Status = ? where ST_ID = ?" ;

//echo $sql;

            $result = $conn->prepare($sql);
	        $result-> bind_param('ssss',$SeatNumber,$Category,$Status,$stid);

            $stid = $_POST['ST_ID'];
			
	        $SeatNumber = $_POST['Seat_Number'];
    $Category = $_POST['Category'];
    $Status = $_POST['Status'];
	
	
	//echo $mid;
	


if($result->execute()===true)
{
	echo "Details has been updated!";	
}
else
{
	echo $result->error;
}

    //}
$result->close();
}

$conn->close();

?>

<!DOCTYPE html>

    <html>
	
	    <head>
		
		    <title>Local Cinema | Update Search and Delete Seats</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:570px;
	                color:#D4E6F1;
					margin-top:70px;
				}
					
	        </style>
			
	    </head>
		
	    <body>
		
	        <h1 class="Style1">Update Search and Delete Seats</h1>
			      
            <!--Form Design-->
			
            <form action="#" method="POST">
			
                <table width=100%>
				
                    <tr>
                        <td width=40%>
                            <label for="ST_ID">ST_ID </label>
                        </td> 
                        <td width=28%> 
                            <input type="text" name="ST_ID" value="<?php echo $stid?>" placeholder="ST_ID">
                        </td>
                        <td width=32%>
			                <button type="submit" name="BtnSearch">Search</button>
			            </td>
                    </tr>
					
                    <tr>
                        <td width=37%>
                            <label for="Seat_Number">Seat Number</label>
                        </td>
                        <td>
                            <input type="text" name="Seat_Number" value="<?php echo $SeatNumber?>" placeholder="Seat Number">
                        </td width=28%>
                    </tr>
				
				    <tr>
						<td width=37%>
                            <label for="Category">Category</label>
						</td>
					    <td width=28%>
                            <select name="Category" value="<?php echo $Category?>">
                            <option value="Executive">Executive</option>
                            <option value="Premium">Premium</option>
						    <option value="Basic">Basic</option>
                            </select>
					    </td>
                        
					</tr>
				
				    
				
                    <tr>
				        <td width=37%>
                            <label for="Status">Status</label>
					    </td>
					    <td width=28%>
                            <select name="Status"  value="<?php echo $Status?>">
                            <option value="Available">Available</option>
                            <option value="Under Repair">Under Repair</option>
                            </select>
					    </td>
				    </tr>
				
                </table>
			
            <br><br>
  
            <input type="reset" name="Reset" value="Reset" style="margin-left:48%">
			
            <input type="submit" name="Submit" value="Update">
			
            <input type="submit" name="Submit" value="Delete">
        </form>
	</body>
</html>