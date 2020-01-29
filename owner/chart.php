<!DOCTYPE html>
<html>
<head>
<title>
</title> 
   
   
<link rel="stylesheet" href="../css/morris.css">

  <!-- MDB icon -->
  <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- DataTables CSS -->
<link href="../css/addons/datatables.min.css" rel="stylesheet">
<!-- DataTables Select CSS -->
<link href="../css/addons/datatables-select.min.css" rel="stylesheet">
 <script type="text/javascript" src="../js/raphael-min.js"></script>
  <script type="text/javascript" src="../js/morris.min.js"></script>
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
 
 
	$res=$obj->getSummaryDriversActivity();
	$chart_data = '';
	foreach($res as $row)
	{
		$pro=$row["order_id"]*100;
		$av=$row["id"]*100;
		
	 $chart_data.="{ username:'".$row["username"]."',Income:".$row["order_price"].",Activity:".$pro.",Availabilty:".$av."},";
	}
	$chart_data=substr($chart_data, 0,-2);
	//echo "good".$chart_data;

	?>
<div class="row">
<div class="col-md-6">
  
 <div class="container" style="width:500px;">
	<h4> Summary Activity of Driver  </h4>
	  <div class="card" style="width:500px; height:400px;">
	    <div id="chart" width="50%"></div>
	   </div>
  </div>
  </div>

  <div class="col-md-6"> 
		<h4> Summary Budget of Driver </h4>  
				  
				  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm"> Name
      </th>
      <th class="th-sm">Total Income
      </th>
     
    </tr>
  </thead>
  <tbody>
    <?php
 require_once('../mywork/work.php');
			    $obj=new works();
				$gon=$obj->getowner();
				foreach($gon as $o )
				{
?>

    <tr>

      <td><img src="../images/<?php echo $o['img'];?>" alt="Card image cap" class="rounded-circle" alt="Cinque Terre" width="60" height="60"><font color="dark orange"> <?php echo $o['username'];?></font></td>
      <td><?php echo $o['phone'];?></td>
    
 <?php
    } 
    ?>  
   </tr>
	
    
  </tbody>
  <tfoot>
    <tr>
      <th> Name
      </th>
      <th>Total Income
      </th>
    
    </tr>
  </tfoot>
</table>
		  
		  </div><!--end card-->
  </div> <!-- End your project here-->
<!-- jQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
   <!-- End your project here-->
  <!-- DataTables JS -->
 <script type="text/javascript" src="../js/addons/datatables.min.js"></script>
<!-- DataTables Select JS -->
 <script type="text/javascript" src="../js/addons/datatables-select.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

   
   <script>
	
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
  </script>
  
<script>


Morris.Bar({
 element : 'chart',
 <!--data:[<?php echo $chart_data; ?>],-->
 data:[<?php echo $chart_data; ?>],
 xkey:'username',
 ykeys:['Income', 'Activity','Availabilty'],
 labels:['Income', 'Activity' ,'Availabilty'],
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
