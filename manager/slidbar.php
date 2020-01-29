<html>
<head>
	
	
</head>
	
<body>
<aside class="main-sidebar">  
	<section class="sidebar">
			 
		  <div class="gnav">
		  <ul  class="n">
			<li class="n1" id="tx1">
			 <a href="?sw=vieworder"><img src="../icons/ca.png" class="avatar" /> 
			 		     <br> &nbsp; &nbsp;<span style="font-size:14px; "> View Order</span></a>
		   </li>
		  <li class="nl" id="tx2">
			<a href="?sw=managecustomer" id="tx2"><img src="../icons/md.png" id="tx2" class="avatar"  /></a>
			 <br>&nbsp;  &nbsp;  <span style="font-size:14px; ">managecustomer</span>
		  </li>

		  <li class="nl" id="tx3">
			 <a  href="?sw=managetruckowner" ><img src="../icons/py.png" id="tx3" class="avatar" /></a>
			 <br> &nbsp; &nbsp;  <span style="font-size:14px;"> ManageTruckOwner</span>
		  </li>
		  
		</ul>
       </div>
		
  <div class="rside">
		<ul class="u2">
		<li >
		
			<img  class="tx1" src="../images/1.jpg"/></li>
	
		<br>
		<li >
		<img  class="tx2" src="../images/2.jpg" />
		</li>
		<br>
		<li >
		<img class="tx3" src="../images/3.jpg" />
		</li>
		</ul>
       </div>
	   
	   

<!-- Modal: modalAbandonedCart-->
<div class="modal fade right" id="modalsid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-side modal-top-right " role="document" style="padding-top:66px;">
    <!--Content-->
    <div class="modal-content">
      
    
  
      <!--Body-->
      <div class="modal-body">
			 <div class="dropleft">
		      <a  class="dropdown-toggle px-3" href="#" id="sid"></a>
			</div>
      </div>

      <!--Footer-->
      <div class="footer-modal" style="height:650px;">
          	 <?php  
				  include('../mywork/work.php'); 
				  $obj=new works();
				 $u=$obj->getTruckonerinformation($_SESSION['user']);
				 ?>
			<ul style="list-style:none;">
			 
					<?php
					foreach($u as  $a)
					{
					
							
					?>
	     
			   <li class="pen">
				  <i class="fas fa-pencil-alt " style="color: goldenrod;"></i>
			   </li>
			   
				  <li>
	     
	                <div class="row">
					  <div class="col-md-8 hidden-xs">
						<span><b> 1. <?php echo$a['first_name']."&nbsp; &nbsp;".$a['last_name'];?> </b></span>
						</div>
					 
					   <div class="col-md-4">
							<img class="avatar"src="../icons/<?php echo$a['img'];?>"/>
						</div>
				
				  </div>
				
				</li>
				 
				
				 <li class="pen">  
				      <i class="fas fa-home" style="color:goldenrod;"></i>
				   </li>
				   
				  
				    <li>
				      <div class="pull-center text-center">
						  <hr class="hr1"> </hr>
						
						 <hr class="hr1"> </hr>
							
						 <hr class="hr1"> </hr>
				     </div>
				   </li>
				
				   <li>
				     <div class="pull-center text-center">
				   
						   <b class="text-center">
						  
						    phone. </b>
							
							<br/>
							 <h4 style="background-color:#cba02b; margin-left:90px; margin-right:70px;"><?php echo$a['phone']; ?></h4>
							<br/>
							 <b class="text-center">email.</b>
							<br/>
							 <h4 style="background-color:#cba02b;  margin-left:90px; margin-right:70px;"><?php echo$a['email'];?></h4>
							<br/>
						    <b class="text-center">company Name.</b>
						      </br>
							 <h4 style="background-color:#cba02b;  margin-left:90px; margin-right:70px;"><?php echo$a['company_name'];?></h4>
							<br/>
					  
				      </div>
				   </li>
				   
				
					<?php }?>
				
			</ul>
			
					<div class="pull-center text-center">
					  <a class="btn  btn-rounded waves-effect" href="?sw=sendowneremail"  id="btn-f">send email <i class="fas fa-envelope"></i></a>
					</div>
      </div>
    </div>
    <!--/.Content-->
	</div>
  
</div>
<!-- Modal: modalAbandonedCart-->

  </section>
 </aside>
 <script>

	 $('#tx1').click(function() {
		 
	 $('.main_shower').load('vieworder.php');
		
		$('.tx1').addClass('rotate-0');
		 $('.tx2').removeClass('rotate-0');
		  $('.tx3').removeClass('rotate-0');
	 return false;
		
	});

	$('#tx2').click(function() {

		 $('.main_shower').load('managecustomer.php');
		  $('.tx2').addClass('rotate-0');
		   $('.tx1').removeClass('rotate-0');
		 //$('.tx1').toggleClass('rotate-90');
		 $('.tx3').removeClass('rotate-0');
		
		 return false;
		 
		 
	});

	$('#tx3').click(function() {
		$('.main_shower').load('managetruckowner.php');
		 $('.tx3').addClass('rotate-0');
		 $('.tx1').removeClass('rotate-90');
		//$('.tx1').toggleClass('rotate-0');
		$('.tx2').removeClass('rotate-0');
	return false;
	});
	</script>
 </body>
 </html>
 



		
