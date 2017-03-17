/*
 * see gulpfile for precompile concat order
 * this IIFE with jQuery $ alias
 * loads after all modules are defined.
 */
(function ($) {

    //modules/header.js
    bourboneat_app.header.init($);
    bourboneat_app.widgetpages.init($);

})( jQuery );
