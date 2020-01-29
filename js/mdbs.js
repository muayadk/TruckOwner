
	 
	 $(document).ready(function(){
		 
	 });
	 $('#tx1').click(function() {
		 
	 $('.main_shower').load('addtruck.php');
		
		$('.tx1').addClass('rotate-0');
		 $('.tx2').removeClass('rotate-0');
		  $('.tx3').removeClass('rotate-0');
	 return false;
		
	});

	$('#tx2').click(function() {

		 $('.main_shower').load('managedriver.php');
		  $('.tx2').addClass('rotate-0');
		   $('.tx1').removeClass('rotate-0');
		 //$('.tx1').toggleClass('rotate-90');
		 $('.tx3').removeClass('rotate-0');
		
		 return false;
		 
		 
	});

	$('#tx3').click(function() {
		$('.main_shower').load('sumarypaymentdriver.php');
		 $('.tx3').addClass('rotate-0');
		 $('.tx1').removeClass('rotate-90');
		//$('.tx1').toggleClass('rotate-0');
		$('.tx2').removeClass('rotate-0');
	return false;
	});
