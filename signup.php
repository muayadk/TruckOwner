<?php session_start();
include('mywork/work.php');
 // Set Language variable
      $message='';
		   // require_once('mywork/work.php');
		    //include('mywork/work.php'); 
	
	              $obj=new works();
			  if(isset($_POST['add']))
			  {
				  $f=$_POST['fname'];
				  $l=$_POST['lname'];
				  $e=$_POST['email'];
				  $p=$_POST['phone'];
				  $u=$_POST['uname'];
				  $ps=$_POST['password'];
				  $cn=$_POST['company_name'];
				  $ci=$_POST['companyId'];
				  $n=$_POST['companyNo'];
			
				  $add=$obj->signUp($f,$l,$u,$ps,$p,$e,$cn,$ci,$n);
				  if($add)
				  $message.="Successful rigster!!";
			      else
					  $message.="failer rigester  ??";
				  
					  
				  
			  }
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
  
<style>

.registration-successful {
  display: none;
  margin: 0px auto;
  background: #fff;
  height: 300px;
  width: 500px;
  border-radius: 10px;
  border: 2px solid #00c851;
  color: #00c851 !important;
}

.header {
  font-size: 50px;
}

.form-with-stepper {
  background-color: #ffffff;
  margin: 0px auto;
  font-family: Roboto;
  padding: 40px;
  width: 40%;
  min-width: 300px;
  border-radius: 10px;
}

.form-with-stepper .tab input.invalid {
  background-color: #ffdddd;
}

.tab {
  display: none;
}

.btn {
  width: 100%;

  font-size: 1.1rem;
  border: 2px solid transparent;
}

.prevBtn:hover {
  background-color: #f8f9fa !important;
  color: #78909c;
  border: 2px solid #78909c;
}

.nextBtn:hover {
  background-color: #f8f9fa !important;
  color: #28a745;
  border: 2px solid #28a745;
}


.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

.step.finish {
  background-color: #28a745;
}
</style>
  
  <!-- Your custom styles (optional) -->
  	<?php if( isset($_SESSION['lang'] ) && $_SESSION['lang']== 'ar') 
	{
	echo"<link rel='stylesheet' href='css/bootstrap-rtl.min.css'>"; 
	}
	else{	echo"<link rel='stylesheet' href='css/bootstrap.min.css'>";  }
	?>


</head>
<body>


<!--header-->
<header class="header">
	<ul  class=" nav-c">
	  <li class="nav-item">
	   <a class="nav-link active" href="#!"> <img src="images/agala.jpg" class="img-fluid rounded-circle hoverable"/> </a>
	  </li>
	    <a href="index.php" class="square_btn"> <?=_home ?></a>
	  <li class="nav-item">
		<a class="nav-link" href="aboutus.php"><?=_about?></a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="index-services.php"><?=_services?> </a>
	  </li>
	  

	   <li class="nav-item1 dropdown">
		<!--<a class="nav-link"  rel="en-US" href="#!"><--<i class="fa fa-language" aria-hidden="true"></i>-->
		   <img src="icons/ln.png" class="img-responsive dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown"
		  aria-haspopup="true" aria-expanded="true"/> 
		   <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
		   <li>
		    <!-- Language -->
			<form method='get' action='' id='form_lang' >
			 <select name='lang' onchange='changeLang();' >
		
			<option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
			
			<option value='ar' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar'){ echo "selected"; } ?> >عربي</option>
		
			</select>
			</form>
			</li>
			</ul>
	  </li>
	  
	  
	 </ul>
 
<header><!--End header-->

  

<div class="container">

<div class="row col1">

<div class="col-lg-6 " style="background-image:url('icons/a.jpg'); background-repeat: no-repeat; background-size: 600px  500px;  border-radius: 40px 0 0 20px; border-right:2px solid #000;">

 <div class="card col-md-6" style="margin-top:150px; border-radius:20px; background-color:#f7f7f7;">
  <!-- Card content -->
  <div class="card-body">
    
    <h6 >start by creating as <?=_home ?></h6>
	<h6 style="color:#657001;">   Truck owner <?=_owner ?></h6>
  </div>
</div>
<!-- Card -->

 <div class="card col-md-6" style="margin-top:250px; border-radius:20px; background-color:#f7f7f7;">
  <!-- Card content -->
  <div class="card-body card-body-cascade">

    
    
    <h6>A ready  hava account? </h6>
	
    <!-- Text -->
    <a class="square_btn btn-rounded" style="color:#657001;"  href="login.php"> <?=_login?></a>   


  </div>
</div>
<!-- Card -->
   


</div>


<div class="col-md-6 mb-md-0 mb-3">
      <div class="text-center">
        <img src="icons/icons8-info-208.png" alt="avatar"  style="margin-top:-70px;" class="text-center rounded-circle img-responsive">
	  </div>
        
		
