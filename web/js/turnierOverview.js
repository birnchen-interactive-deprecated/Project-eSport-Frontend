"use strict";

$(document).ready(function() {
	$('.site-rl-tournament-overview .turnierStatus.foldable').click(function() {
		if ($(this).hasClass('foldable_open')) {
			$(this).removeClass('foldable_open');
		} else {
			$(this).addClass('foldable_open');
		}
	})
});