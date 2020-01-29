<html>
<head>
<title>
</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->

  <!-- Font Awesome -->
    <link rel="stylesheet"  href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->


</head>
<body>


<!--header-->
<header class="header">
	<ul  class=" nav-c">
	  <li class="nav-item1">
	   <a class="nav-link active" href="#!"> <img src="images/agala.jpg" class="img-fluid rounded-circle hoverable"/> </a>
	  </li>
	   <a href="index.php" class="square_btn"> Home </a>
	  <li class="nav-item1">
		<a class="nav-link" href="#">about us</a>
	  </li>
	  <li class="nav-item1">
		<a class="nav-link" href="sigup">services</a>
	  </li>
	  

	   <li class="nav-item1">
		<a class="nav-link"  rel="en-US" href="#!"><i class="fa fa-language" aria-hidden="true"></i></a>
	  </li>
	  
	  
	 </ul>
 
<header><!--End header-->

<?php  
     
    error_reporting(0);
	
    if(isset($_POST["submit"]))
		{
        //keep it inside
        $email=$_POST['email'];

		include('mywork/work.php');
	    $obj=new works();
        
         $u=$obj->forgetTruckOwnerPassword($email);
                                      

        if ($u>0) {  
            $code=rand(100,999);
            $message="You activation link is: http://1270.0.1:81/truck/resetpassword.php?email=$email&code=$code";
			   if( mail($email,"RestarPassword:",$message,"Content-type:text/html;charset=UTF-8" . "\n"))
			   {
				  echo "OK sending message";
			   }
			   else 
				   {
				   echo"error sending";
				   }
			} 
		else {
            echo"the user no exist with this email";
	 	    }
    }
?>
<div class="justify-content-center">
 <div class="card ">
 
 <div class="titel-card">
   Forget Password
 </div>
 
 <div class="card-body">
 
	  <form action="" method="post"  enctype="multipart/form-data">
	   <label> Enter your Email:</label>
	   <input type="text" name="email">
		<input type="submit" name="submit" value="Send">
		</form>
   
    </div>
  </div>
 </div>
  </div>
  </body>
  </html>