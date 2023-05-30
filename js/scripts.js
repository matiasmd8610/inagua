$(document).ready(function () {

    $('nav a[href*="#"], .boton-presupuesto').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
            this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 130
                }, 1000);
                return false;
            }
        }
    });


	if ($(window).width() < 768) {
		$('.submenu').click(function(){
			$(this).toggleClass('active');
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

    //Hamburguer menu
    var contador = 1;
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


    $("#input-b5").fileinput({
        showCaption: false
    });

});