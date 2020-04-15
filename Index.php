<?php
	/*include("connect.php");
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	$confirmPassword= $_POST['Confirm_Password'];
	
	$sql = "Select * from newuser where Name='$name',Email='$email',Password='$password','$ConfirmPassword'";

	$result = $conn->query($sql);

	if($result->num_rows <= 0)
	{
		header("Location: registrationform.php");
	}

	$conn->close();*/
?>

<!DOCTYPE html>
 <html lang="en">
    <head>
        <title>Local Cinema | Login</title>
 
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <link rel ="stylesheet" href="Loginstyle.css">
            <link rel="icon" href="Logo2.png" type="image/icon type">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">	
	</head>
	<body>
		<form method="POST">
            <table width="100%">
     <tr>
      <td width="50%">
        <img src="Logo2.png" alt="Logo">
      </td>

      <td>
       <h1 style="color:#0086b3">Log In</h1>
       <div class="transbox">

         <input type="text" placeholder="Username" name="Username" required><br/><br>


         <input type="password" placeholder="Password" name="Password" required><br/><br>

         <button type="submit" name="login">Login</button><br/><br/>

		       
		</form>
	</body>
</html>

<?php

if(isset($_POST['login']))
{ 
	session_start();
	
	include("connect.php");

	$username = $_POST['Username'];	
	$password = $_POST['Password'];
	
	$sql = "Select * from login where Username='$username' AND Password='$password'";
	
	echo $sql;

	$result = $conn->query($sql);
	//$num = mysqli_num_rows($result);

	if($result->num_rows > 0)
	{
        $_SESSION["uname"]= $username;
		//$row = $result->fetch_assoc();
		echo "<script>window.location.href='Homepage1.php'</script>";
	}

     else{
        echo"Invalid username or password";
	 }

	$conn->close();
}
?>