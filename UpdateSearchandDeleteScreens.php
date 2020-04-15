<!--php-->
<?php include('Header.php')?>

<!DOCTYPE html>

    <html>
	
	    <head>
		
	        <title>Local Cinema | Update Search and Delete Screens</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:570px;
	                color:#00356B;
                    margin-top:70px;
					
	        </style>
			
	    </head>
		
	<body>
	
			<h1 class="Style1">Update Search and Delete Screens</h1>

                <!--Form Design-->
				
                <form>
				
				    <table width=100%>
				
				        <tr>
				            <td width=37%>
                                <label for="S_ID">S_ID </label>
				            </td>
				            <td width=28%>
                                <input type="text" name="S_ID" placeholder="S_ID">
                            </td>
				            <td width=35%>
                                <button type="submit" name="BtnSearch">Search</button>
                            </td>
				        </tr>
					
			        </table>
					
                    <br><br>
					
                    <input type="submit" value="Cancel" "margin-left:20%">
					
                    <input type="submit" value="Update Screen" "margin-left:50%">
					
                    <input type="submit" value="Delete" "margin-left:5%">
