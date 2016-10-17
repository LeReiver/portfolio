<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 5/30/16
 * Time: 11:44 PM
 */

header('Content-Type: text/javascript');

?>

$("nav").find("a").click(function (e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top
    }, 1500, function () {

    });
});


$(document).ready(function () {
    $("#navbar ul li a[href^='#']").on('click', function (e) {
        e.preventDefault();
        var hash = this.hash;
        $('html, body').animate({scrollTop: $(hash).offset().top}, 300, function () {
            window.location.hash = hash;
        });
    });

});

