
<!DOCTYPE html>
<html>
<head>
<title>Local Cinema | Homepage1 </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
    body{
	   padding:0;
	   margin:0;
    }
	.menu ul{
		list-style:none;
		margin:0;
	}
	.menu ul li{
		padding:15px;
		position:relative;
		width:150px;
		vertical-align:middle;
		background-color:#34495E;
		border-top:1px solid #BDC3C7;
	}
	.menu > ul > li{
		border-right: 5px solid #F1C40F;
	}
	.menu ul ul{
	transition: all 0.3s;
	border-left: 5px solid #F1C40F;
    opacity:0;
	position:absolute;
	visibility:hidden;
	left:80%;
	top:-2%;	
	}
	.menu ul li a{
		color:#fff;
		text-decoration:none;
	}
	}
	span{
		margin-right: 15px;
	}
	.menu > ul > li:nth-of-type(2)::after{
		content:"+";
		position:absolute;
		margin-left: 35%;
		color:#fff;
		font-size:20px;
	}
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<div class="menu">
 <ul>
      <li><a href="Dashboard.php" ><span class="fas fa-tachometer">Dashboard</a></li>
      <li><a href="">Public Portal Management</a></li>
          <ul>
               <li><a href="AddMovies.php">Movies</a></li>
               <li><a href="AddScreens.php">Screens</a></li>
               <li><a href="AddSeats.php">Seats</a></li>
               <li><a href="AddCustomer.php">Customers</a></li>
			</ul>
        </li>			
      <li><a href="AddEmployees.php">Employee Management</a></li>
	  <li><a href="">Accounts</a></li>
	  <ul>
               <li><a href="">Asset</a></li>
               <li><a href="">Liability</a></li>
               <li><a href="">Income</a></li>
               <li><a href="">Expenses</a></li>
			</ul>
</div>			
	  
</body>
</html>