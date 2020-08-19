<?php

    //------------- Generate Employee ID-------------

    include("Header.php");
	
	    $eid = null;
		
		function GenerateID() 
		{
	
            include("Connect.php");
			
			$sql ="select E_ID from employees where  year(Date_Added) = year(curdate())";

            $result = $conn->query($sql);
	
            if($result -> num_rows>0)
			{
			
			//This loop will help us in fetching the last id

	        while($row=$result->fetch_assoc()) //Associated Array
            {		
			
		        $eid = $row["E_ID"];
				
			}
	 
	            $eid = substr($eid,1,7);
	 
	            $eid = $eid + 1;
	 
	            $eid = "E" . $eid;
				
        }
 
        else
			
        {	
	        $eid = "E" . date('Y') . "001";
        }
		
	    $conn->close();
		
					return $eid;
			
		    }
			
	       
		
		$eid = GenerateID();
		
?>

<!DOCTYPE html>

    <html>
	
	    <head>
		
	        <title>Local Cinema | Add Employees </title>
			
			<style>
			
			    h1.Style1{
	                margin-left:620px;
	                color:#D4E6F1;
                    margin-top:70px;
				}
				
	        </style>
			
	    </head>
		
	    <body>
	 
	        <h1 class="Style1">Add Employees</h1>
			
                <!--Form Design-->
			
                <form action="#" method="POST">
			
                    <h2>Personal Details</h2>
					
	                    <table width=100%>
						
	                        <tr>
						
						        <td width=40%>
							
                                    <label for="E_ID">E_ID</label>
								
							    </td>
							
							    <td width=60%>
							
                                    <input type="text" name="E_ID" id="E_ID" placeholder="E_ID" value="<?php echo $eid;?>" readonly>
								
							    </td>
							
						    </tr>
						
						    <tr>
						
							    <td width=40%>
							
                                    <label for="First_Name">First Name</label>
								
							    </td>
							
							    <td width=60%>
							
                                    <input type="text" name="First_Name" placeholder="First Name">
								
                                </td>
							
					        </tr>
							
						    <tr>
						
                                <td width=40%>
							
                                    <label for="Last_Name">Last Name</label>
								
							    </td>
							
                                <td width=60%>
							
                                    <input type="text" name="Last_Name" placeholder="Last Name">
								
                                </td>
							
						    </tr>
						
						    <tr>
						
                                <td width=40%>
							
                                    <label for="Mobile_Number">Mobile Number</label>
								
							    </td>
							
                                <td width=60%>
  							
                                    <input type="text" name="Mobile_Number" placeholder="Mobile Number">
								
							    </td>
								
                            </tr>
						
                            <tr>
						
                                <td width=40%>
							
                                    <label for="Email_ID">Email ID</label>
								
							    </td>
							
                                <td width=60%>
							
                                    <input type="email" name="Email_ID" placeholder="Email ID">
								
							    </td>
							
                            </tr>
						
						    <tr>
						
						        <td width=40%>
							
                                    <label for="DOB">DOB</label>
								
						        </td>
							
							    <td width=60%>
							
                                    <input type="date" name="DOB">
								
							    </td>
							
                            </tr>
						
                            <tr>
						
                                <td width=40%>
							
                                    <label for="Gender">Gender</label>
								
	                            </td>
							
							    <td width=40%>
							
                                    <input type="radio" name="Gender" value="Male" checked>Male
								
                                    <input type="radio" name="Gender" value="Female">Female
								
                                </td>
							
						    </tr>
						
                        </table>
					
                    <h2>Advanced Details</h2>
				
				    <table width=100%>
					
	                    <tr>
						
						    <td width=40%>
							
                                <label for="Designation">Designation</label>
								
	                        </td>
							
						    <td width=60%>
							
                                <input type="text" name="Designation" placeholder="Designation">
								
	                        </td>
							
						</tr>
						
						    <td width=40%>
							
                                <label for="Qualification">Qualification</label>
								
						    </td>
							
                            <td width=60%>
							
                                <input type="text" name="Qualification" placeholder="Qualification">
								
                            </td>
							
						</tr>
						
						<tr>
						
						<tr>
						
						    <td width=40%>
							
						        <label for="Date_of_Hire">Date of Hire</label>
								
							</td>
							
						    <td width=60%>
							
                                <input type="date" name="Date_of_Hire" >
								
                        </td>
						
						</tr>
						
						<tr>
						
						    <td width=40%>
							
						        <label for="Pay Rate">Pay Rate</label>
								
							</td>
							
                            <td width=60%>
							
                                <input type="text" name="Pay_Rate" placeholder="Pay Rate">
								
							</td>
							
						</tr>
						
                    </table>        
  
                    <input type="reset" value="Reset" name="Reset" style="margin-left:50%">
					
                    <input type="Submit" value="Create New Employee" name="Submit">
  
            </form>
			
        </body>
		
    </html>



<!-----------------------------php--------------------------------------->

<?php

if(isset($_POST['Submit']))
{
	include ('connect.php');
	
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
	
	    $sql = "INSERT INTO employees(E_ID,First_Name,Last_Name,Mobile_Number,Email_ID,DOB,Gender,Designation,Qualification,Date_Of_Hire,Pay_Rate,Date_Added)VALUES('$eid','$FirstName','$LastName','$MobileNumber','$EmailID','$DOB','$Gender','$Designation','$Qualification','$DateofHire','$PayRate',Curdate())";
	
	if ($conn->query($sql) === TRUE) 
	{
		echo "New Employee created successfully!";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	$eid = GenerateID();
	
	echo "<script>document.getElementById('E_ID').value='$eid';</script>";
	
}
?>