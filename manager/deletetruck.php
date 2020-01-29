

<?php 

$order_id=isset($_GET['id']) ? $_GET['id']:die();
 
		
		$query = "DELETE FROM truckowner WHERE truckowner_id='".$truckowner_id."'";
	
			
		$result = mysqli_query($obj->con(),$query) or die ("Could not connect to mysql because ".mysqli_error($con));
		if($result)
             
                 	echo"<script> window.open('index.php?sw=managetruckowner&&del=1')</script>";
		else 
			echo"<script> window.open('index.php?sw=managetruckowner&&del=1')</script>";
?>