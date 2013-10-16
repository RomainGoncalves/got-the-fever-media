(function ($) {
    "use strict";
    $(function () {
        
        var imgBG = '<img id="background" src="./wp-content/themes/gtfm-child/img/background-login.jpg" />';

        $('body.login').append(imgBG);

        $('body.login div#login').prepend('<p id="extra"></p>');

        //Get Form size
        var height = $('body.login form').css('height');
        var width = $('body.login form').css('width');

        $('p#extra').css('height', height);
        $('p#extra').css('width', width);

    });
}(jQuery));