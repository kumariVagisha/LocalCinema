 <html>
  <head>

    <!--<link rel="icon" href="logo.jpg" type="image/icon type">-->
    
    <!-- css -->
    <!--<link rel="stylesheet" href="css/bms.css">-->

    <style> 
    </style>

  </head>



  <body style="background: #ffffff">
  
  <form method="POST">
    <table width="100%">
     <tr>
      <td width="50%">
        <img src="img1.jpg" width="600" height="700">
      </td>

      <td>
       <h1 style="color:black">LogIn</h1>
       <div class="transbox">

         <input type="text" placeholder="Username" name="username" required><br/>


         <input type="password" placeholder="Password" name="password" required><br/><br>

         <button type="submit" name="login">Login</button><br/><br/>

       </div>
     </td>
   </tr>
 </table>
</form>
</body>

<!--php-->

<?php
/*if(isset($_POST['login']))
{
  session_start();    //Starting a new session
  $con= new mysqli("localhost","root","iza@123","dbBMS");
  if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  $username= $_POST["username"];
  $password= $_POST["password"];

  $query= "select * from tblLogin where username='" . $username."' AND password='" .$password ."'";

  echo $query;

  $result = $con->query($query);
  $num = mysqli_num_rows($result);

  if($num == 1){
    $_SESSION["uname"]= $username;
    header("Location: homePage.php?");

  }
  else{
   echo"Invalid username or password";
 }
}

?>*/
</html>
