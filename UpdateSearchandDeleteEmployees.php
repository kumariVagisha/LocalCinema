<?php include("Header.php");

    include("Connect.php");


        $eid = null;
        $FirstName = null;
        $LastName = null;
        $MobileNumber = null;
        $EmailID = null;
        $DOB = null;
        $Gender = null;
        $Designation = null;
        $Qualification = null;
        $Experience = null;
        $DateofHire = null;
        $PayRate = null;


            if (isset($_POST['BtnSearch']))
            {
	            $eid = $_POST['E_ID'];
	            $sql = "select * from employees where E_ID='$eid'";

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
		            $Designation = $row['Designation'];
                    $Qualification = $row['Qualification'];
                    $DateofHire = $row['Date_of_Hire'];
                    $PayRate = $row['Pay_Rate'];

	            }
	            else
		            echo "<script>alert('No records found!');</script>";
            }
			
			 //-------------------Update Employees-------------------
	 
if(isset($_POST['Submit']))
{
		
	$sql = "UPDATE employees SET First_Name = ?, Last_Name = ?, Mobile_Number = ?, Email_ID = ?, DOB = ?, Gender= ?, Designation = ?, Qualification = ?, Date_of_Hire = ?, Pay_Rate = ? where E_ID = ?" ;

//echo $sql;

    $result = $conn->prepare($sql);
	$result-> bind_param('sssssssssss',$FirstName,$LastName,$MobileNumber,$EmailID,$DOB,$Gender,$Designation,$Qualification,$DateofHire,$PayRate,$eid);

//$result-> bind_param('ssssssssssssss', $Title, $ReleasingDate, $Genre, $Language, $RunningTime, $Cast, $Crew, $Director, $Producer, $MusicDirector, $ProductionHouse, $Synopsis, $Certificate, $mid);

    $eid = $_POST['E_ID'];
    $FirstName = $_POST['First_Name'];
    $LastName = $_POST['Last_Name'];
    $MobileNumber = $_POST['Mobile_Number'];
    $EmailID = $_POST['Email_ID'];
    $DOB = $_POST['DOB'];
    $Gender = $_POST['Gender'];
    $Designation = $_POST['Designation'];
    $Qualification = $_POST['Qualification'];
    $DateofHire = $_POST['Date_of_Hire'];
    $PayRate = $_POST['Pay_Rate'];

	
	
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

		    <title>Local Cinema | Update Search and Delete Employees</title>
		
		    <style>
			
			    h1.Style1{
	                margin-left:570px;
	                color:#D4E6F1;
                    margin-top:70px;
				}
				
	        </style>

	    </head>
	    <body>

		    <h1 class="Style1">Update Search and Delete Employees</h1>

                <!--Form Design-->
				
                <form action="#" method="POST">

                    <h2>Personal Details</h2>

                        <table width=100%>
						
						    <tr>
                                <td width=40%>
                                    <label for="E_ID">E_ID </label>
                                </td>
								<td width=32%>
                                    <input type="text" name="E_ID"  value="<?php echo $eid?>" placeholder="E_ID">
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
                                    <input type="text" name="First_Name"  value="<?php echo $FirstName?>" placeholder="First Name">
                                </td>
							</tr>
							
							<tr>
							    <td width=40%>
                                    <label for="Last_Name">Last Name</label>
								</td>
								<td width=32%>
                                    <input type="text" name="Last_Name"  value="<?php echo $LastName?>" placeholder="Last Name">
                                </td>
							</tr>
							
							<tr>
							    <td width=40%>
                                    <label for="Mobile_Number">Mobile Number</label>
								</td>
								<td width=32%>
                                    <input type="text" name="Mobile_Number"  value="<?php echo $MobileNumber?>" placeholder="Mobile Number">
                                </td>
							</tr>
							
							<tr> 
							    <td width=40%>
                                    <label for="Email_ID">Email ID</label>
								</td>
								<td width=32%>
                                    <input type="email" name="Email_ID"  value="<?php echo $EmailID?>" placeholder="Email ID">
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
                                    <input type="radio" name="Gender" value="Male" value="<?php echo $Gender?>" checked>Male
									
                                    <input type="radio" name="Gender" value="Female">Female
									
								</td>
                            </tr>
		
		                </table>
                            								
                    <h2>Advanced Details</h2>

                        <table width=100%>
						
						<tr>
						    <td width=38%>
                                <label for="Designation">Designation</label>
							</td>
							<td width=62%>
                                <input type="text" name="Designation"  value="<?php echo $Designation?>" placeholder="Designation">
                            </td>
						</tr>
						
						<tr>
						    <td width=38%>
                                <label for="Qualification">Qualification</label>
							</td>
							<td width=62%>
                                <input type="text" name="Qualification"  value="<?php echo $Qualification?>" placeholder="Qualification">
                            </td>
						</tr>
						
						<tr>
						    <td width=38%>
                                <label for="Date_of_Hire">Date of Hire</label>
							</td>
							<td width=62%>
                                <input type="text" name="Date_of_Hire" value="<?php echo $DateofHire?>" placeholder="Date of Hire">
                            </td>
						</tr>
						
						<tr>
						    <td width=38%>
                                <label for="Pay_Rate">Pay Rate</label>
							</td>
							<td width=62%>
                                <input type="text" name="Pay_Rate"  value="<?php echo $PayRate?>" placeholder="Pay Rate">
                            </td>
							
					</table>
  
                    <input type="reset" value="Reset" name="Reset" style="margin-left=40%">
  
                    <input type="submit" value="Update Details" name="Submit">
  
                    <input type="submit" value="Delete" name="Submit">
  
  
            </form> 
        </body>
    </html>
		
