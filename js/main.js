$(function () {
	"use strict";

    $('#year').text((new Date).getFullYear());

    $('a').not('[href*="mailto:"]').each(function () {
        var href = this.href;
        if ( href.indexOf(window.location.host) == -1 ) {
            $(this).attr('target', '_blank');
        }
    });
});
