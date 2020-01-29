<?php  session_start(); ?>
<html>
<head>
<script>
     function ImageShow(imgeUpload, previewImage) {
            if (imgeUpload.files && imgeUpload.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(previewImage).attr('src', e.target.result);
                }
                reader.readAsDataURL(img\eUpload.files[0]);

            }
        }
		
			
    </script>
	

</head>
<body>

<div class="container">
         
 <?php 
     require('../mywork/work.php');
    $obj =new works();

        

		  	$message='';
		   if(isset($_POST['adddriver']))
		   {
			   
			   //driver data
			   $u=$_POST['driver'];
			   $p=$_POST['password'];
			   
			    $m=$_SESSION['user'];
			    $sql="SELECT `truckowner_id` FROM `truckowner` WHERE username='$m'";
			    $query=mysqli_query($driver->con(),$sql);
			    $row=mysqli_fetch_array($query);
				$to=$row['truckowner_id'];
				
			   $ti=$_POST['truck_id'];
			  
			   $a=$_POST['address'];
			   $po=$_POST['phone'];
			   $e=$_POST['email'];
			//`image_id`
	
			
			/*// truck data
			$tno=$_POST['id'];
			$p=$_POST['price'];
			
			"INSERT INTO `truck`(`truck_no`, `truckowner_id`, `truck_type`, `price`);
			$truck=$driver->addTruck($ton,$to,$);*/
			$img=$_FILES['img']['name'];
				
  				$m=move_uploaded_file($_FILES["img"]["tmp_name"],"../Images/".$img)or die("غلط في تحميل الصورة");
				if($m)
					{
					echo"ok add img";
					}
					else
					{
						echo"failer add image";
					}
			
			
	 
		     $d=$obj->addDriver($u,$p,$to,$ti,$a,$po,$e,$m);
			 if($d)
				$message.=" seccess full inserting data!! ";
			
		   }
		  ?>

    
	    <div class="col-lg-7 mb-lg-0 mb-3" style="background-color:#eee;" >


   <h3> اهلا وسهلا !<?php echo ucfirst($_SESSION['user']); ?> </h3>

 


      <!-- Form with header -->
     
        <div class="card-body">
    
          <!-- Body -->
		  <form  method="post" enctype="multipart/form-data">
		  <div class="row">
		  <div class="col-md-8">
		  
				  <div class="md-form">
					<input type="text" id="form-name" name="driver"  class="form-control" required>
				    <label for="form-name"> Truck Driver Name </label>
				  </div>
		  
				  <div class="md-form">
				   
					<input type="text" id="form-Subject" name="phone" class="form-control">
				   <label for="form-Subject">Phone Namber</label>
				  </div>
				  
				    <div class="md-form">
				   
						<input type="text" id="form-Subject" name="address" class="form-control">
						<label for="form-Subject"> address</label>
					  </div>
					  
					   <div class="md-form">
						 <input type="text" id="form-email" name="email" class="form-control" required>
						<label for="form-email">Email</label>
					  </div>
					  
					  <div class="md-form">
						 <input  class="form-control"  name="password" type="password" required>	
						 <label for="form1">Password</label>
					
					 </div>
			
					  <div class="md-form">
					 
						  <select name="truck_id"  class="form-control">
						  <option >---Select Truck Type--</option>
						  <?php 
							$sql="SELECT * FROM truck";
							$query=mysqli_query($obj->con(),$sql);
							while($tr=mysqli_fetch_array($query))
							{	
							?>
							<option value="<?php echo$tr['truck_id']?> "> <?php echo$tr['truck_type'];?> </option>
							<?php
							 }	
							?>
							</select>
						
					    </div>
					  </div>
					  
					   
						
				   <div class="col-md-4">
				    <div class="container registration-successful">
							<div class="text-center">
							  <h2 class="text-center display-4 mt-4 font-weight-bold"><?php echo$message;?></h2>
							</div>
						</div>
				   
				   
					  <div class="file-field">
					 
						 <div class="d-flex justify-content-center" style="width:90%; height:70%; ">
						  <div class="btn  btn-rounded"  style="background:#ba111100;">
							<img src="../Images/agala.jpg"  class="rounded-circle z-depth-1-half avatar-pic img"  style="height:100px; width:90px; margin-left:-20px;" id="Imagepreview" />
							<input type="file" name="img"  id="image" onchange="ImageShow(this,document.getElementById('Imagepreview'))" required>
						  </div>
						</div>
						
				   </div>
				  </div>
				
			    <div class="text-left">
				<button class="btn btn-warning btn-rounded" type="submit" name="adddriver">Add</button>
				<button class="btn btn-brown btn-rounded" type="reset">cancel</button>
			  </div>
			  
		    </form>
			
		 </div>
		  
		  
        </div>
      </div>
     
	

	 </div>



</body>
</html>