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

/* $(window).scroll(function (event) {
	current = $(window).scrollTop();

	brands_title_top = brands_title.offset().top;
	brands_title_diff = current - brands_title_top + 100;
	brands_title_newPosition =
		(get_vw() - brands_title.outerWidth()) / 2 + brands_title_diff;

	brands_title.stop().css({
		left: brands_title_newPosition + "px",
	});
}); */

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



//Фильтр карточек на странице товары
function app() {
	let buttons = document.querySelectorAll('.button-filter');
	const cards = document.querySelectorAll('.card');

	function filter(category, items) {
		items.forEach((item) => {
			const isItemFiltered = !item.classList.contains(category);
			const isShowAll = category.toLowerCase() === 'all'
			if (isItemFiltered && !isShowAll) {
				item.classList.add('anime');
			} else {
				item.classList.remove('hide');
				item.classList.remove('anime');
			}
		})
	}

	buttons.forEach((button) => {
		button.addEventListener('click', () => {
			const currentCategory = button.dataset.filter.trim().replace(' ', '');
			filter(currentCategory, cards);
		})
	})

	cards.forEach((card) => {
		card.ontransitionend = function () {
			if (card.classList.contains('anime')) {
				card.classList.add('hide');
			}
		}
	})

	// Add active class to the current button (highlight it)
	//var header = document.getElementById("myDIV");
	var btns = document.getElementsByClassName("button-filter");
	for (var i = 0; i < btns.length; i++) {
		btns[i].addEventListener("click", function () {
			var current = document.getElementsByClassName("active");
			current[0].className = current[0].className.replace(" active", "");
			this.className += " active";
		});
	}
}

app();
//End фильтр




$('.toggle').click(function (e) {
	e.preventDefault();

	var $this = $(this);

	if ($this.next().hasClass('show') && $(this).hasClass('active')) {
		$this.next().removeClass('show');
		$(this).removeClass('active');
		$this.next().slideUp(350);
	} else {
		$this.parent().parent().find('li .inner').removeClass('show');
		$(this).parent().parent().find('li .toggle').removeClass('active');
		$this.parent().parent().find('li .inner').slideUp(350);

		$this.parent().parent().find('.tabs__pane__item .inner').removeClass('show');
		$(this).parent().parent().find('.tabs__pane__item .toggle').removeClass('active');
		$this.parent().parent().find('.tabs__pane__item .inner').slideUp(350);


		$this.next().toggleClass('show');
		$(this).toggleClass('active');
		$this.next().slideToggle(350);
	}
});




/* (function ($) {

	$.fn.iComputerSlide = function (options) {

		options = $.extend({
			height: 200,
			btnClose: "Close",
			btnOpen: "Open"
		}, options);

		makeWrap = function ($element, options) {
			return '<div class="io_item">' +
				'<div class="io_item_wrap" style="max-height:' + options.height + 'px">' + $element[0].outerHTML +
				'<div class="io_trans"></div>' +
				'</div>' +
				'<div class="io_button_wrap">' +
				'<a class="io_button btn_close">' + options.btnClose + '</a>' +
				'<a class="io_button btn_open">' + options.btnOpen + '</a>' +
				'</div>' +
				'</div>';
		};

		$(document).on("click", ".io_button", function () {
			$(this).parents(".io_item").toggleClass("open");
		});

		return this.each(function () {
			var $element = $(this);
			$element.replaceWith(makeWrap($element, options));
		});
	};
})(jQuery);

$(function () {

	$(".item_text").iComputerSlide({
		height: 150,
		btnClose: "Свернуть",
		btnOpen: "Читать"
	});
}); */