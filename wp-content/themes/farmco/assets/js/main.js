$.support.transition = false;

(function($) { 

	$( document ).ready(function() {

		$(".nav a").on("click", function(){
			$(".nav").find(".active").removeClass("active");
			$(this).parent().addClass("active");
		});

		$(".main-nav button").on("click", function(){
			$(".main-nav nav-container navbar-collapse").removeClass('in');
		});

	});

	$(window).load(function() {    

	    var windowHeight = $(window).height()-50;
		$('#single-equipment').css({"height":  windowHeight});
	});
	
	$('bs-navbar-collapse').collapse({
	  toggle: false
	});

})(jQuery);