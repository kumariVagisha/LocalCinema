<?php include("Header.php");
?>
<!Doctype html>
<html>
<head>

<title>Local Cinema | Add Theater</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:680px;
	                color:#D4E6F1;
                    margin-top:70px;
				}			
			
	        </style>

</head>
<body>
<h1 class="Style1">Add Theater</h1>

	            <!--Form Design-->
				
	            <form action="#" method="POST">
				
				    <table width=100%>
					
					    <tr>
						    <td width=37%>
                                <label for="Theater_Name">Theater Name</label>
							</td>
							<td width=63%>
                                <input type="text" name="Theater_Name" placeholder="Theater Name"> 
								</td>
						</tr>
						
						<tr>
						    <td width=37%>
                                <label for="Address">Address</label>
							</td>
							<td width=63%>
							<input type="address" name="city" placeholder="City" ><br>
							<input type="number" name="postal" placeholder="Postal / Zip Code"><br>

							<select name=slist>
								<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chandigarh">Chandigarh</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option value="Daman and Diu">Daman and Diu</option>
								<option value="Delhi">Delhi</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Lakshadweep">Lakshadweep</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Orissa">Orissa</option>
								<option value="Pondicherry">Pondicherry</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttaranchal">Uttaranchal</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="West Bengal">West Bengal</option>
							</select>
                     
                            </td>
						</tr>
					
						<tr>
						    <td width=37%>
                                <label for="GSTIN">GSTIN</label>
							</td>
							<td width=63%>
                                <input type="text" name="GSTIN" placeholder="GSTIN">
                            </td>
						</tr>
				
						<tr>
						    <td width=37%>
                                <label for="Date_Of_Registration">Date Of Registration</label>
							</td>
							<td width=63%>
                                <input type="Date" name="Date_Of_Registration" placeholder="Date Of Registration">
                            </td>
						</tr>
					
						
					</table>
					
                    <br><br>
					
                    <input type="reset" name="Reset" value="Reset" style="margin-left:48%">
								
                    <input type="submit"  name="Submit"value="Add new Theater">
  
                    
                </form>
</body>
</html>

<?php

if(isset($_POST['Submit']))
{
	include ('Connect.php');
	
	    $TheaterName = $_POST['Theater_Name'];
	    $Address = $_POST['Address'];
	    $GSTIN = $_POST['GSTIN'];
	    $DateOfRegistration = $_POST['Date_Of_Registration'];
	
	    $sql = "INSERT INTO theater(Theater_Name,Address,GSTIN,Date_Of_Registration)VALUES('$TheaterName','$Address','$GSTIN','$DateOfRegistration')";
	

	    if ($conn->query($sql) === TRUE) 
		{
		
		    echo "New theater created successfully!";
		
	    } 
	
	    else 
		{
		
		    echo "Error: " . $sql . "<br>" . $conn->error;
	    }
		
	    $conn->close();
	
	    /*$cid = GenerateID();
	
	    echo "<script>document.getElementById('C_ID').value='$cid';</script>";*/

}
?>