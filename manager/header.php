<?php session_start();



 
if(!isset($_SESSION['user']))
{
	//echo "<script> window.open('index.php') </script>";
	   header('Location:../index.php');
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
	 
	 $('#tx1').click(function() {
		$('.tx2').toggleClass('rotate-0');
		 $('.tx3').toggleClass('rotate-0');
			exit();
	});

	$('#tx2').click(function() {
		$('.tx1').toggleClass('rotate-0');
		 $('.tx3').toggleClass('rotate-0');
		exit();
	});

	$('#tx3').click(function() {
		$('.tx1').toggleClass('rotate-0');
		 $('.tx2').toggleClass('rotate-0');
		exit();
	});
	</script>
 
</head>


<body>

<header class="header">
<ul  class=" nav-c">
  <li class="nav-item">
    <a class="nav-link active" href="#!"> <img src="../images/agala.jpg" class="img-fluid rounded-circle hoverable"/> </a>
	
  </li>
   <a href="?sw=chart" class="square_btn"> Home </a>
  <li class="nav-item">
    <a class="nav-link" href="?sw=login">about us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?sw=sendowneremail">services</a>
  </li>
  
  <li class="nav-item">
  <!-- Button trigger modal-->
    <a  id="btn-f"  data-toggle="modal" data-target="#modalsid" href="#!"><i>MyAccount<i></a>
	 

	
  </li>
  
   <li class="nav-item">
  	<a class="nav-link"  rel="en-US" href="#!"><!--<i class="fa fa-language" aria-hidden="true"></i>-->
		   <img src="../icons/ln.png" class="img-responsive"/>
		   </a>
  </li>
  
  
 </ul>
</header><!--end header-->	