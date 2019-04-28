(function($){

	$(document).ready(function() {
		
		wp.customize('footer_licence', function(value){
			value.bind(function(newval) {
				$('.footer-licence').html(newval);
			});
		});


	});

})(jQuery);
