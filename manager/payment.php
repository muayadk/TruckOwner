<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <!-- DataTables CSS -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
<!-- DataTables Select CSS -->
<link href="css/addons/datatables-select.min.css" rel="stylesheet">

</head>
<body>

  <!-- Start your project here-->  
 
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm"> Name
      </th>
      <th class="th-sm">Total Income
      </th>
      <th class="th-sm">
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="images/p1.jpg" alt="Card image cap" class="rounded-circle" alt="Cinque Terre" width="60" height="60"><font color="dark orange"> Tiger Nixon</font></td>
    
	    <td>2011/04/25</td>
      <td><a href="#"><font color="white brown">View Details</font></a></td>
    </tr>
	
    <tr>
        <td><img src="images/p1.jpg" alt="Card image cap" class="rounded-circle" alt="Cinque Terre" width="60" height="60"> <font color="dark orange">Tiger Nixon</font></td>
	    <td>2011/04/25</td>
      <td><button " type="submit" tabindex="6" name="manage" value="">:</button></td>
    </tr>
    
  </tbody>
  <tfoot>
     <tr>
      <th class="th-sm"> Name
      </th>
      <th class="th-sm">Total Income
      </th>
      <th class="th-sm">
      </th>
    </tr>
  </tfoot>
</table>
  
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
   <!-- End your project here-->
  <!-- DataTables JS -->
 <script type="text/javascript" src="js/addons/datatables.min.js"></script>
<!-- DataTables Select JS -->
 <script type="text/javascript" src="js/addons/datatables-select.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

   
   <script>
	
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
  </script>

</body>
</html>