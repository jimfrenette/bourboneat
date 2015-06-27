bn_app.header = {

    init: function($) {

        var menuToggle = $('#menu-main-mobile').unbind();
        var menuMain = $('#menu-main');
        var sidebar = $('#secondary');

        menuMain.removeClass("show");
        sidebar.removeClass("show");

        menuToggle.on('click', function(e) {
            e.preventDefault();

            menuMain.slideToggle(function() {
                if(menuMain.is(':hidden')) {
                    menuMain.removeAttr('style');
                }
            });

            sidebar.slideToggle(function() {
                if(sidebar.is(':hidden')) {
                    sidebar.removeAttr('style');
                }
            });

        });

    }
};