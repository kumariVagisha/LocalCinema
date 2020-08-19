<?php
//------------- Generate Movie ID-------------

    include("Header.php");
	
	    $sid = null;
		
		function GenerateID() 
			{
	
    include("Connect.php");

        $sql ="select S_ID from screens";

        $result = $conn->query($sql);
        if($result -> num_rows>0)
        {
	        while($row=$result->fetch_assoc()) //Associated Array
	        {
		        $sid = $row["S_ID"];
	        }
	 
	        $sid = substr($sid,1,3);
	 
	        $sid = $sid + 1;
	 
	        //$sid = "S" . $sid;
			
			if($sid<10)
						
						$sid = "S00" . $sid;
						
					elseif($sid<100)
					
						$sid = "S0" . $sid;
					else
						
						$sid = "S" . $sid;
						
						
        }
 
 else
 {
	$sid = "S" . "001";
	
 }


 return $sid;
	
	$conn->close();
		
		$sid = GenerateID();
	
 }
?>

<!DOCTYPE html>

    <html>
	
	    <head>
		
		    <title>Local Cinema | Add Screens</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:650px;
	                color:#D4E6F1;
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
                                <input type="text" name="S_ID" id="S_ID" placeholder="S_ID" value="<?php echo $sid;?>"readonly>
	                        </td>
						</tr>
						
				    </table>
					
					<br><br>
                     <input type="reset" name="Reset" value="Reset" style="margin-left:45%">
									
                    <input type="submit" name="Submit" value="Add New Screen">
  
                </form>
        </body>
    </html>
  
  <!-------------------------------------------------------------------->

<?php

if(isset($_POST['Submit']))
{
	include ('Connect.php');
	
	    $sid = $_POST['S_ID'];
	
		$sql = "INSERT INTO screens(S_ID)values('$sid')";
	
	    echo $sql;
	

        if ($conn->query($sql) === TRUE) {
		
		    echo "New Screen created successfully";
		
	    } else {
		
		    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	$sid = GenerateID();
	
	echo "<script>document.getElementById('S_ID').value='$sid';</script>";

	
}
?>
