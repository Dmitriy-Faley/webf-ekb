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


// расстояние между словами
const rotateBetweenWords = (value) => {
	const words = document.querySelectorAll('.wheel__word')
	let deg = 270

	for (let word of words) {
		word.style.transform = `rotate(${ deg }deg)`
		deg += value
	}
}

// расстояние между буквами
const rotateBetweenLetters = (value) => {
	const letters = document.querySelectorAll('.wheel__letter')
	let deg = 0

	for (let letter of letters) {
		letter.style.transform = `rotate(${ deg }deg)`
		deg += value
	}
}

rotateBetweenWords(10);
rotateBetweenLetters(12);


/*Текст при скролле*/
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
/* let $navOffset = $("#header").offset().top;
$(window).on("scroll", function () {
	if ($(window).width()) {
		if ($(window).scrollTop() > $navOffset) {
			$("#header").addClass("fixed");
		} else {
			$("#header").removeClass("fixed");
		}
	}
}); */
