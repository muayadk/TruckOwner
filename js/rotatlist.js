$(document).ready(function () {
	  
	  $('#btn-f').click(function(){
		    
		   $('.gnav').hide();
		  $('#modalsid').show();
		   
	  });
	  
	   $('#sid').click(function(){
		 
		   $('.gnav').show();
		   $('#modalsid').hide();
		   
	  });
	 });
	 
	 $('#tx1').click(function() {
		$('.tx2').toggleClass('rotate-0');
		 $('.tx3').toggleClass('rotate-0');
		
	});

	$('#tx2').click(function() {
		$('.tx1').toggleClass('rotate-0');
		 $('.tx3').toggleClass('rotate-0');
	
	});

	$('#tx3').click(function() {
		$('.tx1').toggleClass('rotate-0');
		 $('.tx2').toggleClass('rotate-0');
		
	});
	