jQuery(document).ready(function($) {
	$(function () {
		$('.accordion-content').hide().css('display', 'none');
		$('.accordion-header').removeClass('active');
		$('.accordion-item:first-child').each(function () {
			$(this).children('.accordion-header').addClass('active');
			$(this).children('.accordion-content').css('display', 'flex').show();
		});
	});

	$(document).on('click', '.accordion-header', function () {
		var $item = $(this).closest('.accordion-item');
		$item.siblings('.accordion-item')
			.find('.accordion-header.active').removeClass('active').end()
			.find('.accordion-content:visible').slideUp(400, function () {
				$(this).css('display', 'none');
			});
		$(this).toggleClass('active');
		var content = $(this).next('.accordion-content');
		if (!content.is(':visible')) {
			content.css('display', 'flex').hide().slideDown(400);
		} else {
			content.slideUp(400, function () {
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

gsap.registerPlugin(ScrollTrigger);

window.addEventListener('load', () => {
	const fades = [
		{ selector: '.fade-in-up',    from: { opacity: 0, y: 50 },  to: { opacity: 1, y: 0, duration: 0.8, ease: 'power2.out' } },
		{ selector: '.fade-in-down',  from: { opacity: 0, y: -50 }, to: { opacity: 1, y: 0, duration: 0.8, ease: 'power2.out' } },
		{ selector: '.fade-in-left',  from: { opacity: 0, x: -50 }, to: { opacity: 1, x: 0, duration: 0.8, ease: 'power2.out' } },
		{ selector: '.fade-in-right', from: { opacity: 0, x: 50 },  to: { opacity: 1, x: 0, duration: 0.8, ease: 'power2.out' } },
	];

	fades.forEach(({ selector, from, to }) => {
		gsap.utils.toArray(selector).forEach(el => {
			let delay = 0;
			el.classList.forEach(c => {
				const m = c.match(/^delay-(\d+(\.\d+)?)$/);
				if (m) delay = parseFloat(m[1]);
			});
			gsap.fromTo(el, from, {
				...to,
				delay,
				scrollTrigger: {
					trigger: el,
					start: 'top 92%',
					toggleActions: 'play none none none',
					once: true,
				}
			});
		});
	});

	ScrollTrigger.refresh();
});