<?php


$conn = mysqli_connect('localhost', 'root', '', 'digi');
	
	if($conn)
	{
		echo "ok";
	}else{
		echo mysqli_error($conn);
	}
	


?>