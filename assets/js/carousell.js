$(document).ready(function() {
	var images = [
		"/static/img/Carousell/pic1.png",
		"/static/img/Carousell/pic2.png",
		"/static/img/Carousell/pic3.png",
		"/static/img/Carousell/pic4.png",
		"/static/img/Carousell/pic5.png",
		"/static/img/Carousell/pic6.png",
		"/static/img/Carousell/pic7.png",
	];
	var i = 1;

	setInterval(function() {
		$(".carousell-custom").css("background-image", "linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(" + images[i] + ")");
		i = i + 1;
		if (i == images.length) {
			i =  0;
		}
	}, 10000);
});