<form id="regForm" method="post" class="form-with-stepper">
				
				<div class="tab">
				
				  <!-- Material input -->
				   <div class="md-form">
				  <div class="row">
				  <div class="col-md-6">
				 
				  
					<input type="text" id="form1" class="form-control"  name="fname">
					<label for="form1"> <?=_Firstname?></label>
					</div>
					<div class="col-md-6">
					
					<input type="text" id="form1" class="form-control" name="lname">
					<label for="form1"><?=_Lastname?></label>
					</div>
					</div>
				  </div> 

				  
				 <div class="md-form">
					<input type="tel" id="form1" class="form-control"  name="phone">
					<label for="form1"><?=_phone?> </label>
					
				   </div>
				  
                   <div class="md-form mb-5">
					    
					  <input type="text"  name="uname"id="form3" class="form-control validate">
					  
					  <label data-error="wrong"  for="form3"><?=_username?></label>
					  <!--<i class="fa fa-user" aria-hidden="true"></i>-->
					  
					</div>
				 
				  <div class="md-form">
					<input type="email" id="form1"  class="form-control" name="email">
					<label for="form1"> <?=_Email ?></label>
				  </div>
				  
				
				  
				  <div class="md-form">
					<input id="form1" class="form-control"  name="password" type="password" required>
					<label for="form1"> <?=_Password?></label>
				  </div>
				   

				</div>
				<div class="tab">
				 
				  <!-- Material input -->
				 

				  
				 
				  <div class="md-form">
					<input type="text" id="form1" class="form-control"  name="company_name" required>
				    <label for="form1"><?=_rcompanyname?></label>
				  </div>
				  <div class="md-form">
					<input type="text" id="form1" class="form-control"  name="companyId">
					<label for="form1"> <?=_companyId?></label>
				  </div>
				  <div class="md-form">
					<input type="text" id="form1" class="form-control" name="companyNo">
					<label for="form1"> <?=_companyRigester?></label>
				  </div>
				  
				  <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember"> <?=_accept ?></label>
            </div>
					

                 <div style="overflow:auto;">
				  <div class="float-right">
			
					
				    <button class=" btn-rounded nextBtn" type="submit" id="nextBtn"
                          onclick="nextPrev(1)" name="add"> <?=send ?></button>
				  </div>
				  </div>					
			</div>
				
				 
			
		    
				
				<div style="text-align:center;margin-top:40px;">
				  <span class="step"></span>
				  <span class="step" id="nextBtn"
                          onclick="nextPrev(1)" ></span>
				
				</div>
			
			
			
			  </form>
			  
			 <div class="container registration-successful">
				<div class="text-center ">

				  <h2 class="text-center display-4 mt-4 font-weight-bold"><?php echo$message;?></h2>

				</div>
			  </div>
					
			  
			  
			  
			    
				
				
				
			  





</div><!--End Columon-->

</div>
</div>

 
 

  


 <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  
   <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>

	
    let currentTab = 0;
    showTab(currentTab);

    function showTab(number) {
      let $tabs = $('.tab');
      let $openTab = $($tabs[number]);
      let $prevBtn = $('#prevBtn');
      let $nextBtn = $('#nextBtn');

      $openTab.css("display", "block");

      number == 0 ? $prevBtn.css("display", "none") : $prevBtn.css("display", "inline");
      number == ($tabs.length - 1) ? $nextBtn.text("Submit") : $nextBtn.text("Next");

      fixStepIndicator(number);
    }

    function fixStepIndicator(number) {
      $steps = $('.step');
      $currentStep = $($steps[number]);
      $steps.each(function (e) {
        $this = $(this);
        $this.removeClass('active');
      })
      $currentStep.addClass("active");
    }

    function nextPrev(number) {
      let $tabs = $('.tab');
      //   (number == 1 && !validateForm()) ? (return false) : "";
      if (number == 1 && !validateForm()) return false;
      $($tabs[currentTab]).css("display", "none");
      currentTab = currentTab + number;
      if (currentTab >= $tabs.length) {
		    $("#regForm").submit();
        $('#regForm').css('display', 'none');
        $('.registration-successful').css('display', 'block');
        return false;
      }
      showTab(currentTab);
    }

    function validateForm() {
      let $tabs = $('.tab');
      let $currentTabInputs = $($tabs[currentTab].getElementsByTagName("input"));
      let i = 0;
      let valid = true;
      $currentTabInputs.each(function (e) {
        let $currentTabInput = $($currentTabInputs[e])
        if ($currentTabInput.val() == "") {
          $currentTabInput.addClass('invalid');
          valid = false;
        }
      })
      valid ? $($('.step')[currentTab]).addClass('finish') : false;
      return valid;
    }
function changeLang(){
  document.getElementById('form_lang').submit();
 }
</script>




</body>
</html>