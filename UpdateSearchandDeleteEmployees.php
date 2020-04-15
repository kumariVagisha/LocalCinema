<?php include("Header.php")
?>
<!DOCTYPE html>
<html>
	<head>

		<title>Local Cinema | Update Search and Delete Employees</title>

	</head>
	<body>

			   <h2 class="Style2">Update and Delete Employees</h2>

<!--Form Design-->
<form><!-- action="/action_page.php"-->
<h3>Personal Details</h3>
  <label for="E_ID">E_ID </label>
  <input type="text" name="E_ID" placeholder="E_ID">
  <input type="search" placeholder="search movies..">
  <br><br>
  
  
  
  <label for="First Name">First Name</label>
  <input type="text" name="First Name" placeholder="First Name">
  <br><br>
  
  
  <label for="Last Name">Last Name</label>
  <input type="text" name="Last Name" placeholder="Last Name"><br><br>
  
  
  <label for="Designation">Contact No.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Contact No." placeholder="Contact No."><br><br>
  
  
  <label for="Experiance">Email ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Email ID" placeholder="Email ID"><br><br>
  
  
  <label  for="DOB">DOB</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="date" name="DOB"><br><br>
  
  
  <label for="Gender">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="Gender" value="Male" checked>Male
  <input type="radio" name="Gender" value="Female">Female  
<h3>Advanced Details</h3>
   <label for="Designation">Designation</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Designation" placeholder="Designation"><br><br>
  
  
  <label for="Qualification">Qualification</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Qualification" placeholder="Qualification"><br><br>
  
  
  <label for="Experiencence">Experience</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Experience" placeholder="Experience"><br><br>
  
  
  <label for="Date of Hire">Date of Hire</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Date of Hire" placeholder="Date of Hire"><br><br>
  
  

  <label for="Pay Rate">Pay Rate</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="pay Rate" placeholder="Pay Rate"><br><br>

  
  <input type="submit" value="cancel">  
  <input type="submit" value="Update Employee">
  <input type="submit" value="Delete Employee">
  
  
</form> 
</body>
</html>
		
