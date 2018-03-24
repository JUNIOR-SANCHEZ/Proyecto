$(document).ready(function () {
	$(window).scroll(function () {
		if ($(window).scrollTop() > 145) {
			$('header').addClass('header2');
		} else {
			$('header').removeClass('header2');
		}
	})
})
