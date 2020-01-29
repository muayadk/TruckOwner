<?php
	if(isset($_GET['code']))
		{

		$acode = $_GET['code'];
		}
		echo $acode;

	if(isset($_POST['pass'])){
		$pass = $_POST['pass'];


	  include('mywork/work.php');
	  $obj=new works();
	  
	$query = mysqli_query($obj->con(),"select * from truckowner where code='$acode'")or die("error connection"); 

	 if (mysqli_num_rows($query)==1) 
	{



	$query3 = mysqli_query($con,"update truckowner set Password='$pass' where code='$acode'")or die("error connection"); 

	echo 'Password Changed';
	}
	else
	{
	echo 'Wrong CODE';

	}
	}

?>

    <form action="" method="post"  enctype="multipart/form-data">
    <p>New Password:</p><input type="password" name="pass" />
    <input type="submit"  name="submit" value="Signup!" />
    </form>