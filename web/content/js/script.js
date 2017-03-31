$(function() {
	$(".fil-cat").click(function() {
		var selectedClass = "." + $(this).attr("data-rel");

		$("#portfolio").fadeTo(100, 0.1);

		$("#portfolio div").not(selectedClass).children("div", "span").fadeOut().removeClass('scale-anm');
		$("#portfolio div").not(selectedClass).fadeOut().removeClass('scale-anm');

		setTimeout(function() {
			$(selectedClass).children("div", "span").fadeIn().addClass('scale-anm');
			$(selectedClass).fadeIn().addClass('scale-anm');
			$("#portfolio").fadeTo(300, 1);
		}, 300);
	});
});