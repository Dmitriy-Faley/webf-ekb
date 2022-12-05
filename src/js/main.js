("use strict");

jQuery(function () {
	//it run when document ready
	AOS.init({
		offset: 120,
		duration: 1000,
		easing: "ease-in-quad",
		delay: 100,
	});
});

function get_vw() {
	return Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
}

var current = $(window).scrollTop();
var brands_title = $(".strip .text");

/* var brands_title_top = brands_title.offset().top;
var brands_title_diff = current - brands_title_top + 200;
var brands_title_newPosition =
	(get_vw() - brands_title.outerWidth()) / 2 + brands_title_diff;

brands_title.css({
	left: brands_title_newPosition + "px",
}); */

$(window).scroll(function (event) {
	current = $(window).scrollTop();

	brands_title_top = brands_title.offset().top;
	brands_title_diff = current - brands_title_top + 100;
	brands_title_newPosition =
		(get_vw() - brands_title.outerWidth()) / 2 + brands_title_diff;

	brands_title.stop().css({
		left: brands_title_newPosition + "px",
	});
});

//fixed header

let $navOffset = $("#header").offset().top;
$(window).on("scroll", function () {
	if ($(window).width()) {
		if ($(window).scrollTop() > $navOffset) {
			$("#header").addClass("fixed");
		} else {
			$("#header").removeClass("fixed");
		}
	}
});
