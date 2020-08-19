<?php
//------------- Generate Movie ID-------------

    include("Header.php");
	
	$mid = null;
		
	    function GenerateID() 
		{
	
            include("Connect.php");

                $sql ="select M_ID from movies where year(Date_Added) = year(curdate())";

                $result = $conn->query($sql);
				
                if($result -> num_rows>0)
                {
					
	            while($row=$result->fetch_assoc()) //Associated Array
	            {
					
		        $mid = $row["M_ID"];
				
	            }
			
	            $mid = substr($mid,1,7);
			
	            $mid = $mid + 1;
			
	            $mid = "M" . $mid;
			
				
                }
 
            else
            {
	            $mid = "M" . date('Y') . "001";
			}
			
				return $mid;
			
		    
		}
		
		$mid = GenerateID();
				
            
?>
<!DOCTYPE html>

    <html>
	
	    <head>
		
		    <title>Local Cinema | Add Movies</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:680px;
	                color:#D4E6F1;
                    margin-top:70px;
				}
				
	        </style>
			
	    </head>
	
	<body>
	
		<h1 class="Style1">Add Movies</h1>

		    <!--Form Design-->
		
		    <form action="#" method="POST">
		
			    <table width=100%>
			
				    <tr>
				
					    <td width=35%>
					
						    <label for="M_ID">M_ID</label>
						
						</td>
						
					    <td width=65%>
					
						        <input type="text" name="M_ID" id="M_ID" placeholder="M_ID" value="<?php echo $mid;?>" readonly>
						
					    </td>
					
				    </tr>
				
				    <tr>
				
					    <td width=35%>
					
						    <label for="Title">Title</label>
						
					    </td>
					
					    <td width=65%> 
					
                            <input type="text" name="Title" placeholder="Title">
						
                        </td>
					
                    </tr>
				
				    <tr>
                        <td width=35%>
						
                            <label for="Releasing_Date">Releasing Date</label>
							
                        </td>
						
                        <td width=65%>
						
                        <input type="Date" name="Releasing_Date" placeholder="Releasing Date">
						
                    </td>
					
                    </tr>
				
                    <tr>
				 
                        <td width=35%>
					
                            <label for="Genre">Genre</label>
						
                        </td>
					
                        <td width=65%>
					
                            <select name="Genre">
						
                                <option value="Action">Action</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Crime">Crime</option>
                                <option value="Drama">Drama</option>
                                <option value="Horror">Horror</option>
							    <option value="Any Other">Any Other</option>
							
                            </select>
						
                        </td>
					
                    </tr>
				
                    <tr>
				
                        <td width=35%>
					
                            <label for="Language">Language</label>
						
                        </td>
					
                        <td width=65%>
					
					        <select name="Language">
					
                                <option value="Hindi">Hindi</option>
                                <option value="English">English</option>
							    <option value="Any Other">Any Other</option>
							
                            </select>
					
                        </td>
					
                    </tr>
				
                    <tr>
				
                        <td width=35%> 
					
                            <label for="Running_Time">Running Time</label>
						
                        </td>
					
                        <td width=65%>
					
                            <input type="text" name="Running_Time" placeholder="Running Time">
						
                        </td>
					
                    </tr>
				
				    <tr>
				
                        <td width=35%>
					
                            <label  for="Cast">Cast</label>
						
                        </td>
					
                        <td width=65%>
					
                            <input type="text" name="Cast" placeholder="Cast">
						
                        </td>
					
					</tr>
					
					<tr>
					
                        <td width=35%> 
					
                            <label for="Director">Director</label>
						
                        </td>
					
                        <td width=65%>
					
                            <input type="text" name="Director" placeholder="Director">
						
                        </td>
					
		            </tr>
				
				    <tr>
				
			            <td width=35%>
					
				            <label for="Producer">Producer</label>
						
			            </td>
					
			            <td width=65%>
					
				            <input type="text" name="Producer" placeholder="Producer">
						
			            </td>
					
		            </tr>
				
		            <tr>
				
			            <td width=35%>
					
				            <label for="Music_Director">Music Director</label>
						
			            </td>
					
			            <td width=65%>
					
				            <input type="text" name="Music_Director" placeholder="Music Director">
						
			            </td>
					
		            </tr>
				
		            <tr>
				
			            <td width=35%>
					
				            <label for="Production_House">Production House</label>
						
			            </td>
					
			            <td width=65%>
					
				            <input type="text" name="Production_House" placeholder="Production House">
						
			            </td>
					
		            </tr>
				
		            <tr>
				
			            <td width=35%>
					
				            <label for="Synopsis">Synopsis</label>
						
			            </td>
					
			            <td width=65%>
					
				            <textarea name="Synopsis" rows="10" cols="45" placeholder="Synopsis"></textarea>
						
			            </td>
					
		            </tr>
				
		            <tr>
				
			            <td width=35%>
					
				            <label for="Certificate">Certificate</label>
						
			            </td>
					
			            <td width=65%>
					
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
			
			<input type="reset" name="Reset" value="Reset" style="margin-left:47%">
		
			<input type="submit" name="Submit" value="Add New Movie">
</form>

</body>

</html>
<!-------------------------------------------------------------------------->
<?php

if(isset($_POST['Submit']))
{
	include ('Connect.php');
	
	$mid = $_POST['M_ID'];
	$Title = $_POST['Title'];
	$ReleasingDate = $_POST['Releasing_Date'];
	$Genre = $_POST['Genre'];
	$Language = $_POST['Language'];
	$RunningTime = $_POST['Running_Time'];
	$Cast = $_POST['Cast'];
	$Director = $_POST['Director'];
	$Producer = $_POST['Producer'];
	$MusicDirector = $_POST['Music_Director'];
	$ProductionHouse = $_POST['Production_House'];
	$Synopsis = $_POST['Synopsis'];                                    
	$Certificate = $_POST['Certificate'];
	            
	
	$sql = "INSERT INTO movies(M_ID,Title,Releasing_Date,Genre,Language,Running_Time,Cast,
	Director,Producer,Music_Director,Production_House,Synopsis,Certificate,Date_Added) values('$mid',
	'$Title','$ReleasingDate','$Genre','$Language','$RunningTime','$Cast','$Director',
	'$Producer','$MusicDirector','$ProductionHouse','$Synopsis','$Certificate',Curdate())";
	
	if ($conn->query($sql) === TRUE) 
	{
		echo "New Movie created successfully!";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	$mid = GenerateID();
	
	echo "<script>document.getElementById('M_ID').value='$mid';</script>";

	
}
?>