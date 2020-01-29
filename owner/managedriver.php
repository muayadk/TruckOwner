
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/DataTable.css">
 <style>
 .img{
	  border: 2px solid #c7973c;
		 border-radius: 200px;
   
	height:80px;
	width:80px;
 }
 </style>
<link href="../css/addons/datatables.min.css" rel="stylesheet">
<!-- DataTables Select CSS -->
<link href="../css/addons/datatables-select.min.css" rel="stylesheet">
</head>
<body>



	  
		
		

		
	


		<script src="../js/jq.js"></script>
		<script src="../js/DataTable.js"></script>
		
		<script language="javascript">
				$(document).ready(function() {
					$("#mytable").DataTable();
				} );
		
		</script>
		
  

	  
		
		
<table class="display table-striped table-bordered" id="mytable">
	

		<thead>
		<tr>
		<th colspan="2"> Name </th> 
		<th class="th-sm">LastActivity</th>
		<th class="th-sm">E-mail </th>
		<th class="th-sm">Phone</th>
		<th class="th-sm">ID</th>
		<th class="th-sm">TruckType </th>
		<th class="th-sm"> Action</th>
		</tr>
		</thead>
		<tbody>
			<?php 
			  require_once('../mywork/work.php');
			    $obj=new works();
				$dr=$obj->getAllDriver();
				foreach($dr as $d )
				{
				echo"<tr>";
				echo"<td > <img src='../images/".$d['img']."' class='img' width='70px' /> </td>";
				echo"<td>".$d['username']."</td>";
				echo"<td> <i class='fa fa-clock'></i>  &nbsp; &nbsp;</td>";
			    echo"<td>".$d['email']."</td>";
				echo"<td>".$d['phone']."</td>";	
				echo"<td>".$d['truck_no']."</td>";	
				echo"<td >".$d['truck_type']."</td>";	
				echo"<td > <img src='../icons/del.png'  /></td>";								
				echo"</tr>";
				}
					
			?>
			</tbody>
			
			</table>

	
	</body>
	</html>