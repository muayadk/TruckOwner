<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/DataTable.css">
 <style>

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
      <th class="th-sm"> Name
      </th>
      <th class="th-sm">Last Activity
      </th>
      <th class="th-sm">E-mail
      </th>
      <th class="th-sm">Phone
      </th>
      <th class="th-sm">ID
      </th>
	  <th class="th-sm">Company Name
      </th>
      <th class="th-sm">
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
	        if(isset($_GET['del']))
		   {
			  $d=$_GET['del'];
			 
			  if($d==1)
				  
			   echo"<div class='text-center alert-success'> <h2 class='text-center display-4 mt-4 font-weight-bold'> delete owner successful!!</h2></div></div>";
			   if($d==0)
				   echo"<div class='text-center alert-danger'> <h2 class='text-center display-4 mt-4 font-weight-bold'> fail delete owner!! </h2></div></div>";
			
			  
				
			}
          require_once('../mywork/work.php');
			    $obj=new works();
				$gon=$obj->getowner();
				foreach($gon as $o )
				{
?>

    <tr>

      <td><img src="../images/<?php echo $o['img'];?>" alt="Card image cap" class="rounded-circle"  width="60" height="60"> <font color="dark orange">  <?php echo $o['username'];?></font></td>
      <td> <i class="far fa-clock"></i>----------------</td>
      <td><?php echo $o['email'];?></td>
      <td><?php echo $o['phone'];?></td>
	  	  <td><?php echo $o['company_no'];?></td>
	  <td><?php echo $o['company_name'];?></td>
      <td><a href="#">Show all Order</a>
      </br> 
	 <div class="text-center" ><a href="?sw=deletetruck&&id=<?php echo$o['truckowner_id']; ?>"> <i class='fas fa-trash'></i></a> </div>

      </td>
 
   </tr>
	
    <?php
    } 
    ?>  
  </tbody>

</table>
  




</body>
</html>