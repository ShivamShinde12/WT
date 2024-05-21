<?php
	
	$link = mysqli_connect("localhost", "root", "", "test");
 
	// Check connection
	  if($link === false){
	   die("ERROR: Could not connect. " . mysqli_connect_error());
	   }
	   else
	   {
		echo "Connection Established...<br>";
	   }

	   $sql = "SELECT * FROM student";
	   if($result = mysqli_query($link, $sql))
	   {
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result)){
				
				echo  $row['Roll']."  ".$row['Name']."  ".$row['Class']."   ".$row['Marks'] ;
				echo "<br>";		
				 }
				 	
				}
	}
?>

