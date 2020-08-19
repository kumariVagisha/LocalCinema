<!--php-->

<?php include("Header.php");

include("Connect.php");

$sid = null;

if (isset($_POST['BtnSearch']))
{
	$stid = $_POST['S_ID'];
	$sql = "select * from screens where S_ID='$sid'";

	$result = $conn->query($sql);
			
	if($result -> num_rows>0)
	{
		$row = $result->fetch_assoc();
	
	        $sid = $row['S_ID'];
            
	}
	else
		echo "<script>alert('No records found!');</script>";
}

if(isset($_POST['Submit']))
{
		
	$sql = "UPDATE screens SET  where S_ID = ?" ;



    $result = $conn->prepare($sql);
	$result-> bind_param('s',$sid);

    $stid = $_POST['ST_ID'];
	$SeatNumber = $_POST['Seat_Number'];
    $Category = $_POST['Category'];
    $Price = $_POST['Price'];
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
		
	        <title>Local Cinema | Update Search and Delete Screens</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:570px;
	                color:#D4E6F1;
                    margin-top:70px;
				}
				
	        </style>
			
	    </head>
		
	<body>
	
			<h1 class="Style1">Update Search and Delete Screens</h1>

                <!--Form Design-->
				
                <form>
				
				    <table width=100%>
				
				        <tr>
				            <td width=37%>
                                <label for="S_ID">S_ID </label>
				            </td>
				            <td width=28%>
                                <input type="text" name="S_ID" placeholder="S_ID">
                            </td>
				            <td width=35%>
                                <button type="submit" name="BtnSearch">Search</button>
                            </td>
				        </tr>
					
			        </table>
					
                    <br><br>
					
                    <input type="reset" name="Reset" value="Reset" style="margin-left:45%">
					
                    <input type="submit" name="Submit" value="Update Details">
					
                    <input type="submit" name="Submit" value="Delete">
