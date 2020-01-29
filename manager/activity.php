<?php 
		include('../mywork/works.php');
		 $statment='';
	if(!empty($_POST["drive_id"])) 
		{
		 $id=intval($_POST['drive_id']);
        $query="SELECT driver.username ,driver.img ,COUNT(bayment.order_id) as CountActivty ,SUM(rate.rate) as Rate
			FROM order_customer JOIN  rate ON order_customer.order_id=rate.order_id 
			JOIN driver ON order_customer.drive_id=driver.drive_id 
			JOIN bayment on order_customer.order_id=bayment.order_id 
			WHERE driver.drive_id='$id'";
		 $statment=$con->prepare($query);
			$statment->execute(
			array('$id')
			);
		$result=$statment->fetchAll();
			
			foreach($result as $row)
         
		 {
		  ?>
    
	<tr>
	<th colspan="2"><?php echo"<img class='img' src='../images/".htmlentities($row['img'])."'   alt='imges driver' /> "; 
	 echo"&nbsp; &nbsp"; echo htmlentities($row['username']); ?> </th>
	</tr>
	<tr>
	<th>  count <?php echo htmlentities($row['CountActivty']); ?></th>
	<th>  Rate <?php echo htmlentities($row['Rate']); ?></th>
	</tr>
	
		<script>
//doughnut
var ctxD = document.getElementById("doughnutChart").getContext('2d');
var myLineChart = new Chart(ctxD, {
type: 'doughnut',
data: {
labels: ["Activity", "Rate"],
datasets: [{
data: [<?php echo htmlentities($row['CountActivty']); ?>, <?php echo htmlentities($row['Rate']); ?>],
backgroundColor: ["#F7464A", "#46BFBD"],
hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
}]
},
options: {
responsive: true
}
});

</script>
	
	<?php
	
	
		 }
		}
		?>
	