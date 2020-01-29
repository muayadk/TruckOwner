<?php session_start();
 require_once('mywork/work.php');
 // Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

// Include Language file
if(isset($_SESSION['lang'])){
 include "lang_".$_SESSION['lang'].".php";

}else{

 include "lang_en.php";

}
 
?>
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
  	<?php if( isset($_SESSION['lang'] ) && $_SESSION['lang']== 'ar') 
	{
	echo"<link rel='stylesheet' href='css/bootstrap-rtl.min.css'>"; 
	}
	else{	echo"<link rel='stylesheet' href='css/bootstrap.min.css'>";  }
	?>


</head>
<body>
<script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 </script>

<!--header-->
<header class="header">
	<ul  class=" nav-c">
	  <li class="nav-item1">
	   <a class="nav-link active" href="#!"> <img src="images/agala.jpg" class="img-fluid rounded-circle hoverable"/> </a>
	  </li>
	    <a href="index.php" class="square_btn"> <?=_home ?></a>
	  <li class="nav-item1">
		<a class="nav-link" href="aboutus.php"><?=_about?></a>
	  </li>
	  <li class="nav-item1">
		<a class="nav-link" href="index-services.php"><?=_services?> </a>
	  </li>
	  

	   <li class="nav-item1 dropdown">
		<!--<a class="nav-link"  rel="en-US" href="#!"><--<i class="fa fa-language" aria-hidden="true"></i>-->
		   <img src="icons/ln.png" class="img-responsive dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown"
		  aria-haspopup="true" aria-expanded="true"/> 
		   <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
		   
		    <!-- Language -->
			<form method='get' action='' id='form_lang' >
			 <select name='lang' onchange='changeLang();' >
		
			<option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
			
			<option value='ar' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar'){ echo "selected"; } ?> >عربي</option>
		
			</select>
			</form>
			</ul>
	  </li>
	  
	  
	 </ul>
 
<header><!--End header-->

<div class="container">

<div class="row col1">

<div class="col-lg-6 mb-lg-0 mb-3 col-xs-6 ">

      <div class="text-center">
        <img src="icons/icons8-info-208.png" alt="avatar"  style="margin-top:-70px;" class="text-center rounded-circle img-responsive">
	  </div>
          <!-- Body -->
		   
		  <div class="card-text">
		 
		  <b  style="color:#f8ba00; padding:30px;"><?=_Welcome?> </b>
             <br>
			 <b style=" padding:30px;"> Back </b>
			 
			 </div>
			 <div class="form-group">
			 <form method="post">
			  <div class="md-form">
				  
			    <input type="text" id="form-name"  name="name"  required>
				<label for="form-name"><?=_username?></label>
			  </div>
				  
			 <div class="md-form">
				
				 <input id="form1"   name="password" type="password" required>
					<label for="form1"> <?=_Password?> </label>
				  </div>
				  <div class="form-group">
				   <a href="forget.php" style="text-decoration-line: underline; color:#000;"> <?=_ForgetPassword?> </a> 
				  <label> &nbsp; &nbsp; <input type="checkbox" id="remember_me" name="remember_me" > <?=_remember?></a>
				 
				  </div>
				  <br/>
			 <div class="text-right">
			 <button class="square_btn btn-rounded" type="submit" name="send"> <?=_login?></button> 
		    </div>
		</form>
		  </div>
   
<?php 
      if(isset($_POST['send']))
	  {
		  
    $n=$_POST['name'];
	$p=$_POST['password'];
	
	 $log=new works();
	 $u=$log->login($n,$p);
	 
	  
	 if($u>0)
	 {
		$_SESSION['user']=$n;
		$_SESSION['password']=$p;
	 if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on')
                    {
                    $hour = time() + 3600 * 24 * 30;
                    setcookie('user', $n, $hour);
                    setcookie('password', $p, $hour);
  
					}
	
		header("Location:owner/index.php");
		
	 }
	 else
	 {
		 echo"<script> alert('فشل تسجيل الدخول') </script>";
	 }
	 

  
	}
?>

</div>


<div class="col-lg-6 mb-lg-0 mb-3 col-xs-6 " style="background-image:url('icons/x.jpg'); background-repeat: no-repeat;
  background-size: 1000px  500px;  border-radius: 0 40px 20px 0; border-left:2px solid #000;">


   <div class="card col-md-6" style="margin-top:350px; border-radius:20px; background-color:#f7f7f7;">
  <!-- Card content -->
  <div class="card-body card-body-cascade">

    
    
    <h6 > <?=_acountowner?></h6>
	<h6 style="color:#657001;">  <?=_owner?>  </h6>
    <!-- Text -->
    <a href="signup.php" class="card-title square_btn col-md-12" style="padding-left:50px;">  <?=_Rigester?></a>


  </div>
</div>
<!-- Card -->

</div>
</div>
</div>


 <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
 <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
 
 
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  
   <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>