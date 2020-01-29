<?php session_start();

 
if(!isset($_SESSION['user']))
{
	//echo "<script> window.open('index.php') </script>";
	   header('Location:../index.php');
}
if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

// Include Language file
if(isset($_SESSION['lang'])){
 include "../lang_".$_SESSION['lang'].".php";

}else{

 include "../lang_en.php";

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
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
 
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../css/style.css">
  
   <link rel="stylesheet" href="../css/mdb.min.css">

 <!-- jQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>

  
   <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  
	<?php if( isset($_SESSION['lang'] ) && $_SESSION['lang']== 'ar') 
	{
	echo"<link rel='stylesheet' href='css/bootstrap-rtl.min.css'>"; 
	}
	else{	echo"<link rel='stylesheet' href='css/bootstrap.min.css'>";  }
	?>
 
 <script>
 $(document).ready(function () {
	  
	  $('#btn-f').click(function(){
		    
		   $('.gnav').hide();
		  $('#modalsid').show();
		   
	  });
	  
	   $('#sid').click(function(){
		 
		   $('.gnav').show();
		   $('#modalsid').hide();
		   
	  });
	 });
	 </script>
	 
	<script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 </script>
 
</head>


<body>

<header class="header">
<ul  class=" nav-c">
  <li class="nav-item">
    <a class="nav-link active" href="#!"> <img src="../images/agala.jpg" class="img-fluid rounded-circle hoverable"/> </a>
	
  </li>
  <a href="index.php" class="square_btn"> <?=_home ?></a>
  <li class="nav-item">
   <a class="nav-link" href="../aboutus.php"><?=_about?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../index-services.php"><?=_services?> </a>
  </li>
  
  <li class="nav-item">
  <!-- Button trigger modal-->
    <a  id="btn-f"  data-toggle="modal" data-target="#modalsid" href="#!"><i>MyAccount<i></a>
	 

	
  </li>
  
 <li class="nav-item1 dropdown">
		<!--<a class="nav-link"  rel="en-US" href="#!"><--<i class="fa fa-language" aria-hidden="true"></i>-->
		   <img src="../icons/ln.png" class="img-responsive dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown"
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
</header><!--end header-->	

	  
