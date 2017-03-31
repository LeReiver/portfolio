<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 5/30/16
 * Time: 11:50 PM
 */
?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" style="float: left; margin-left: 0.25em;" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand brand-full" href="http://lereiver.com">
                    <p class="nav_name">Michael Le-Reiver</p>
                </a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right" id="nav_list" style="font-weight: 300; font-size: 120%; margin-left: 3.5em;">
                    <li class="active"><a href="index.php#my_skills">SKILLS</a></li>
                    <li class="active"><a href="projects.php">PROJECTS</a></li>
                    <li class="active"><a href="about.php">ABOUT</a></li>
                </ul>
            </div>
            <div hidden class="header-logo">

                <a href="http://lereiver.com/"><img id="header-logo" src="includes/img/my_logo2_w.png" alt="Logo image link back to home page"></a>
            </div>
        </div>
    </nav>

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
