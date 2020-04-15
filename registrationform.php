 <!DOCTYPE html>
 <html lang="en">
    <head>
        <title>Local Cinema | Registration Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel ="stylesheet" href="Registerationstyle.css">
        <link rel="icon" href="Logo2.png" type="image/icon type">
        <link href="fonts.google.com/specimen/Ubuntu?selection.family=Ubuntu">  
    </head>
	<body>
	    <img class="logo" src="Logo2.png" alt="logo"/><br><br>
		<form action="registrationform.php" method="POST">
		<h2>CREATE AN ACCOUNT</h2>
		<table>
		    <tr> 
			    <td class="form">
                    <input type="text" placeholder="Name" name="Name" required>
				</td>
			</tr>
			<tr>
			    <td class="form">
            <input type="text" placeholder="Email" name="Email" required>
			    </td>
			</tr>
			<tr>
			    <td class="form">
            <input type="text" placeholder="Username" name="Username" required>
			    </td>
			</tr>
			<tr>
			    <td class="form"> 
                    <input type="password" placeholder="Password" name="Password" required>
			    </td>
			</tr>
			<tr>
			    <td class="form">
            <input type="password" placeholder="Confirm Password" name="Confirm_Password" required>
			    </td>
			</tr>
			<tr>
			    <td class="form">
	        <button type="submit" name="submit">Register</button>
	            </td>
			</tr>
			<tr>
			    <td class="form">
	        <p>Already have an account?</p><a href="index.php">Login here</a></p>
			    </td>
			</tr>
		</form>
	</body>
 </html>
 
 
 
 <!---------------------------------------------------------------------------------------->
 
 <?php

if(isset($_POST['Register']))
{
	include ('connect.php');
	
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$confirmPassword= $_POST['Confirm_Password'];
	
	$sql = "INSERT INTO newuser(Name,Email,Username,Password,Confirm_Password)VALUES('$name','$email','$username','$password','$confirmPassword')";
	
	

	if ($conn->query($sql) === TRUE) {
		echo "New newuser created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>
  