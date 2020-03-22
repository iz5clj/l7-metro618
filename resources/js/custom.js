// (function ($) {
    'use strict';

    if (typeof jQuery != 'undefined') {  
        // jQuery is loaded => print the version
        var version = jQuery.fn.jquery;

        $("#jquery-text").attr('class', 'kt-menu__section-text text-success');
        $("#jquery-text").html("Jquery: " + version);

    }

// })(jQuery);