$(document).ready(function() {
	$("input[name=title]").keyup(function() {
		$("input[name=slug]").val(slugify($(this).val()));
	});
});

function slugify(text) {
	return text.toString().toLowerCase().trim()
		.replace(/&/g, '-and-')			// replace '&' with '-and' //
		.replace(/[\s\W-]+/g, '-')		// replace spaces, non-word chars and dashes with a single dash //
	;
}
