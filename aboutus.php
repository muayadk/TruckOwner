<?php session_start();
 require_once('mywork/work.php');
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
  <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">-->
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->

<style>

body{
	
     padding-top:0;
	padding-right:15px;
	padding-left:15px;
}
.img{
border: 1px solid #ca9a3f;
border-radius: 50px 50px 50px 50px;
}
.sidbar{	padding-right:70px;
		padding-left:70px;
		margin-left:20px;}
.content{
	width:800px;
}
.co-r{
	margin-left:70px;padding-left:170px; 
	margin-right: 40px;color: $cba02b;
	background-size: 
	inherit;background-color: #cba02b;
}
.cor1{
	margin-left:70px;
	padding-left:170px; 
	margin-right:40px;color:$cba02b; 
	background-size:inherit;
	background-color: #cba02b;
}

.lin{
	padding-left:200px;
	padding-right:200px;
	padding-top:0; 
	background-size:inherit; 
	background-color: #fff;
}
.square_btn{margin-top:150px;}

@media screen and (max-width :767px)
{
	body{
	margin:0;
	
	padding-right:25px;
	padding-left:25px;
}
	.header{
		display:inline-flex;
	}
	.content{
		width:440px;
		margin-left:20px;
		
	}
	
	.sidbar{
		display:inline-flex;
		padding-left: 0;
		margin-left: 0;
	}
	
	.co-r{
	margin-left:10px;padding-left:50px; 
	margin-right: 10px;
	padding-right: 50px;
	color: $cba02b;
	background-size: 
	inherit;background-color: #cba02b;
	}
	
	.cor1{
	margin-left:10px;
	padding-left:10px; 
	margin-right:10px;
	padding-right:60px;
	color:$cba02b; 
	background-size:inherit;
	background-color: #cba02b;
	}
	
	.lin{
	padding-left:100px;
	padding-right:100px;
	padding-top:0; 
	background-size:inherit; 
	background-color: #fff;
   }
   .square_btn{margin-top:100px;}
   .cus{
	top:15px;
}
}
.cus{
	top:15px;
}
</style>
</head>
<body>


<!--header-->
<header class="header">
	<ul  class="nav-c">
	  <li class="nav-item">
	   <a class="nav-link active" href="#!"> <img src="images/agala.jpg" class="img-fluid rounded-circle hoverable"/> </a>
	  </li>
	   <a href="index.php" class="square_btn"> Home </a>
	  <li class="nav-item">
		<a class="nav-link" href="#">about us</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="sigup">services</a>
	  </li>
	  

	   <li class="nav-item">
		<a class="nav-link"  rel="en-US" href="#!"><i class="fa fa-language" aria-hidden="true"></i></a>
	  </li>
	  
	  
	 </ul>
 
</header><!--End header-->
<div class="cus">
 <i class="co-r"> </i><i style="margin-left:10px;">Contact Us</i> <i class="cor1"> </i>
 </div>
 <br>
 <br>
 <div class="row">
  
    <div class="col-lg-2 mb-lg-0 col-xs-2">
	  <aside>  
	   <section class="sidbar">
			 
		 <div class="coll pull-right mb-4 p-5">
			
				<img src="icons/map.png" id="map" class="img" />
			 </div>
			  
			  <div class="pull-right mb-4 p-5">
				<img src="icons/ph.png"   id="phone" class="img"/> 
			  </div>

			 <div class="pull-right mb-4 p-5">
				<img src="icons/sm.png" id="sm" class="img" />
			   </div>
		

	 </section><!--end section-->
	</aside>
		
      </div><!--end col-->

	 
  <div class="col-lg-10 mb-lg-0  col-xs-10" >
    <div class="content"> 
	   </div>
	  
	   
	  </div><!--end colmon-->
  </div><!--end row-->
	
	
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
   <script>
 $(document).ready(function () {
	  $('#phone').click(function(){
		   $('.content').load('mobile.php');
			return false;
	  });
	  
	   $('#sm').click(function(){
		   $('.content').load('contactusemail.php');
		   	return false; 
	  });
	 });
	 </script>
  
  
</body>
</html>