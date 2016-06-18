$(document).ready(function () {

	/********************

		index.html

	********************/

	/****  topBar border bottom on hover  ****/

	$(".activePage").css("border-bottom", "solid #d06faa 1px");

	/****  Responsive phone : menu  ****/
	//	$("i.fa-bars, i.fa-times").hide();


	$("#topBar i.fa-bars").on('click', function () {
		$("#topBar i.fa-bars").fadeOut();
		$("#topBar i.fa-times").fadeIn();
		$('header #topBar ul').css({
			'height': '100vh',
			'font-size': '28px',
			'margin-top': '25vh',
			'display': 'inline-block'
		});
		$('header #topBar li').css({
			"z-index": '70',
			'display': 'inline-block',
			'margin-bottom': '20px'
		});
		$('html').css({
			"overflow": "hidden"
		});
		$('#logoLink').css({
			"top": "5vh"
		});
	});
	$("#topBar i.fa-times").on('click', function () {
		$("#topBar i.fa-times").fadeOut();
		$("#topBar i.fa-bars").fadeIn();
		$('#logoLink').css({
			'top': 'inherit',
			"bottom": "-58px"
		});
		$('#topBar ul').css({
			'display': 'none'
		});
		$('#topBar img#logoHeader').css({
			"width": '65px'
		});
		$('header').css({
			"padding": '25px 0'
		});
		$('html').css({
			"overflow-y": "scroll"
		});
	});

	//	$('header #topBar li').animate({
	//			overflow: "hidden",
	//			opacity: 0.4,
	//			marginLeft: "0.6in",
	//			fontSize: "3em",
	//			borderWidth: "10px"
	//		}, 1500);

	/* top bar ouverte
	body,
	html {
		overflow: hidden;
	}
	header #topBar ul {
		height: 100vh;
		font-size: 28px;
	}
	header #topBar li {
		z-index: 70;
		display: inline-block;
		margin-bottom: 20px;
	}
	header #topBar ul {
		margin-top: 25vh;
	}
	#logoLink {
		top: 5vh;
		margin-left: -40px;
	}
	i.fa-times {
		display: inline-block;
	}
	
*/

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