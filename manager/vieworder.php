<!DOCTYPE html>
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
				$gvo=$obj->getvieworder();
				foreach($gvo as $vo )
				{
?>

    <tr>

      <td><img src="../images/<?php echo $vo['cimg'];?>"  class="rounded-circle" alt="Cinque Terre" width="60" height="60"><font color="dark orange"> <?php echo $vo['customer'];?></font></td>
      <td><img src="../images/<?php echo $vo['dimg'];?>"  class="rounded-circle" alt="Cinque Terre" width="60" height="60"><font color="dark orange"> <?php echo $vo['driver'];?></font></td>
     <td>
	 <i class="fas fa-map-marker-alt"></i>&nbsp;<?php echo $vo['location_from'];?>
     &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<i class="fas fa-map-pin"></i>&nbsp;<?php echo $vo['location_to'];?></li>
	  </td>
	  <td> <i class="far fa-clock"></i><?php echo $vo['date_trip'];?></td>
	  <td><?php echo $vo['dphone'];?></td>
      <td>
		  <div class="text-center">
		  <a href="#">show all </a><br>
		  <a href="?sw=deleteorder&&id=<?php  echo $vo['order_id']; ?>" ><i class="far fa-trash-alt"></i><a>
		</div>
      </td>
  
   </tr>
	
    <?php
    } 
    ?> 
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