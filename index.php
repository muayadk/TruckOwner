<?php session_start();
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
<!DOCTYPE html>
<html>
<head>
<title>
</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="css/mdb.min.css">
	<!-- Your custom styles (optional) -->
	<link rel="stylesheet" href="css/style.css">
	<?php if( isset($_SESSION['lang'] ) && $_SESSION['lang']== 'ar') 
	{
	echo"<link rel='stylesheet' href='css/bootstrap-rtl.min.css'>"; 
	}
	else{	echo"<link rel='stylesheet' href='css/bootstrap.min.css'>";  }
	?>
	
	
		 
<style>
a{
	color:#fff;
}
a:hover{
	
	
}
</style>
</head>


<body style="background-image:url('icons/home.jpg'); 
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;">

<script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 </script>

<!--header-->
<header class="header">
	<ul  class="nav-c">
	  <li class="nav-item">
		 <a class="nav-link active" href="#!"> <img src="images/agala.jpg" class="img-fluid rounded-circle hoverable"/> </a>
	  </li>
	   <a href="" class="square_btn"> <?=_home ?></a>
	  <li class="nav-item">
		<a class="nav-link" href="aboutus.php"><?=_about?></a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="index-services.php"><?=_services?> </a>
	  </li>
	  
	 <li class="nav-item dropdown">
		<!--<a class="nav-link"  rel="en-US" href="#!"><--<i class="fa fa-language" aria-hidden="true"></i>-->
		   <img src="icons/ln.png" class="img-responsive dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown"
		  aria-haspopup="true" aria-expanded="true"/> 
		   <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
		   
		    <!-- Language -->
			<form method='get' action='' id='form_lang' >
			 <select name='lang' onchange='changeLang();' >
		
			<option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
			
			<option value='ar' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar'){ echo "selected"; } ?> >عربي</option>
		
			</select>
			</form>
			</ul>
	  </li>
	  
	   <li class="nav-item">
		<a class="nav-link" href="login.php"><?=_login?></a>
	   </li>
		
	    <li class="nav-item">
		<a class="nav-link" href="sigup.php"><?=_signup ?></a>
	  </li>
		
	 
	  
	 </ul>	
		
</header><!--header-->		


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