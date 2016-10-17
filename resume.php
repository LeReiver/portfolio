<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 4/26/16
 * Time: 1:11 PM
 */

?>
<!doctype html>
<html lang="en">
<head>
    <title>Le-Reiver | Resume</title>
    <meta name="description" content="Web Developer and Designer living in Portland, Oregon
    specializing in PHP, MySQL, HTML5 and CSS3. Hire Me.">
    <meta name="keyword" content="resume, hire me">
    <?php require_once ('includes/head_files.php') ?>
</head>
<body>
<?php require('navigation.php'); ?>
<div id="about" class="section focus white-section">
    <div class="container">
        <div class="row section-header">
            <div class="col-md-12">
                    <h1 style=" font-size: 1.5em; margin-left: -35px; margin-top: -65px; color: #ff8700; font-stretch: extra-expanded; font-weight: 200; text-align:start">My Resume</h1>

                    <div class="col-md-12">
                            <div class="section focus resume"><a href="includes/images/resume.jpg" id="resume" data-lightbox="vector" data-title="My Resume"><img src="includes/images/resume.jpg" alt="My Resume" title="Click To View"></a>
                            </div>
                    </div>
<!--                    <embed src="http://www.lereiver.com/includes/images/resume.pdf" width="100%" height="500px" type='application/pdf'>-->

            </div>
        </div>
    </div>
</div>

<div id="sensor" class="section hire_me sensor white-section">
    <div class="container">
        <div class="row section-header">
            <div class="col-md-12">
                <h1 style="font-size: 4em; font-stretch: extra-expanded; font-weight: 100;  color: #ff8700; margin-top: -30px;">HIRE ME</h1>
                <h6></h6>
            </div>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>

<script data-rocketsrc="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/rocketscript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/json3/3.3.2/json3.js"></script>
<script data-rocketsrc="js/bootstrap.min.js" type="text/rocketscript"></script>
<script data-rocketsrc="scripts/navbar.js" type="text/rocketscript"></script>
</body>
</html>
