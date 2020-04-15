<?php

    include("Header.php");

        $M_ID = null;

        $Title = null;
		
        if (isset($_POST['BtnSearch'])) {
			
            $M_ID = $_POST['M_ID'];
			
            include('Connect.php');

                $sql = "Select M_ID,Title from movies where M_ID='M_ID','Title'";
				
                $results = $conn->query($sql);

                    if ($results->num_rows > 0) {
						
                        $row = $results->fetch_assoc();
						
                            $Title = $row['Title'];
        
                    }
        }
		
?>

<!DOCTYPE html>
    <html>
	
	    <head>
		
		    <title>Local Cinema | Update Search and Delete Movies</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:620px;
	                color:#00356B;
                    margin-top:70px;
				}
				
	        </style>
			
	    </head>
		
	    <body>
		      
			<h1 class="Style1">Update Search and Delete Movies</h2>
			
                <!--form design-->
				
                    <form action="#" method="POST">
				
	                    <table width=100% border=1>
		                    <tr>
			                    <td width=40%>		
				                    <label for="M_ID">M_ID</label>	
			                    </td>
			                    <td width=32%>
				                    <input type="text" name="M_ID" placeholder="M_ID">
			                    </td>
								
								<td width=28%>
			                        <button type="submit" name="BtnSearch">Search</button>
			                    </td>
		                    </tr>
							
		                    <tr>
			                    <td width=40%>
				                    <label for="Title">Title</label>
			                    </td>
			                    <td width=32%>
				                    <input type="text" name="Title" placeholder="Title">
			                    </td>
		                    </tr>
							
		                    <tr>
                                <td width=40%>
                                    <label for="Genre">Genre</label>
                                </td>
                                <td width=32%>
                                    <select name="Genre">
                                        <option value="Action">Action</option>
                                        <option value="Adventure">Adventure</option>
                                        <option value="Comedy">Comedy</option>
                                        <option value="Crime">Crime</option>
                                        <option value="Drama">Drama</option>
                                        <option value="Horror">Horror</option>
                                    </select>
                                </td>
								
                            <tr>
                                <td width=40>
                                    <label for="Releasing Date">Releasing Date</label>
                                </td>
                                <td width=32%>
                                    <input type="date" name="Releasing_Date" placeholder="Releasing Date">
                                </td>
                            </tr>
							
							<tr>
                                <td width=40%>
                                    <label for="Running Time">Running Time</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Running_Time" placeholder="Running Time">
                                </td>
                            </tr>
							
                            <tr>  
                                <td width=40%>
                                    <label  for="Cast">Cast</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Cast" placeholder="Cast">
                                </td>
                            </tr>
							
						    <tr>	
                                <td width=40%>
                                    <label for="Crew">Crew</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Crew" placeholder="Crew"> 
                                </td>
							</tr>
								
                            <tr>
                                <td width=40%>
                                    <label for="Director">Director</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Director" placeholder="Director">
                                </td>
                            </tr>
							
							<tr>
                                <td width=40%>
                                    <label for="Producer">Producer</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Producer" placeholder="Producer">
                                </td>
                            </tr>
		                    <tr>
                                <td width=40%>
                                    <label for="Music Director">Music Director</label>
                                </td>
                                <td width=32%>
                                <input type="text" name="Music_Director" placeholder="Music Director">
                            </td>
                            </tr>
		                    <tr>
                                <td width=40%>
                                    <label for="Production House">Production House</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Production_House" placeholder="Production House">
                                </td>
                            </tr>
							
		                    <tr>
                                <td width=40%>
                                    <label for="Synopsis" >Synopsis</label>
                                </td>
                                <td width=32%>
                                    <textarea name="Synopsis" rows="10" cols="40" placeholder="Synopsis"></textarea>
                                </td>
                            </tr>
							
		                    <tr>
                                <td width=40%>
                                    <label for="Certifcate">Certificate</label>
	                            </td>
	                            <td width=32%>
                                    <select name="Certificate">
                                        <option value="U">U</option>
                                        <option value="U/A">U/A</option>
                                        <option value="A">A</option>
                                        <option value="S">S</option>
                                    </select>
                                </td>
		                    </tr>
                        </table>
    <br><br>
  
            <input type="submit" value="Cancel" style="margin-left:45%">
			
            <input type="submit" value="Update Movie">
			
            <input type="submit" value="Delete">
</form>
</body>
</html>
