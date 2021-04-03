$(document).on('ready', function () {
	$(".galeria-home").slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
	});
});

$(document).ready(function () {
	$("#close").click(function () {
		$("#aviso").hide();
		window.location.href = "https://www.tonsdobras.com.br/"
	});
});

$(document).ready(function () {
	$('#cookies').show();
	if (window.localStorage.getItem('accept_cookies')) {
		$('#cookies').hide();
		return false;
	}
	$(".btn_cookie").click(function () {
		window.localStorage.setItem('accept_cookies', true);
		$('#cookies').hide();
		return false;
	});
});

$(function(){
	$('.nome').clear();
	$('.email').clear();
	$('.phone').clear();
	$('.msg').clear();

	$('.btn_enviar').on('click', function(){
		var n, e, t, m, s;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		t = $('.phone').val();
		m = $('.msg').val();
		});
});
