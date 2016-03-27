$.support.transition = false;

(function($) { 

	$( document ).ready(function() {

		$(".nav li").on("click", function(){
			// alert('hello');
			$(".nav li").removeClass("active");
			$(this).parent().addClass("active");
		});

		$(".main-nav button").on("click", function(){
			$(".main-nav nav-container navbar-collapse").removeClass('in');
		});

	});

	$(window).load(function() {    

	    var windowHeight = $(window).height()-50;
		$('#single-equipment').parent('html').css({"color": '#050505' });
	});
	
	$('bs-navbar-collapse').collapse({
	  toggle: false
	});

})(jQuery);