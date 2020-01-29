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
		<tr class="th-sm">
		<th class="th-sm" colspan="2"> Name </th> 
		
		<th class="th-sm">Incomepayment </th>
		<th class="th-sm">action</th>
		
		</tr>
		</thead>
		<tbody>
			<?php 
			 include('../mywork/work.php');
			   $obj=new works();
				$dr=$obj->getDriverPayment();
				foreach($dr as $d )
				{
				echo"<tr>";
				echo"<td colspan=''> <img src='../images/".$d['img']."' class='img' width='70' />"."</td>";
				echo"<td>".$d['username']."</td>";
			
			  
				echo"<td >".$d['paymet']."</td>";
				echo"<td><a href='?sw=smary'>showview</a></td>";
				echo"</tr>";
				}
					
			?>
			</tbody>
			
			</table>

	
	</body>
	</html>