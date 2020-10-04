</body>
</html>
<script src="<?php echo base_url('js/jquery-1.12.4.js');?>"></script>
<script src="<?php echo base_url ('js/wow.min.js');?>"></script>
  	<script src="<?php echo base_url('js/ui/jquery-ui.js');?>"></script>
	<script>
		$(function(){
		  new WOW().init(); 
		});
		$(document).ready(function() {
		  //toggle the component with class tag-data
		  	$(".tag").click(function() {
			    if ($('.action-body').is(':visible')) {
			      $(".action-body").slideUp(300);
			      $(".plusminus").text('+');
			    }
			    if ($(this).next(".action-body").is(':visible')) {
			      $(this).next(".action-body").slideUp(300);
			      $(this).children(".plusminus").text('+');
			    } else {
			      $(this).next(".action-body").slideDown(300);
			      $(this).children(".plusminus").text('-');
			    }
		  	});

		  	$('.lifting-list li a:not(:first)').addClass('inactive');
			$('.lifting-data').hide();
			$('.lifting-data:first').show();
			    
			$('.lifting-list li a').click(function(){
			    var t = $(this).attr('id');
			  if($(this).hasClass('inactive')){ //this is the start of our condition 
			    $('.lifting-list li a').addClass('inactive');           
			    $(this).removeClass('inactive');
			    
			    $('.lifting-data').hide();
			    $('#'+ t + 'd').fadeIn('slow');
			 }
			});

			 $(".scroll li a").on('click', function(event) {
			 	$("#nav").hide();

			    if (this.hash !== "") {
			      	event.preventDefault();
			    	var hash = this.hash;
				    $('html, body').animate({
				    	scrollTop: $(hash).offset().top
				    }, 800, function(){
				    	window.location.hash = hash;
				    });
			    }
		  	});


		});

		function topNavabar() {
		  if ($("#nav").is(':visible')) {
		   	$("#nav").hide();
		  } else {
		  	$("#nav").show();
		  }
		}
	</script>