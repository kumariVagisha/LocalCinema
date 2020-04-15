<?php
//------------- Generate Employee ID-------------

include("Header.php");
include("connect.php");

/*$sql ="select E_ID from employees";

$result = $conn->query($sql);
if($result -> num_rows>0)
 {
	while($row=$result->fetch_assoc()) //Associated Array
	{
		$eid = $row["E_ID"];
	}
	 
	$eid = substr($eid,1,5);
	 
	$eid = $eid + 1;
	 
	$eid = "E" . $eid;
 }
 
 else
 {
	$eid = "E" . date('Y') . "001";
 }*/
?>

<!DOCTYPE html>
    <html>
	    <head>
	        <title>Local Cinema | Add Employees </title>
	    </head>
	    <body>
	 
	        <h1 class="Style1">Add Employees</h1>
            <!--Form Design-->
            <form action="#" method="POST">
                <h2>Personal Details</h2>
	                <table>
	                    <tr>
						    <td class="form">
                                <label for="E_ID">E_ID </label>
							</td>
							<td class="form">	
                                <input type="text" name="E_ID" placeholder="E_ID">
							</td>
						<tr>
							<td class="form">
                                <label for="First Name">First Name</label>
							</td>
							<td class="form">
                                <input type="text" name="First_Name" placeholder="First Name">
                            </td>
							</tr>
						<tr>
                            <td>						
                                <label for="Last Name">Last Name</label>
							</td>
                            <td class="form">							
                                <input type="text" name="Last_Name" placeholder="Last Name">
                            </td>
							</tr>
						<tr>
                            <td class="form">						
                                <label for="Mobile Number">Mobile Number</label>
							</td>
                            <td class="form">  							
                                <input type="text" name="Mobile_Number" placeholder="Mobile Number">
							</td>
                        </tr>
                        <tr>
                            <td class="form">						
                                <label for="Email ID">Email ID</label>
							</td>
                            <td class="form">
                                <input type="text" name="Email_ID" placeholder="Email ID">
							</td>	
                        </tr>
						<tr>
						    <td class="form">
                                <label  for="DOB">DOB</label>
						    </td>
							<td class="form">
                                <input type="date" name="DOB">
							</td>
                        </tr>
                        <tr>
                            <td class="form">						
                                <label for="Gender">Gender</label>
	                        </td>
							<td class="form">
                                <input type="radio" name="Gender" value="Male" checked style="color:white;">Male
                                <input type="radio" name="Gender" value="Female" style="color:white;">Female
                            </td>
						</tr>
                    </table>
                <h2>Advanced Details</h2>
				    <table>
	                    <tr>
						    <td class="form">
                                <label for="Designation">Designation</label>
	                        </td>
						    <td class="form">
                                <input type="text" name="Designation" placeholder="Designation">
	                        </td>
						</tr>
						    <td class="form">
                                <label for="Qualification">Qualification</label>
						    </td>
                            <td class="form">						
                                <input type="text" name="Qualification" placeholder="Qualification">
                            </td>
						</tr>
						<tr>
                            <td class="form">
                                <label for="Experiencence">Experience</label>
						    </td>
						    <td class="form">
                                <input type="text" name="Experience" placeholder="Experience">
                            </td>
						</tr>
						<tr>
						    <td class="form">
						        <label for="Date of Hire">Date of Hire</label>
							</td>
						<td class="form">
                                <input type="date" name="Date_of_Hire" >
                        </td>
						</tr>
						<tr>
						    <td class="form">
						        <label for="Pay Rate">Pay Rate</label>
							</td> 
                            <td class="form">							
                                <input type="text" name="Pay_Rate" placeholder="Pay Rate">
							</td>
						</tr>
                    </table>        
  
      <input type="submit" value="Cancel" name="cancel" style="margin-left:40%">
      <input type="submit" value="Create New Employee" name="submit" style="margin-right:30%">
  
  
    </form> 
  </body>
</html>



<!-------------------------------------------------------------------->

<?php

if(isset($_POST['submit']))
{
	include ('connect.php');
	
	$eid = $_POST['E_ID'];
	$fname = $_POST['First_Name'];
	$lname = $_POST['Last_Name'];
	$MobileNumber = $_POST['Mobile_Number'];
	$EmailID = $_POST['Email_ID'];
	$DOB = $_POST['DOB'];
	$Gender = $_POST['Gender'];
	$Designation = $_POST['Designation'];
	$Qualification = $_POST['Qualification'];
	$DateofHire = $_POST['Date_of_Hire'];
	$PayRate = $_POST['Pay_Rate'];
	
	$sql = "INSERT INTO employees(E_ID,First_Name,Last_Name,Mobile_Number,Email_ID,DOB,Gender,Designation,Qualification,Date_Of_Hire,Pay_Rate)VALUES('$eid','$fname','$lname','$MobileNumber','$EmailID','$DOB','$Gender','$Designation','$Qualification','$DateofHire','$PayRate')";
	
	

	if ($conn->query($sql) === TRUE) {
		echo "New Employee created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>