<?php 

include("Header.php");

include("Connect.php");


$cid= null;
$FirstName = null;
$LastName = null;
$MobileNumber = null;
$EmailID = null;
$DOB = null;
$Gender = null;

if (isset($_POST['BtnSearch']))
{
	$cid = $_POST['C_ID'];
	$sql = "select * from customer where C_ID='$cid'";

	$result = $conn->query($sql);
			
	if($result -> num_rows>0)
	{
		$row = $result->fetch_assoc();
	
		$FirstName = $row['First_Name'];
		$LastName = $row['Last_Name'];
		$MobileNumber = $row['Mobile_Number'];
		$EmailID = $row['Email_ID'];
		$DOB = $row['DOB'];
		$Gender = $row['Gender'];
	}
	else
		echo "<script>alert('No records found!');</script>";
}
$conn->close();

?>
<!DOCTYPE html>
    <html>
	    <head>
		
		    <title>Local Cinema | Update Search and Delete Customer</title>

	    </head>
		
	    <body>
		
			<h1 class="style1">Update Search and Delete Customer</h1>
		      
                <!--Form Design-->
				
                <form action="#" method="POST">

                    <table width=100%>
					
	                    <tr>
		                    <td width=40%>
			                    <label for="C_ID">C_ID </label>	
		                    </td>			
		                    <td width=32%>
			                    <input type="text" name="C_ID" value="<?php echo $cid?>" placeholder="C_ID">
							</td>	
			                <td width=28%>
			                    <button type="submit" name="BtnSearch">Search</button>
			                </td>
	                    </tr>
						
	                    <tr>
		                    <td width=40%>
			                    <label for="First_Name">First Name</label>
		                    </td>
		                    <td width=32%>
			                    <input type="text" name="First_Name" value="<?php echo $FirstName?>" placeholder="First Name">
		                    </td>
	                    </tr>
	                    <tr>
		                    <td width=40%>
			                    <label for="Last_Name">Last Name</label>
		                    </td>
		                    <td width=32%>
			                    <input type="text" name="Last_Name" value="<?php echo $LastName?>" placeholder="Last Name">				
						</tr>
  
                        <tr>
                            <td width=40%>
                                <label for="Mobile_Number">Mobile Number</label>
                            </td>
                            <td width=32%>
                                <input type="text" name="Mobile_Number" value="<?php echo $MobileNumber?>" placeholder="Mobile Number">
                            </td>
                        </tr>
  
                        <tr>
                            <td width=40%>
                                <label for="Email_ID">Email ID</label>
                            </td>
                            <td width=32%>
                                <input type="text" name="Email_ID" value="<?php echo $EmailID?>" placeholder="Email ID">
                            </td>
                        </tr>
                        <tr>
                            <td width=40%>
                                <label  for="DOB">DOB</label>
                            </td>
                            <td width=32%>
                                <input type="date" name="DOB" value="<?php echo $DOB?>">
                            </td>
                        </tr>
						
                        <tr>
                            <td width=40%>
                                <label for="Gender">Gender</label>
                            </td>
                            <td width=32%> 
                                <input type="radio" name="Gender" value="Male" checked value="<?php echo $Gender?>" >Male
                                <input type="radio" name="Gender" value="Female">Female 
                            </td>
                        </tr>

                    </table>
					
                    <input type="submit" value="Cancel" "margin-left=30%">
 
                    <input type="submit" value="Create New Customer" "margin-right=30%">
 
                </form> 
        </body>
    </html>