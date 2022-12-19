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

$(".footer .footer__top .footer__social a img").each(function () {
	var $img = $(this);
	var imgClass = $img.attr("class");
	var imgURL = $img.attr("src");
	$.get(
		imgURL,
		function (data) {
			var $svg = $(data).find("svg");
			if (typeof imgClass !== "undefined") {
				$svg = $svg.attr("class", imgClass + " replaced-svg");
			}
			$svg = $svg.removeAttr("xmlns:a");
			if (
				!$svg.attr("viewBox") /*&& $svg.attr("height") && $svg.attr("width") */
			) {
				$svg.attr(
					"viewBox"
					//"0 0 " + $svg.attr("height") + " " + $svg.attr("width")
				);
			}
			$img.replaceWith($svg);
		},
		"xml"
	);
});

function get_vw() {
	return Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
}

var current = $(window).scrollTop();
var brands_title = $(".strip .text");

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
