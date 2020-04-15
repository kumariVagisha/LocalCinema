<?php
//------------- Generate Movie ID-------------

    include("Header.php");
    include("connect.php");

        $sql ="select S_ID from screens";

        $result = $conn->query($sql);
        if($result -> num_rows>0)
        {
	        while($row=$result->fetch_assoc()) //Associated Array
	        {
		        $sid = $row["S_ID"];
	        }
	 
	        $sid = substr($sid,1,4);
	 
	        $sid = $sid + 1;
	 
	        $sid = "S" . $sid;
        }
 
 else
 {
	$sid = "S" . "1001";
 }
?>

<!DOCTYPE html>

    <html>
	
	    <head>
		
		    <title>Local Cinema | Add Screen</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:650px;
	                color:#00356B;
                    margin-top:70px;
				}	
	        </style>
			
        </head>
		
        <body>
		
	        <h1 class="Style1">Add Screens</h1>
			
                <!--Form Design-->
				
                <form action="#" method="POST">
				
                    <table width=100%>
					
						<tr>
							<td width=33%>
                                <label for="S_ID">S_ID </label>	
	                        </td>
						    <td width=67%>
                                <input type="text" name="S_ID" placeholder="S_ID" value="<?php echo $sid;?>" readonly>
	                        </td>
						</tr>
						
				    </table>
					
					<br><br>
                     <input type="submit" name="cancel" value="Cancel" "margin-left:35%">
									
                    <input type="submit" name="submit" value="Add New Screen" "margin-right:30%">
  
                </form>
        </body>
    </html>
  
  <!-------------------------------------------------------------------->

<?php

if(isset($_POST['submit']))
{
	include ('connect.php');
	
	    $sid = $_POST['S_ID'];
	
		$sql = "INSERT INTO screens(S_ID)values('$sid')";
	
	    echo $sql;
	

        if ($conn->query($sql) === TRUE) {
		
		    echo "New Screen created successfully";
		
	    } else {
		
		    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>
