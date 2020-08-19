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
			
			//-------------------Update Customers-------------------
	 
if(isset($_POST['Submit']))
{
			$sql = "UPDATE customer SET First_Name = ?, Last_Name = ?,Mobile_Number = ?,Email_ID = ?,DOB = ?,Gender = ? where C_ID = ?" ;

    $result = $conn->prepare($sql);
	$result-> bind_param('sssssss',$FirstName,$LastName,$MobileNumber,$EmailID,$DOB,$Gender,$cid);

    $cid = $_POST['C_ID'];
    $FirstName = $_POST['First_Name'];
    $LastName = $_POST['Last_Name'];
    $MobileNumber = $_POST['Mobile_Number'];
    $EmailID = $_POST['Email_ID'];
    $DOB = $_POST['DOB'];
	$Gender = $_POST['Gender'];
	
	//echo $cid;
	


if($result->execute()===true)
{
	echo "Update Successful!";	
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
		
		    <title>Local Cinema | Update Search and Delete Customer</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:580px;
	                color:#D4E6F1;
                    margin-top:70px;
				}
				
	        </style>

	    </head>
		
	    <body>
		
			<h1 class="Style1">Update Search and Delete Customer</h1>
		      
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
                                <input type="email" name="Email_ID" value="<?php echo $EmailID?>" placeholder="Email ID">
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
                                <input type="radio" name="Gender" value="Male" value="<?php echo $Gender?>" >Male
                                <input type="radio" name="Gender" value="Female">Female 
                            </td>
                        </tr>

                    </table>
					<br><br>
					
                    <input type="reset" value="Reset" name="Reset" style="margin-left:47%">
 
                    <input type="submit" value="Update Details" name="Submit">
					
					<input type="submit" value="Delete" name="Submit">
 
                </form> 
        </body>
    </html>