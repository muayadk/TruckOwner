<?php

$order_id=isset($_GET['id']) ? $_GET['id']:die();

		$query = "DELETE FROM order_customer WHERE order_id='".$order_id."'";
			
		$result = mysqli_query($obj->con(),$query) or die ("Could not connect to mysql because ".mysqli_error($con));
		if($result )
			echo"<script> window.open('index.php?sw=vieworder&&del_order=1')</script>";
		   //header('location:index.php?sw=vieworder&&del_order=1','_self');
		else
          	//header('Location:index.php?sw=vieworder&&del_order=0');
		echo"<script> window.open('index.php?sw=vieworder&&del_order=0','_self')</script>";

?>