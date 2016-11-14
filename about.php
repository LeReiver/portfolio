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
    <meta name="description" content="I am a Web Developer and Web Designer living in Portland Oregon. I love to create web sites, web applications, databases,
        and other web based digital media specializing in PHP, MySQL, HTML5 and CSS3. Hire Me.">
    <meta name="keyword" content="web developer, web designer,Portland, Portland Oregon, web sites, web applications, databases,
        digital media, PHP, MySQL, HTML5, CSS3, Hire Me">
    <?php require_once ('includes/head_files.php') ?>
</head>
<body data-spy="scroll" data-target="#navbar">
<?php require('navigation.php'); ?>
    <div id="about_2" class="section bigbox" style="padding-top: 6em;">
        <div class="container">
            <div class="row section-header">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <h1 style="font-size: 1.85em; color: #ff8700; font-stretch: extra-expanded; font-weight: 200; text-align:start;  margin-bottom:1em; margin-left: -40px;">About</h1>
    
                        <p id="about_2" style="margin:0 0 40px -40px">Providing quality that continually exceeds client expectations.<br><br>I am a multimedia developer
                            living in Portland Oregon. I have been creating digital media for over 15 years. With a background in music performance,
                            audio production, and video production, I am currently studying web development and design as well as programming and IT at Portland
                            Community College. My experience as well as my studies has gained me a wealth of knowledge that I inherently apply
                            as I improve and perfect my multitude of skills in digital and creative media.
                        </p>
                    </div>
                    <div class="col-md-5" style="margin-left: -40px">
                        <h1 style="font-size: 1.85em; color: #ff8700; font-stretch: extra-expanded; font-weight: 200; text-align:start; margin-bottom: 1em;">Contact</h1>
    
                        <form id="contact" name="contact" method="post" action="includes/contact_process.php">
                            <div class="row_contact">
                                <input type="text" name="name" placeholder="Your Name" class="form-control input-box" required>
                            </div>
                            <div class="row_contact">
                                <input type="email" name="email" placeholder="Your Email" class="form-control input-box" required>
                            </div>
                            <div class="row_contact">
                                <textarea title="questions" name="questions" cols="19" rows="3" id="questions"
                                          placeholder="Questions?  Comments?  Say hello." class="form-control input-box" ></textarea>
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
                    <h1 style="font-size: 4em; font-stretch: extra-expanded; font-weight: 100;  color: #ff8700; ">HIRE ME</h1>
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
</body>
</html>
