$(document).ready(main);

var contador = 1;

function main() {
	$('#btn-menu').click(function () {

		if (contador == 1) {
			$('nav').animate({
				right: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				right: '-100%'
			});
		}

	});

};


$(document).ready(function () {

	if ($(window).width() < 768) {
		$('.submenu').click(function(){
			$('.submenu ul').toggle();
		});
	}


	$('.ir-arriba').click(function () {


		$('body,html').animate({
			scrollTop: '0px'
		}, 1000);
	});

	$(window).scroll(function () {


		if ($(this).scrollTop() > 0) {

			$('.ir-arriba').slideDown(1000);

		} else {

			$('.ir-arriba').slideUp(1000);
		};

	});

});