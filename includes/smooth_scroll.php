<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 11/8/16
 * Time: 10:00 AM
 */
require_once ('head_files.php')
?>
<script>
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                        }, 1000);
                    return false;
                }
            }
        });
    });
</script>
