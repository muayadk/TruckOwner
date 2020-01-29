
<!DOCTYPE html>
<html>
<head>
<title>
</title> 
   
   
<link rel="stylesheet" href="../css/morris.css">

  <script type="text/javascript" src="../js/raphael-min.js"></script>
  <script type="text/javascript" src="../js/morris.min.js"></script>


    <script type="text/javascript">
function getActivity(val) {
	$.ajax({
	type: "POST",
	url: "activity.php",
	data:'drive_id='+val,
	success:function(data){
		$("#username").html(data);
		$("#doughnutChart").html(data);
	}
	});
}
  </script>

</head>
<body>
 <!-- Start your project here--> 
  <?php
  // $con=mysqli_connect("localhost","root","","agala") or die("error connection");
	
  
   /* $sql="SELECT tr.username , ord.order_price ,ord.order_id from rate r JOIN driver d ON d.drive_id = r.drive_id
JOIN truckowner tr ON tr.truckowner_id = d.truckowner_id
JOIN order_customer ord ON ord.order_id = r.order_id 
WHERE MONTH(ord.date_trip) = MONTH(CURRENT_DATE())";
 $res=mysqli_query($con,$sql) or die(mysqli_error($con));*/
 
    //require_once('../mywork/work.php');
	 $res=$obj->getSummaryDriverIncom();
	$chart_data = '';
	foreach($res as $row)
	{
		$pro=$row["order_id"]*100;
		
	 $chart_data.="{ username:'".$row["username"]."',Income:".$row["order_price"].",Activity:".$pro."},";
	}
	$chart_data=substr($chart_data, 0,-1);
	//echo "good".$chart_data;

	?>
<div class="row">
<div class="col-md-6">
  
 <div class="container" style="width:500px;">
	<h4> Summary Activity of Truck Owner </h4>
	  <div class="card" style="width:500px; height:400px;">
	    <div id="chart" width="50%"></div>
	   </div>
  </div>
  </div>

  <div class="col-md-6"> 
		<h4> Summary Activity of User </h4>  
		  <div class="card" style="width:500px; height:400px;">
		  
		        <div class="row">
					   <div class="col-md-6">
				  
				  <table  id="username" name="username">
				  </table>
				  </div>
			
			
				  <div class="col-md-6">
				  <form  method="post" enctype="multipart/form-data">
				   <select name="drive_id"  class="form-control"  onChange="getActivity(this.value);">
			
					<?php
					    $d=$obj->getAllDriver();	
					    foreach($d as $row)
						{
					   echo'<option  value="'.$row["drive_id"].'">'.$row["username"].'</option>';
					   } 
					   ?>
					</select>
						 </form>
				 </div>
				 
				
			  </div>
			   
				
			  <div style="height: 50vh">
				<div class="flex-right flex-column">
					
						  <canvas id="doughnutChart"></canvas>
				</div>
			  </div>
		  
		  </div><!--end card-->
  </div> <!-- End your project here-->
</div>

  
<script>


Morris.Bar({
 element : 'chart',
 <!--data:[<?php echo $chart_data; ?>],-->
 data:[<?php echo $chart_data; ?>],
 xkey:'username',
 ykeys:['Income', 'Activity'],
 labels:['Income', 'Activity'],
 hideHover:'auto',
 stacked:true
});
</script>
  


<script>
/*$(document).ready(function (){
	
	$('#drive_id').change(function(){
		
		var username=($this).val();
		
		$.ajax({
			url:activity.php,
			method:"POST",
			data:{username:username},
			
			success: function(data) {
			$("#username").html(data);
			alert('username');
				});
	});
	
});*/
</script> 
</body>
</html>
