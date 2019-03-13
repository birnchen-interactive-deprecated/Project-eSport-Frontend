"use strict";

$(document).ready(function() {
	$('.site-rl-tournament-overview .turnierStatus.foldable .namedHeader').on('click', function() {
		var tableParent = $(this).parents('table.foldable');
		console.log(tableParent);
		if (tableParent.hasClass('foldable_open')) {
			tableParent.removeClass('foldable_open');
		} else {
			tableParent.addClass('foldable_open');
		}
	})
});