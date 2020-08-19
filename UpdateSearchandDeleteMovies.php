<?php

    include("Header.php");
	
    //--------------- Search Movies-------------
	
    include("Connect.php");


$mid = null;
$Title = null;
$ReleasingDate = null;
$Genre = null;
$Language = null;
$RunningTime = null;
$Cast = null;
$Director = null;
$Producer = null;
$MusicDirector = null;
$ProductionHouse = null;
$Synopsis = null;
$Certificate = null;


if (isset($_POST['BtnSearch']))
{
	$mid = $_POST['M_ID'];
	$sql = "select * from movies where M_ID='$mid'";

	$result = $conn->query($sql);
			
	if($result -> num_rows>0)
	{
		$row = $result->fetch_assoc();// Associated array
	    
		$mid = $row['M_ID'];
        $Title = $row['Title'];
		$ReleasingDate = $row['Releasing_Date'];
		$Genre = $row['Genre'];
		$Language = $row['Language'];
		$RunningTime = $row['Running_Time'];
		$Cast = $row['Cast'];
		$Director = $row['Director'];
		$Producer = $row['Producer'];
		$MusicDirector = $row['Music_Director'];
		$ProductionHouse = $row['Production_House'];
		$Synopsis = $row['Synopsis'];
		$Certificate = $row['Certificate'];
		
	}
	else
		echo "<script>alert('No records found!');</script>";
}
     //-------------------Update Movies-------------------
	 
if(isset($_POST['Submit']))
{
		//$sql = "UPDATE movies SET Title = ?, Releasing_Date = ?, Genre = ?,Language = ?, Running_Time = ?, Cast = ? ,  Director = ? , Producer = ? , Music_Director =? , Production_House = ? , Synopsis = ? , Certificate = ? where M_ID= ? ";
	$sql = "UPDATE movies SET Title = ?, Releasing_Date = ?,Genre = ?,Language = ?,Running_Time = ?,Cast= ?,Director = ?,Producer = ?,Music_Director = ?,Production_House = ?,Synopsis = ?,Certificate = ? where M_ID = ?" ;

//echo $sql;

    $result = $conn->prepare($sql);
	$result-> bind_param('sssssssssssss',$Title,$ReleasingDate,$Genre,$Language,$RunningTime,$Cast,$Director,$Producer,$MusicDirector,$ProductionHouse,$Synopsis,$Certificate,$mid);

//$result-> bind_param('ssssssssssssss', $Title, $ReleasingDate, $Genre, $Language, $RunningTime, $Cast, $Crew, $Director, $Producer, $MusicDirector, $ProductionHouse, $Synopsis, $Certificate, $mid);

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
	
	//echo $mid;
	


if($result->execute()===true)
{
	echo "Update Successful!";	
}
else
{
	echo $result->error;
}

    //}
$result->close();
}

$conn->close();   
		

        
                    
      
		
?>

<!DOCTYPE html>

    <html>
	
	    <head>
		
		    <title>Local Cinema | Update Search and Delete Movies</title>
			
			<style>
			
			    h1.Style1{
	                margin-left:620px;
	                color:#D4E6F1;
                    margin-top:70px;
				}
				
	        </style>
			
	    </head>
		
	    <body>
		      
			<h1 class="Style1">Update Search and Delete Movies</h1>
			
                <!--form design-->
				
                    <form action="" method="POST">
				
	                    <table width=100%>
		                    <tr>
			                    <td width=40%>		
				                    <label for="M_ID">M_ID</label>	
			                    </td>
			                    <td width=32%>
				                    <input type="text" name="M_ID" value="<?php echo $mid?>" placeholder="M_ID">
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
				                    <input type="text" name="Title" value="<?php echo $Title?>" placeholder="Title">
			                    </td>
		                    </tr>
							
							<tr>
                                <td width=40>
                                    <label for="Releasing_Date">Releasing Date</label>
                                </td>
                                <td width=32%>
                                    <input type="date" name="Releasing_Date" value="<?php echo $ReleasingDate?>" placeholder="Releasing Date">
                                </td>
                            </tr>
							
		                    <tr>
                                <td width=40%>
                                    <label for="Genre">Genre</label>
                                </td>
                                <td width=32%>
                                    <select name="Genre" value="<?php echo $Genre?>">
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
								
							</tr>
								<td width=40%>
                                    <label for="Language">Language</label>
                                </td>
                                <td width=32%>
                                    <select name="Language" value="<?php echo $Language?>">
                                        <option value="Hindi">Hindi</option>
                                        <option value="English">English</option>
										<option value="Any Other">Any Other</option>
								    </select>
								</td>
							</tr>
                            
							<tr>
                                <td width=40%>
                                    <label for="Running_Time">Running Time</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Running_Time" value="<?php echo $RunningTime?>" placeholder="Running Time">
                                </td>
                            </tr>
							
                            <tr>  
                                <td width=40%>
                                    <label  for="Cast">Cast</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Cast" value="<?php echo $Cast?>" placeholder="Cast">
                                </td>
                            </tr>
							
								
                            <tr>
                                <td width=40%>
                                    <label for="Director">Director</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Director"  value="<?php echo $Director?>" placeholder="Director">
                                </td>
                            </tr>
							
							<tr>
                                <td width=40%>
                                    <label for="Producer">Producer</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Producer" value="<?php echo $Producer?>" placeholder="Producer">
                                </td>
                            </tr>
		                    <tr>
                                <td width=40%>
                                    <label for="Music_Director">Music Director</label>
                                </td>
                                <td width=32%>
                                <input type="text" name="Music_Director" value="<?php echo $MusicDirector?>" placeholder="Music Director">
                            </td>
                            </tr>
		                    <tr>
                                <td width=40%>
                                    <label for="Production_House">Production House</label>
                                </td>
                                <td width=32%>
                                    <input type="text" name="Production_House" value="<?php echo $ProductionHouse?>" placeholder="Production House">
                                </td>
                            </tr>
							
		                    <tr>
                                <td width=40%>
                                    <label for="Synopsis" >Synopsis</label>
                                </td>
                                <td width=32%>
                                    <textarea name="Synopsis" rows="10" cols="40" value="<?php echo $Synopsis?>"  placeholder="Synopsis"></textarea>
                                </td>
                            </tr>
							
		                    <tr>
                                <td width=40%>
                                    <label for="Certificate">Certificate</label>
	                            </td>
	                            <td width=32%>
                                    <select name="Certificate" value="<?php echo $Certificate?>" >
                                        <option value="U">U</option>
                                        <option value="U/A">U/A</option>
                                        <option value="A">A</option>
                                        <option value="S">S</option>
                                    </select>
                                </td>
		                    </tr>
                        </table>
                        <br><br>
  
                        <input type="reset" name="Reset" value="Reset" style="margin-left:48%">
			
                        <input type="submit" name="Submit" value="Update Details">
			
                        <input type="submit" name="Submit" value="Delete">
                    </form>
        </body>
    </html>
