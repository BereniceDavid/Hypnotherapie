$(document).ready(function () {

	/********************

		index.html

	********************/

	/****  topBar  ****/

	$(".activePage").css("border-bottom", "solid #d06faa 1px");

	/****  Fade In .infos  ****/

	$('span.infos').delay(200).fadeIn(1500);

	/****  ARROW SCROLL to description  ****/

	$('a[href="#whoAmI"]').on("click", function () {
		$('html, body').animate({
			scrollTop: $("#whoAmI").offset().top
		}, 1800);
		return false;
	});

	/****  SCROLL to contact form  ****/

	$('#welcomeSection button, #whoAmI button').on("click", function () {
		$('html, body').animate({
			scrollTop: $("#indexForm").offset().top
		}, 2000);
		return false;
	});

});