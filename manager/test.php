
<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "testing");
$query = "SELECT * FROM account";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", purchase:".$row["purchase"]."}, ";
}
$chart_data = substr($chart_data, 0, -1);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | How to use Morris.js chart with PHP & Mysql</title>
   <link rel="stylesheet" href="css/morris.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mdb.min.css">
 <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/raphael-min.js"></script>
  <script type="text/javascript" src="js/morris.min.js"></script>
  <!--script-->
<script src="js/mdb.min.js">  </script>
 </head>
 <body>
  <br /><?php echo "good". $chart_data;?><br />
  <div class="row">
<div class="col-md-3">  
 <div class="container" style="width:500px;">
	<h4> Summary Activity of Truck Owner </h4>
	   <div id="chart"></div>
  </div>
  </div>
  <div class="col-md-6">  
  <div style="height: 50vh">
    <div class="flex-right flex-column">
		<h4> Summary Activity of User </h4>
              <canvas id="pieChart"></canvas>
    </div>
  </div>
  </div>
  </div>
    </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'purchase'],
 labels:['Profit', 'Purchase'],
 hideHover:'auto',
 stacked:true
});
</script>
<script>
//pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
type: 'pie',
data: {
labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
datasets: [{
data: [300, 50, 100, 40, 120],
backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
}]
},
options: {
responsive: true
}
});

</script>

