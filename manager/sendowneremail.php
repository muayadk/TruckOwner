
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

	<style>
	ul.n{
    
    list-style:none;
	list-style-position: overflow;
    margin: 0;
    padding: 0;
    padding: 0;
	}
	</style>
	 <body>
	 
	 <?php 
			   if(isset($_POST["send"])) {
	
	            
				$to = "moayadabdo0@gmail.com";
				
				$subject =$_POST['subject'];
				
				$headers = "MIME-Version: 1.0" . "\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\n";
				$headers .="From: Nano Website Message <no-reply@domain.com>\r\n";
				
				$body ="<!DOCTYPE html>
						<html dir = 'ltr'>
						<head>
						<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
						
						</head>
						<body>
					
							<center>
							<h2>Name</h2>". $_POST['name']."<br/>
							<h2>tel:</h2> ". $_POST['tel']."<br/>
							<h2>Email</h2><br/>". $_POST['email']."<br/>
							<h2>Email</h2><br/>". $_POST['country']."<br/>
							<h2>Message</h2><br/>".$_POST['message']."			   
							</center>
						</body>
						</html>";
               
			  if(mail($to, $subject, $body, $headers))
			  {
				    $message ='<h3 class="alert-success" style="color:green">تم ارسال الرسالة بنجاح'.'</h3>'; 
			  } 
	          else
			  {
		            $message = '<h3 class="alert-danger">خطا في ارسال الرسالة'.'</h3>'; 
			  }
	
  }
?>
<div class="container">
	<div class="row my-5 justify-content-center">
	 <div class="col-lg-12">
		  <div class="card">
		  <div class="card-title">
		   &nbsp; &nbsp;Inbox
		  </div>
		  
		  <div class="card-body">
		    <div class="row">
			
			 <div class="col-md-6 my-1">
				 <ul class="n">
				  <li class="n1">inbox &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; 5</li>
				  <li class="n1"> Sent</li>
				  <li class="n1">Drafits </li>
				  <li class="n1">Trash </li>
				  <li class="n1"> imortant &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 2</li>
				  <li class="n1">  Spam</li>
				  <li class="n1">  Started</li>
				 </ul>
				 
				  <br>
			   <br>
			   <ul type="start">
			    <li > flage</li>
				  <li >o </li>
				  <li >p </li>
			  </ul>
			   </div>
			  
			   
			   <div class="col-md-6 my-1">
			  

	
	<?php 
		if(isset($message))
		{
			echo"<div >".$message."</div>";
		}
		
		?>	
	
			   
			   <form class="form-horizontal" method="post">
			   
			            <div class="md-form">
						 <input type="text" id="form-email" name="email" class="form-control" required>
						<label for="form-email">To</label>
					  </div>
					  
					  <div class="md-form">
						 <input type="text" id="form-email"  placeholder="moayadabdo0@gmail"  class=" form-control" required>
						<label for="form-email">CC</label>
					  </div>
					  
			          <div class="md-form">
						<input type="text" id="form-Subject" name="subject" class="form-control">
						<label for="form-Subject">Subject</label>
					  </div>
					
					
					<div  class="md-form span8 tip"  id="form-Subject">
					<textarea  name="message"  placeholder="" rows="6" cols="35">
					</textarea>  
					</div>
					<div class="pull-right">
					<input type="submit" class="btn btn-round" name="send" value="Send">
			        </div>
			   </form>
			   </div>
			
			
			</div><!--end row-->
		  </div><!--end card-body-->
		  
		  </div><!--end card-->
	</div>
	
	
	</div><!--end row-->
</div><!--end container-->
</body>