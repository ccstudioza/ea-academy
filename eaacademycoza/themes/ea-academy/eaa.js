jQuery(document).ready(function($) {
	$('.accordion-header').on('click', function() {
		$(this).toggleClass('active');
		var content = $(this).next('.accordion-content');
		if (!content.is(':visible')) {
			content.css('display', 'flex').hide();
			content.slideDown(400);
		} else {
			content.slideUp(400, function() {
				content.css('display', 'none');
			});
		}
	});

	$('.services-carousel').slick({
	    slidesToShow: 1,
	    arrows: true,
	    infinite: true,
	    speed: 250,
	    prevArrow: '<img class="slick-prev" src="/wp-content/uploads/2025/09/arrow.svg">',
	    nextArrow: '<img class="slick-next" src="/wp-content/uploads/2025/09/arrow.svg">',
	    responsive: [
	      	{
	        	breakpoint: 1201,
	        	settings: {
	          		slidesToShow: 1
	        	}
	      	},
	      	{
	        	breakpoint: 641,
	        	settings: {
	          		slidesToShow: 1
	        	}
	      	}
	    ]
	});

	function activateTabByIndex(index) {
		$('.course-tab').removeClass('active').attr('aria-selected', 'false');
		$('.course-tab-content').removeClass('active').hide();
		$('.course-tab[data-tab-index="' + index + '"]').addClass('active').attr('aria-selected', 'true');
		$('.course-tab-content[data-tab-index="' + index + '"]').addClass('active').fadeIn(200);
	}

	var hash = window.location.hash.substr(1);
	var initialTab = 0;

	if (hash) {
		var tabElement = $('.course-tab[href="#' + hash + '"]');
		if (tabElement.length) {
			initialTab = tabElement.data('tab-index');
		}
	}

	activateTabByIndex(initialTab);

	$('.course-tab').on('click', function(event) {
		event.preventDefault();
		var tabIndex = $(this).data('tab-index');
		activateTabByIndex(tabIndex);
		history.replaceState(null, null, $(this).attr('href'));
	});
});