$(function () {
	
	Application.init ();
	
	$(".number,.currency").numeric();
});


	
(function ($) {

	$.fn.check_required = function () {

		var error = 0;
		$(this).find('.req').each(function () {
			if ($(this).val() == "" || $(this).val() == 0) {
				error++;
				$(this).css({ "border": "1px solid #fd0808" });
				//$(this).css({ "background-color": "#e8bbba" });
			} else {
				$(this).css({ "border": "" });
			}

		});

		if (error > 0) return false;
		else return true;
	}

	 $.fn.show_loading = function (type) {
		var loader = '';
		switch(type) {
			case "small":
				 loader = '<div class="cssload-loader">' +
					'<div class="cssload-inner cssload-one"></div>' +
					'<div class="cssload-inner cssload-two"></div>' +
					'<div class="cssload-inner cssload-three"></div>' +
				'</div>';
			break;
			case "text":
				loader = '<div id="fountainTextG"><div id="fountainTextG_1" class="fountainTextG">L</div><div id="fountainTextG_2" class="fountainTextG">o</div><div id="fountainTextG_3" class="fountainTextG">a</div><div id="fountainTextG_4" class="fountainTextG">d</div><div id="fountainTextG_5" class="fountainTextG">i</div><div id="fountainTextG_6" class="fountainTextG">n</div><div id="fountainTextG_7" class="fountainTextG">g...</div></div>';
			break;
			default: 
				loader = '<div id="spinningSquaresG">' +
					'<div id="spinningSquaresG_1" class="spinningSquaresG"></div>  ' +
					'<div id="spinningSquaresG_2" class="spinningSquaresG"></div>  ' +
					'<div id="spinningSquaresG_3" class="spinningSquaresG"></div>  ' +
					'<div id="spinningSquaresG_4" class="spinningSquaresG"></div>  ' +
					'<div id="spinningSquaresG_5" class="spinningSquaresG"></div>  ' +
					'<div id="spinningSquaresG_6" class="spinningSquaresG"></div>  ' +
					'<div id="spinningSquaresG_7" class="spinningSquaresG"></div>  ' +
					'<div id="spinningSquaresG_8" class="spinningSquaresG"></div>  ' +
				'</div>';
			break;
		}
		$(this).html(loader);
	 }

	$.fn.hide_loading = function () {
		$(this).html("");
	}
})(jQuery);


function action(controller, action){
	var result = BASE_URL + controller

	if(action){
		result += ("/" + action);
	}

	return result;
}


var Application = function () {
	
	var validationRules = getValidationRules ();
	
	return { init: init, validationRules: validationRules };
	
	function init () {
		
		enableBackToTop ();
		enableLightbox ();
		enableCirque ();
		enableEnhancedAccordion ();


		$('.ui-tooltip').tooltip();
	    $('.ui-popover').popover();
    

	}

	function enableCirque () {
		if ($.fn.lightbox) {
			$('.ui-lightbox').lightbox ();
		}
	}

	function enableLightbox () {
		if ($.fn.cirque) {
			$('.ui-cirque').cirque ({  });
		}
	}

	function enableBackToTop () {
		var backToTop = $('<a>', { id: 'back-to-top', href: '#top' });
		var icon = $('<i>', { class: 'icon-chevron-up' });

		backToTop.appendTo ('body');
		icon.appendTo (backToTop);
		
	    backToTop.hide();

	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 150) {
	            backToTop.fadeIn ();
	        } else {
	            backToTop.fadeOut ();
	        }
	    });

	    backToTop.click (function (e) {
	    	e.preventDefault ();

	        $('body, html').animate({
	            scrollTop: 0
	        }, 600);
	    });
	}
	
	function enableEnhancedAccordion () {
		$('.accordion-toggle').on('click', function (e) {			
	         $(e.target).parent ().parent ().parent ().addClass('open');
	    });
	
	    $('.accordion-toggle').on('click', function (e) {
	        $(this).parents ('.panel').siblings ().removeClass ('open');
	    });
	    
	}
	
	function getValidationRules () {
		var custom = {
	    	focusCleanup: false,
			
			wrapper: 'div',
			errorElement: 'span',
			
			highlight: function(element) {
				$(element).parents ('.form-group').removeClass ('success').addClass('error');
			},
			success: function(element) {
				$(element).parents ('.form-group').removeClass ('error').addClass('success');
				$(element).parents ('.form-group:not(:has(.clean))').find ('div:last').before ('<div class="clean"></div>');
			},
			errorPlacement: function(error, element) {
				error.prependTo(element.parents ('.form-group'));
			}
	    	
	    };
	    
	    return custom;
	}
	
}();