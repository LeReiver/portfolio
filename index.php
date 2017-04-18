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
    <title>Michael Le-Reiver</title>
    <meta name="description" content="I am a web and multimedia developer in Portland, Oregon. I have been creating digital media for over 16 years, with a background in music performance and audio and video production. I am a recent graduate with degrees in Web Development and Design and Computer Information Systems, as well as a Certificate in Web Application Development. I have solid web development, design and programming skills. My innate curiosity about technology and the growing programming world inspires me to improve, perfect and hone my skills in digital and creative media. Please see the SKILLS tab for additional information on my Web, Database, Android and Audio capabilities.">
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
                        <p></p><br>
                        <div class="col-md-12">
                            <div class="w3-content " style="margin-left: -3em">
                                <h1 class="header_slider w3-animate wait" style="width:100% ">Hello, <br>I am a <span class="title">Website Developer</span></h1>
                                <h1 class="header_slider w3-animate wait" style="width:100% ">Hello, <br>I am a <span class="title">Website Designer</span></h1>
                                <h1 class="header_slider w3-animate wait" style="width:100% ">Hello, <br>I am a <span class="title">Web App Developer</span></h1>
                                <h1 class="header_slider w3-animate wait" style="width:100%">Hello, <br>I am an <span class="title">Android Developer</span></h1>
                                <h1 class="header_slider w3-animate wait" style="width:100%">Hello, <br>I am a <span class="title">Database Developer</span></h1>
                                <h1 class="header_slider w3-animate wait" style="width:100%">Hello, <br>I am an <span class="title">Audio Producer</span></h1>
                                <h1 class="header_slider w3-animate wait" style="width:100%">Hello, <br>I am a <span class="title">Video Producer</span></h1>
                                <h1 class="header_slider w3-animate wait" style="width:100%">Hello, <br>I am a <span class="title">Technical Producer</span></h1>
                            </div>
                        </div>
                    </div>
                    <div id="align_right" >
                        <div class="row section-header">
                            <div class="col-md-12">
                                <h1>&nbsp;</h1>
                                <h1>&nbsp;</h1>
                                <h1>&nbsp;</h1>
                                <h1>&nbsp;</h1>
                                <h1>&nbsp;</h1>
                                <h1>&nbsp;</h1>
                            </div>
                        </div>
                    </div>
                </div>
                    <div  class="row section-header">
                        <div>
                            <p id="about_2" class="about phone" >My name is Michael Le-Reiver. I live in downtown Portland Oregon. I love creating web sites, web applications, and Android Apps. I also love to produce audio, video, and other digital media.
                                Please take a look to see what I have been up to. Thank you for stopping by!</p>
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
