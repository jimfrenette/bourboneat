bourboneat_app.widgetpages = {

    init: function($) {

        var $pgToggle,
            $pgs = $('.widget_pages'),
            $pgItem = $pgs.find('.page_item_has_children');

        $pgItem.append('<i class="icon-circle-down"></i>');
        $pgToggle = $pgItem.find('.icon-circle-down');

        $pgToggle.bind('click', function(e) {
            $(this).parent().find('.children').slideToggle('fast');
            $(this).parent().toggleClass('is-expanded');
        });

        /**
         * expand the children when at an applicable page
         *
         * lSegments and aSegments use a regex to remove leading forward slash
         * from pathname (consistent w/ IE), before being split into an array
         */
        var lSegments = window.location.pathname.replace(/^\/+/g, '').split( '/' );
        $.each($pgItem, function(obj) {
            var aSegments = $(this).find('a')[0].pathname.replace(/^\/+/g, '').split( '/' );

            if (aSegments[0] === lSegments[0]) {
                $(this).find('.icon-circle-down').trigger('click');
            }
        });

    }
};
