<!DOCTYPE html>

	<?php
	
	//------------- Generate Customer ID-------------

        include("Header.php");

		    $cid = null;
		
		    function GenerateID() 
			{
			
			    include("Connect.php");
			
                    $sql ="select C_ID from customer";

                    $result = $conn->query($sql);
			
                    if($result -> num_rows>0)
                    {
					
				        //This loop will help us in fetching the last id
				
	                    while($row=$result->fetch_assoc()) //Associated Array
	                    {
		                    $cid = $row["C_ID"];
	                    }
		
	                        $cid = substr($cid,1,3);
	 
	                        $cid = $cid + 1;
	 
					        if($cid<10)
						
						        $cid = "C00" . $cid;
						
					        elseif($cid<100)
					
						        $cid = "C0" . $cid;
								
					        else
						
						        $cid = "C" . $cid;
                    }
 
                    else
                    {
	                    $cid = "C" . "001";
                    }
					
			    $conn->close();
			
			return $cid;
			
		    }
		
		$cid = GenerateID();
    ?>
	
	
	<html>
	
	    <head>
		
		    <title> Local Cinema | Add Customer </title>
		
		    <style>
			
			    h1.Style1{
	                margin-left:740px;
	                color:#D4E6F1;
                    margin-top:70px;
				}	
	        </style>
		
		</head>
		
		<body>
			
	        <h1 class="Style1">Add Customer</h1>

	            <!--Form Design-->
				
	            <form action="#" method="POST">
				
				    <table width=100%>
					
					    <tr>
						    <td width=37%>
                                <label for="C_ID">C_ID </label>
							</td>
							<td width=63%>
                                <input type="text" name="C_ID" id="C_ID" placeholder="C_ID" value="<?php echo $cid;?>" readonly>
                            </td>
						</tr>
						
						<tr>
						    <td width=37%>
                                <label for="First_Name">First Name</label>
							</td>
							<td width=63%%>
                                <input type="text" name="First_Name" placeholder="First Name">
                            </td>
						</tr>
						
						<tr>
						    <td width=37%>
                                <label for="Last_Name">Last Name</label>
							</td>
							<td width=63%>
                                <input type="text" name="Last_Name" placeholder="Last Name">
                            </td>
						</tr>
						
						<tr>
						    <td width=37%>
                                <label for="Mobile_Number">Mobile Number</label>
							</td>
							<td width=63%>
                                <input type="text" name="Mobile_Number" placeholder="Mobile Number">
							</td>
						</tr>
						
						<tr>
						    <td width=37%>
                                <label for="Email_ID">Email ID</label>
							</td>
							<td width=63%>
                                <input type="email" name="Email_ID" placeholder="Email ID">
                            </td>
						</tr>
						
						<tr>
						    <td width=37%>
                                <label  for="DOB">DOB</label>
							</td>
							<td width=63%>
                                <input type="date" name="DOB">
                            </td>
                        </tr>
						
						<tr>
						    <td width=37%>
                                <label for="Gender">Gender</label>
                            </td>
                            <td width=63%>							
                                <input type="radio" name="Gender" value="Male" checked>Male
                                <input type="radio" name="Gender" value="Female">Female
                            </td>
						</tr>
					
					</table>
					
                    <br><br>
					
                    <input type="reset" name="Reset" value="Reset" style="margin-left:47%">
								
                    <input type="submit"  name="Submit"value="Create New Customer">
  
                    
                </form>
				
        </body>
		
    </html>




<!-------------------------------------------------------------------->

<?php

if(isset($_POST['Submit']))
{
	include ('Connect.php');
	
	    $cid = $_POST['C_ID'];
	    $fname = $_POST['First_Name'];
	    $lname = $_POST['Last_Name'];
	    $MobileNumber = $_POST['Mobile_Number'];
	    $EmailID = $_POST['Email_ID'];
	    $DOB = $_POST['DOB'];
	    $Gender = $_POST['Gender'];
	
	    $sql = "INSERT INTO customer(C_ID,First_Name,Last_Name,Mobile_Number,Email_ID,DOB,Gender)VALUES('$cid','$fname','$lname','$MobileNumber','$EmailID','$DOB','$Gender')";
	

	    if ($conn->query($sql) === TRUE) 
		{
		
		    echo "New Customer created successfully!";
		
	    } 
	
	    else 
		{
		
		    echo "Error: " . $sql . "<br>" . $conn->error;
	    }
		
	    $conn->close();
	
	    $cid = GenerateID();
	
	    echo "<script>document.getElementById('C_ID').value='$cid';</script>";

}
?>