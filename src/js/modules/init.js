/*
    call this IIFE which has jQuery mapped to $
    last after all modules are defined.
    pass $ for functions that depemd on jQuery
*/
(function ($) {

    //modules/header.js
    bn_app.header.init($);

})( jQuery );