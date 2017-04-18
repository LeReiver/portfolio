<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 4/26/16
 * Time: 1:11 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Le-Reiver | About Me</title>
    <meta name="description" content="I am a web and multimedia developer in Portland, Oregon. I have been creating digital media for over 16 years, with a background in music performance and audio and video production. I am a recent graduate with degrees in Web Development and Design and Computer Information Systems, as well as a Certificate in Web Application Development. I have solid web development, design and programming skills. My innate curiosity about technology and the growing programming world inspires me to improve, perfect and hone my skills in digital and creative media. Please see the SKILLS tab for additional information on my Web, Database, Android and Audio capabilities.">
    <meta name="keyword" content="web, multimedia, developer, Portland, Oregon,digital media, music performance, audio production, video production, recent graduate, Web Development and Design Degree, Computer Information Systems Degree, Certificate in Web Application Development, design, programming, skills, technology, digital media, creative media, Skills, Web, Database, Android, Audio">
    <?php require_once ('includes/head_files.php') ?>
</head>
<body data-spy="scroll" data-target="#navbar">
<?php require('navigation.php'); ?>
    <div id="about_bio" class="section bigbox" style="padding-top: 6em;">
        <div class="container">
            <div class="row section-header">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <h1 style="font-size: 1.85em; color: #ff8700; font-stretch: extra-expanded; font-weight: 200; text-align:start;  margin-bottom:1em; margin-left: -40px;">About</h1>

                        <p id="about_bio" class="bio" style="margin-left:-40px">
                            I am a web and multimedia developer in Portland, Oregon. I have been creating digital media for over 16 years, with a background in music performance, audio production, and video production. I am a recent graduate with degrees in Web Development and Design and Computer Information Systems, as well as a Certificate in Web Application Development. I have solid web development, design and programming skills. My innate curiosity about technology and the growing Internet world inspires me to improve, perfect and hone my skills in digital and creative media. Please see the SKILLS tab for additional information on my Web, Database, Android and Audio capabilities.
                        </p>
                    </div>
                    <div class="col-md-5" style="margin-left: -40px">
                        <h1 style="font-size: 1.85em; color: #ff8700; font-stretch: extra-expanded; font-weight: 200; text-align:start; margin-bottom: 1em;">Contact</h1>

                        <form id="contact" name="contact" method="post" action="includes/contact_process.php">
                            <div class="row_contact">
                                <input type="email" name="email" placeholder="Your Email" class="form-control input-box" required>
                            </div>
                            <div class="row_contact">
                                <input type="text" name="subject" placeholder="Message Subject" class="form-control input-box" required>
                            </div>
                            <div class="row_contact">
                                <textarea title="questions" name="questions" cols="19" rows="3" id="questions"
                                          placeholder="Need a website? Have Questions?" class="form-control input-box" ></textarea>
                            </div>
                            <div style=" font-size: 60%; margin-top: -20px;" class="button_table_submit" ><h2>
                                    <button id="_button_contact" type="submit">SUBMIT</button></a></h2></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sensor" class="section hire_me">
        <div class="container">
            <div class="row section-header">
                <div class="col-md-12">
                    <h1 style="font-size: 5em; font-stretch: extra-expanded; font-weight: 100;  color: #ff8700; ">HIRE ME</h1>
                    <h2>&nbsp;</h2>
                    <h2>&nbsp;</h2>
                    <h2>&nbsp;</h2>
                    <h2>&nbsp;</h2>
                    <h2>&nbsp;</h2>
                    <h2>&nbsp;</h2>
                </div>
            </div>
        </div>
    </div>
<?php require('footer.php'); ?>
<script>
    $(document).ready(function(){
        $("[href='about.php']").addClass("selected");
    });
</script>
</body>
</html>
