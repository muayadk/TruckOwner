<html>
<head>
	
	
</head>
	
<body>
<aside class="main-sidebar">  
	<section class="sidebar">
			 
		 <div class="gnav">
		  <ul  class="n">
		  <li  id="tx1">
			 <a href="?sw=addtruck"><img src="../icons/addtruck3.jpg"  id="tx1" class="avatar" /> 	
             <br> &nbsp;  &nbsp;   <span style="font-size:14px; "> Add Truck</span></a>			 
		  </li>
		
		  <li  class="nl" id="tx2">
			<a  href="?sw=managedriver" ><img src="../icons/md.png" id="tx2" class="avatar"  />
					  <br>&nbsp;  &nbsp;  <span style="font-size:14px; ">Manage Driver</span></a>
		  </li>

		  <li id="tx3">
			<a  href="?sw=sumarypaymentdriver"><img src="../icons/payment3.jpg" id="tx3" class="avatar" />
			 <br> &nbsp; &nbsp;  <span style="font-size:14px;"> Payment</span></a>
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
<div class="modal fade right" id="modalsid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true" data-backdrop="false">
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
			
					<div   style="margin-left:30px;">
					  <a href="logout.php" class="btn btn-sucsses btn-xs" ><i class="fas fa-power-off"></i></a>
					</div>
      </div>
    </div>
    <!--/.Content-->
	</div>
  
</div>
<!-- Modal: modalAbandonedCart-->

  </section>
 </aside>


  

 <script type="text/javascript" src="../js/mdbs.js"></script>
 </body>
 </html>
 



		
