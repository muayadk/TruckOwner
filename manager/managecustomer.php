<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/DataTable.css">

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
      <th class="th-sm">Cusomer Name
      </th>
      <th class="th-sm">Address
      </th>
      <th class="th-sm">Last Activity
      </th>
      <th class="th-sm">Last Order
      </th>
      <th class="th-sm">Phone No
      </th>
      <th class="th-sm">
      </th>
    </tr>
  </thead>
  <tbody>
  <?php
			 if(isset($_GET['del_order']))
			{
			  $d=$_GET['del_order'];
			  $out='';
			  if($d==1)
				  $out.="delete order successful";
			   if($d==0)
				  $out.="fail delete order!!  ";
			  
				 echo"<div class='container notifay'> <div class='text-center'> <h2 class='text-center display-4 mt-4 font-weight-bold'>".$out."</h2></div></div>";
			 }
			 
              require_once('../mywork/work.php');
			     $obj=new works();
				$mcu=$obj->getmanagecustomer();
				foreach($mcu as $c)
				{
?>

    <tr>

      <td> <i class="fas fa-circle" ></i> <img src="../images/<?php echo$c['img'];?>"  class="rounded-circle" alt="Cinque Terre" width="60" height="60" /> <i class="far fa-circle"> </i> &nbsp; &nbsp; <?php echo$c['username'];?></td>
        <td><?phpecho$c['address'];?></td>
      <td> <i class="far fa-clock"></i> <?phpecho$c['date_trip'];?></td>
    
	     <td> <i class="fas fa-map-marker-alt"></i> <?php echo$c['location_from']; ?> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;
      <i class="fas fa-map-pin"></i>  <?phpecho"&nbsp;".$c['location_to'];?></td>
	  <td><?php echo $c['phone'];?></td>
      <td>
		
		<div class="text-center"> show all <br>
		<a href="?sw=deleteorder&&id=<?php  echo $vo['order_id']; ?>" ><i class="far fa-trash-alt"></i><a></div>
      </td>
 
   </tr>
	
     <?php
    } 
    ?> 
  </tbody>
    </tbody>
  <tfoot>
    <tr>
     <th>Cusomer Name
      </th>
      <th>Driver Name
      </th>
      <th>Location
      </th>
      <th>Date
      </th>
      <th>Driver Phone
      </th>
      <th>
      </th>
    </tr>
  </tfoot>


</table>
  
</body>
</html>