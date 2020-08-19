<?php include("Header.php");

    $Showid = null;
		
		    function GenerateID() 
			{
			
			    include("Connect.php");
			
                    $sql ="select Show_ID from shows";

                    $result = $conn->query($sql);
			
                    if($result -> num_rows>0)
                    {
					
				        //This loop will help us in fetching the last id
				
	                    while($row=$result->fetch_assoc()) //Associated Array
	                    {
		                    $Showid = $row["Show_ID"];
	                    }
		
	                        $Showid = substr($Showid,2,4);
	 
	                        $Showid = $Showid + 1;
	 
					        if($Showid<10)
						
						        $Showid = "SH000" . $Showid;
						
					        elseif($Showid<100)
					
						        $Showid = "SH00" . $Showid;
								
					        else
						
						        $Showid = "SH" . $Showid;
                    }
 
                    else
                    {
	                    $Showid = "SH" . "0001";
                    }
					
			    $conn->close();
			
			return $Showid;
			
		    }
		
		$Showid = GenerateID();

?>
<!Doctype html>
<html>
<head>

<title>Local Cinema | Add Shows</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:680px;
	                color:#D4E6F1;
                    margin-top:70px;
				}
				
                .input{
	            float:center;
	            padding:13px;
	            border:1px solid #ccc;
	            font-size:19px;
	            border-radius:4px;
	            height:10px;
	            width:154px;	
                }			
			
	        </style>

</head>
<body>
<h1 class="Style1">Add Show</h1>

	            <!--Form Design-->
				
	            <form action="#" method="POST">
				
				    <table width=100%>
					
					    <tr>
						    <td width=37%>
                                <label for="Show_ID">Show_ID </label>
							</td>
							<td width=63%>
                                <input type="text" name="Show_ID" id="Show_ID" placeholder="Show_ID"  value="<?php echo $Showid;?>"> 
								</td>
						</tr>
						
						<tr>
						    <td width=37%>
                                <label for="Movie_Name">Movie Name</label>
							</td>
							<td width=63%>
                                <input type="text" name="Movie_Name" placeholder="Movie Name">
                            </td>
						</tr>
						
						<tr>
						    <td width=37%>
                                <label for="Time_Slots">Time Slots</label>
							</td>
							<td width=63%>
                                <input type="text" name="Time_Slots" placeholder="Time Slots">
                            </td>
						</tr>
						
						</div>
						<tr>
						    <td width=37%>
                                <label for="Duration">Duration</label>
							</td>
							<td width=63%>
                                <input type="text" name="Duration" placeholder="(in days)">
                            </td>
						</tr>
					
						<tr>
						    <td width=37%>
                                <label for="Price">Price</label>
							</td>
							<td width=63%>
                                <input type="text" name="Price" placeholder="Price">
							</td>
						</tr>
						
					</table>
					
                    <br><br>
					
                    <input type="reset" name="Reset" value="Reset" style="margin-left:40%">
								
                    <input type="submit"  name="Submit"value="Add new Show" style="margin-right:30%">
  
                    
                </form>
</body>
</html>

<?php

if(isset($_POST['Submit']))
{
	include ('Connect.php');
	
	    $Showid = $_POST['Show_ID'];
	    $MovieName = $_POST['Movie_Name'];
	    $Timeslots = $_POST['Time_Slots'];
	    $Duration = $_POST['Duration'];
	    $Price = $_POST['Price'];
	
	    $sql = "INSERT INTO shows(Show_ID,Movie_Name,Time_Slots,Duration,Price)VALUES('$Showid','$MovieName','$Timeslots','$Duration','$Price')";
	

	    if ($conn->query($sql) === TRUE) 
		{
		
		    echo "New Show created successfully!";
		
	    } 
	
	    else 
		{
		
		    echo "Error: " . $sql . "<br>" . $conn->error;
	    }
		
	    $conn->close();
	
	    $Showid = GenerateID();
	
	    echo "<script>document.getElementById('Show_ID').value='$Showid';</script>";

}
?>