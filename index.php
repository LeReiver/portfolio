<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 5/30/16
 * Time: 11:51 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112437058-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-112437058-1');
    </script>
    <title>Michael Le-Reiver</title>
    <meta name="description" content="Developing online and mobile solutions using test-driven development and web standard best practices utilizing Java, JavaScript, PHP, SQL/MySQL, and Responsive UX/UIs. Seeking an Associate-level position where I can assist and contribute to a team of dynamic developers while strengthening my development skills by creating digital solutions utilizing latest frameworks and technologies.">
    <meta name="keyword" content="web developer, web designer,Portland, Portland Oregon, web sites, web applications, databases,
        digital media, PHP, MySQL, HTML5, CSS3, SEO, JSON, AJAX, WordPress, Linux, Unix, Version Control, Image optimization, browser development tools, SQL, System Design, Audio, ProTools, MIDI, analog recording, analog mixing, digital recording, digital mixing, Sync to picture, outboard gear, live sound reinforcement, database design, database programming, Le-Reiver, le-reiver, Michael Le-Reiver, Michael Reiver, Reiver">
    <?php require_once ('includes/head_files.php') ?>
</head>
<body data-spy="scroll" data-target="#navbar">
<?php require('navigation.php'); ?>
    <div id="about" class="section-hero gray-section">
        <div class="transparent-blue-section">
            <div class="container">
                <div class="row section-header">
                    <div class="col-md-12" >
                        <div class="w3-content ">
                            <h1 class="header_slider w3-animate wait" style="width:100% ">Hello, <br>I am a <span class="title">Web Designer</span></h1>
                            <h1 class="header_slider w3-animate wait" style="width:100% ">Hello, <br>I am a <span class="title">Web Developer</span></h1>
                            <h1 class="header_slider w3-animate wait" style="width:100%">Hello, <br>I am an <span class="title">Audio Producer</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require ('skills.php'); ?>
<?php require('footer.php'); ?>
<?php require('includes/header_slider.php');?>
<?php require('includes/smooth_scroll.php');?>
</body>

</html>
