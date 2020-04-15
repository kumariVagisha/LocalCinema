<!DOCTYPE html>
<html>
	<head>
	
	    <style>
		 h3{
		 text-align:left;
		 margin-bottom: 0;
		 color:Red;
		 }
		 hr.new1{
		 border-top:1px solid grey;
		 }
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
		 <title>Local Cinema | Update Search and Delete Customer</title>
		  <link rel="stylesheet" type="text/css" href="Styles.css">
	</head>
	        <body>
		      <header>
			  <input type="text" placeholder="search movies..">
			    <U><h2>UPDATE AND DELETE CUSTOMER</h2></U>
		      </header>
		       <hr class="new1">
			   <ul>
                <li class ="dropdown">
  <a href="javascript:void(0)"class="dropbtn">Movies</a>
  <div class="dropdown-content">
      <a href="#">Add</a>
      <!--<a href="#">Update Search and Delete</a>-->
	  </div>
  </li>
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Screens</a>
  <div class="dropdown-content">
      <a href="#">Add</a>
      <a href="#">Update Search and Delete</a>
	  </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Seats</a>
    <div class="dropdown-content">
      <a href="#">Add</a>
      <a href="#">Update Search and Delete</a>
    </div>
	</li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Customer</a>
    <div class="dropdown-content">
      <a href="#">Add</a>
      <!--<a href="#">Update Search and Delete</a>-->
    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Employees</a>
    <div class="dropdown-content">
      <a href="#">Add</a>
      <a href="#">Update Search and Delete</a>
    </div>
  </li>
</ul>
<!--Form Design-->
<form><!-- action="/action_page.php"-->
  <label for="C_ID">C_ID </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
  <input type="text" name="C_ID" placeholder="C_ID">
  <br><br>
  <label for="First Name">First Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="First Name" placeholder="First Name">
  <br><br>
  <label for="Last Name">Last Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Last Name" placeholder="Last Name"><br><br>
  
  
  <label for="Contact No.">Contact No.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Contact No." placeholder="Contact No."><br><br>
  
  
  <label for="Email ID">Email ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Email ID" placeholder="Email ID"><br><br>
  
  
  <label  for="DOB">DOB</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="date" name="DOB"><br><br>
  
  
  <label for="Gender">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			
  <input type="radio" name="Gender" value="Male" checked style="color:white;">Male
  <input type="radio" name="Gender" value="Female" style="color:white;">Female<br><br> 

  
   <label for="Age">Age</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Age" placeholder="Age"><br><br>
  
  
  <input type="submit" value="Cancel">
  <input type="submit" value="Create New Customer">
  
  
</form> 
</body>
</html>