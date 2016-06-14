$(document).ready(function () {

	/********************

		index.html

	********************/

	/****  topBar  ****/

//	$('#topBar li a').hover(
//		function () {
//			if ($(this).hasClass("activePage")) {
//			} else {
//				$("activePage").addClass("lastActive");
//				$("#topBar li a").removeClass("activePage");
//				$(this).addClass("activePage", 2000);
//			}
//		},
//		function () {
//			$(this).removeClass("activePage",1000);
//			$("lastActive").addClass("activePage",1000);
//			$("activePage").removeClass("lastActive");
//		}
//	);

//	$('#topBar li a').on("hover", function(){
//		$(this).animate({
//			borderBottom: "1px solid #d06faa"
//		}, 1000);
//	});
//	
/****  Fade In .infos  ****/

$('span.infos').delay(200).fadeIn(1500);

/****  ARROW SCROLL  ****/

$('a[href="#whoAmI"]').on("click", function () {
	$('html, body').animate({
		scrollTop: $("#whoAmI").offset().top
	}, 1800);
	return false;
});
	
	/****  CONTACT SCROLL  ****/
	
//	$('#welcomeSection button').on("click", function () {
//	$('html, body').animate({
//		scrollTop: $("#contact").offset().top
//	}, 2000);
//	return false;
//});

});