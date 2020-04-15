<!DOCTYPE html>
<html>
	<head>
	    <style>

		ul {
  list-style-type: none;
  margin:0;
  padding:0;
  overflow:hidden;
  background-color:#2B3856;
}

li {
  float: left;
}

li a, .dropbtn {
  display:inline-block;
  color: white;
  text-align:center;
  padding:14px 16px;
  text-decoration:none;
}

li a:hover, .dropdown:hover .dropbtn {
  color: Orange;
}

li.dropdown {
  display:inline-block;
}

.dropdown-content {
  display:none;
  position:absolute;
  background-color:#f9f9f9;
  min-width:160px;
  box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color:black;
  padding:12px 16px;
  text-decoration:none;
  display:block;
  text-align:left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display:block;
}
		</style>
		
		<link rel="stylesheet" type="text/css" href="Styles.css">
		<link rel="icon" href="Logo.png" type="image/icon type">
	</head>
			   <ul>
  <li class ="dropdown">
  <a href="javascript:void(0)"class="dropbtn">Movies</a>
  <div class="dropdown-content">
      <a href="AddMovies.php">Add</a>
      <a href="UpdateSearchandDeleteMovies.php">Update Search and Delete</a>
	  </div>
  </li>
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Screens</a>
  <div class="dropdown-content">
      <a href="AddScreens.php">Add</a>
      <a href="UpdateSearchandDeleteScreens.php">Update Search and Delete</a>
	  </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Seats</a>
    <div class="dropdown-content">
      <a href="AddSeats.php">Add</a>
      <a href="UpdateSearchandDeleteSeats.php">Update Search and Delete</a>
    </div>
	</li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Customer</a>
    <div class="dropdown-content">
      <a href="AddCustomer.php">Add</a>
      <a href="UpdateSearchandDeleteCustomer.php">Update Search and Delete</a>
    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Employees</a>
    <div class="dropdown-content">
      <a href="AddEmployees.php">Add</a>
      <a href="UpdateSearchandDeleteEmployees.php">Update Search and Delete</a>
    </div>
  </li>
</ul>
</body>
</html>