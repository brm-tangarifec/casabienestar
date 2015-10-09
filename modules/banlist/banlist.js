(function ($) {

$(document).ready(function() {
var enable_all = $(document.createElement('a')).text('Enable all').click(function() {
	$("#banlist-form input").each(function(index, checkbox) {
		checkbox.checked = true;
	});
});

var disable_all = $(document.createElement('a')).text('Disable all').click(function() {
	$("#banlist-form input").each(function(index, checkbox) {
		checkbox.checked = false;
	});
});

$("label[for='edit-banlist-usernames']").append('<br/>').append(enable_all).append(' | ').append(disable_all);
});

})(jQuery);
