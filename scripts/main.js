document.ready(function () {
	$("#arrow").click(function () {
		$('html, body').animate({
			scrollTop: $("#whoAmI").offset().top
		}, 2000);
	});
});