<?php


$conn = mysqli_connect('localhost', 'root', '', 'digi');
	
	if($conn)
	{
		echo " ";
	}else{
		echo mysqli_error($conn);
	}
	


?>