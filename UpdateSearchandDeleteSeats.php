<?php include("Header.php")?>

<!DOCTYPE html>

    <html>
	
	    <head>
		
		    <title>Local Cinema | Update Search and Delete Movies</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:570px;
	                color:#00356B;
                    margin-top:70px;
					
	        </style>
			
	    </head>
		
	    <body>
		
	        <h1 class="style1">Update Search and Delete Seats</h1>
			      
            <!--Form Design-->
			
            <form action="#" method="POST">
			
                <table width=100%>
				
                    <tr>
                        <td width=40%>
                            <label for="ST_ID">ST_ID </label>
                        </td> 
                        <td width=28%> 
                            <input type="text" name="ST_ID" placeholder="ST_ID">
                        </td>
                        <td width=32%>
			                <button type="submit" name="BtnSearch">Search</button>
			            </td>
                    </tr>
					
                    <tr>
                        <td width=37%>
                            <label for="Seat Number">Seat Number</label>
                        </td>
                    <td>
                            <input type="text" name="Seat Number" placeholder="Seat Number">
                    </td width=28%>
                </tr>
				
                <tr>
                    <td width=37%>
                        <label for="Category">Category</label>
                    </td>
                    <td width=28%>
                        <input type="text" name="Category" placeholder="Category">
                    </td>
                </tr>
				<tr>
                    <td width=37%>
                        <label for="Price">Price</label>
                    </td>
                    <td width=28%>
                        <input type="text" name="Price" placeholder="Price">
                    </td>
                </tr>
				
                <tr>
				    <td width=37%>
                        <label for="Status">Status</label>
					</td>
					<td width=28%>
                        <select name="Status">
                        <option value="Available">Available</option>
                        <option value="Under Repair">Under Repair</option>
                        </select>
					</td>
				</tr>
				
            </table>
			
            <br><br>
  
            <input type="submit" value="Cancel" "margin-left:20%">
			
            <input type="submit" value="Add New Seats" "margin-left:50%">
			
            <input type="submit" value="Delete" "margin-right:5%">
        </form>
	</body>
</html>