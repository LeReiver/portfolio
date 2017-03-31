
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
    <title>Le-Reiver | Projects</title>
    <meta name="description" content=" Hire Me. I am a web and multimedia developer living in Portland Oregon. I have been creating digital media for over 15 years. With a background in music performance, audio production, and video production, I am currently enrolled in the Web Development and Design as well as the CIS (Computer Information Systems) program at Portland Community College. My experience as well as my studies has gained me a wealth of knowledge that I inherently apply as I continually improve and perfect my multitude of skills in digital and creative media.">
    <meta name="keyword" content="web developer, web designer,Portland, Portland Oregon, web sites, web applications, databases,
        digital media, PHP, MySQL, HTML5, CSS3, SEO, database design, database programming, Le-Reiver, le-reiver, Michael Le-Reiver, Michael Reiver, Reiver,">
    <?php require_once ('includes/head_files.php') ?>
</head>
<body data-spy="scroll" data-target="#navbar">
<?php require('navigation.php'); ?>
<?php //require('project_navigation.php'); ?>
<div id="about_2" class="section bigbox">
    <section id="websites"></section>
    <div class="container projects" style="padding-top: 9em;">
<!--        <div class="row section-header">-->
<!--            <div class="col-md-12">-->
<!--                <h1 style="font-size: 2.2em; color: #ff8700; font-stretch: extra-expanded; font-weight: 200; text-align:start;">Web</h1>-->
<!--            </div>-->
<!--        </div>-->
        <!--Websites-->
        <div id="about" class="project-icon">
            <div class="container">
                <div class="row" style="margin-bottom: 2em;">
                    <div class="col-lg-6 col-xl-12">
                        <div>
                            <div class="project-icon"><a href="includes/images/ccs_lg.jpg" id="ccs"
                                                         data-lightbox="vector" data-title="CCS"><img src="includes/img/ccs_desktop.jpg" alt="CCS" title="Click To View"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-12">
                        <div class="project_desc">
                            <h3 >Coordinated Consulting Services</h3>
                            <h4>Web Development <span id="pipe">|</span> Web Design <span id="pipe">|</span>  Web Consulting</h4>
                            <p id="skills">A private and secure web application for a confidential consulting firm. A database connected web application built with PHP & MySQL,
                                requiring user account creation and access, user input and uploads to remote database with report generation capabilities.</p>
                            <table class="button_table">
                                <tr>
                                     <td><h4><a href="https://plum.hostpond.com/~lereive2/ccs/" target="_blank"><button id="_button" >To Website</button></a></h4></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>




<!--                        -->
<!--                        <div class="col-md-6">-->
<!--                            <div>-->
<!--                                <div class="project-icon"><a href="includes/images/kitchen_commons_lg.jpg" id="kitchen_commons"-->
<!--                                                             data-lightbox="vector" data-title="Kitchen Commons"><img src="includes/img/kitchen_commons_desktop.png" alt="Kitchen Commons" title="Click To View"></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <h5 class="orange-underline">Kitchen Commons</h5>-->
<!--                            <p id="skills">As a web development intern for a non-profit organization Kitchen Commons, I assisted in migrating the organization's old Drupal site to a new WordPress site.-->
<!--                                I redesigned the new site with custom theme styling implementing changes that enhanced usability, managed plugins and widgets and applied SEO practices.</p>-->
<!--                            <table class="button_table">-->
<!--                                <tr>-->
<!--                                    <td><h4><a href="https://kitchencommons.net/" target="_blank"><button id="_button" >To Website</button></a></h4></td>-->
<!--                                </tr>-->
<!--                            </table>-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/guano_lg.jpg" id="guano"-->
<!--                                                         data-lightbox="vector" data-title="Guano"><img src="includes/img/guano_desktop_phone.png" alt="Guano" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline">Guano</h5>-->
<!--                        <p id="skills">A mobile-first website, built with PHP and jQuery and a responsive CSS grid utilizing LESS. I Incorporated a modifiable Audio Controller Plugin as an audio player.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <td><h4><a href="/../web/guano/" target="_blank"><button id="_button">To Website</button></a></h4></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/burrito_lg.jpg" id="burrito_masala"-->
<!--                                                         data-lightbox="vector" data-title="Burrito Masala"><img src="includes/img/burrito_desktop_iphone.png" alt="Burrito Masala" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <h5 class="orange-underline">Burrito Masala</h5>-->
<!--                        <p id="skills">This fictitious food cart mobile-first website was built with PHP, utilizing responsive CSS and LESS.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <td><h4><a href="/../web/burrito_masala/" target="_blank"><button id="_button">To Website</button></a></h4></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="row" style="margin-bottom: 2em;">-->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/buddha_bellies_lg.jpg" id="buddha_bellies"-->
<!--                                                         data-lightbox="vector" data-title="Buddha Bellies Noodle House"><img src="includes/img/buddhabellies_desktop.png" alt="Buddha Bellies Noodle House" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline">Buddha Bellies Noodle House</h5>-->
<!--                        <p id="skills">A fictitious restaurant website built with hand rolled HTML5 and CSS3.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <td><h4><a href="/../web/buddha_bellies/" target="_blank"><button id="_button" >To Website</button></a></h4></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/well_fed_lg.jpg" id="well_fed"-->
<!--                                                         data-lightbox="vector" data-title="Well Fed Adventures"><img src="includes/img/wellfed_desktop.png" alt="Well Fed Adventures" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline">Well Fed Adventures</h5>-->
<!--                        <p id="skills">A Dreamweaver website built for a fictitious culinary travel company.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <td><h4><a href="/../web/well_fed" target="_blank"><button id="_button" > To Website</button></a></h4></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="row" style="margin-bottom: 4em;">-->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/dual_purpose_lg.jpg" id="dual_purpose"-->
<!--                                                         data-lightbox="vector" data-title="Dual Purpose Motorcycles"><img src="includes/img/dual_purpose_desktop.png" alt="Dual Purpose Motorcycles" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline">Dual Purpose Motorcycles</h5>-->
<!--                        <p id="skills">A simple, informative website built using AJAX and jQuery.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <td><h4><a href="/../web/dual_purpose/" target="_blank"><button id="_button" >To Website</button></a></h4></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!---->
<!---->
<!---->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/graphics_lg.jpg" id="graphics"-->
<!--                                                         data-lightbox="vector" data-title="Graphics for Multimedia"><img src="includes/img/graphics_desktop.png" alt="Graphics for Multimedia" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline">Graphics for Multimedia</h5>-->
<!--                        <p id="skills">This website was developed to showcase my Adobe Photoshop for multimedia capabilities.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <td><h4><a href="/../web/graphics/" target="_blank"><button id="_button" >To Website</button></a></h4></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!---->
<!---->
<!--                </div>-->
<!--                <div class="row" style="margin-bottom: 4em;">-->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/tip_calculator_lg.jpg" id="tip_calculator"-->
<!--                                                         data-lightbox="vector" data-title="A Tip Calculator"><img src="includes/img/tip_calculator_desktop.png" alt="Tip Calculator" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline">A Tip Calculator</h5>-->
<!--                        <p id="skills">Built with PHP, HTML5 and CSS3.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <td><h4><a href="/../php/tip_calculator" target="_blank"><button id="_button" >To Web App</button></a></h4></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/volume_converter_lg.jpg" id="volume_converter"-->
<!--                                                         data-lightbox="vector" data-title="Cooking Volume Converter"><img src="includes/img/volume_converter_desktop.png" alt="Cooking Volume Converter" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline">Cooking Volume Converter</h5>-->
<!--                        <p id="skills">-->
<!--                        <p>Built using PHP, jQuery, AJAX, HTML5 and CSS3.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <td><h4><a href="/../php/volume_converter/" target="_blank"><button id="_button" >To Web App</button></a></h4></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <div>-->
<!--                        <div class="project-icon"><a href="includes/images/drums_phone_tablet2.png" id="drums"-->
<!--                                                                                  data-lightbox="vector" data-title="Drums"><img src="includes/img/drums.png" alt="Drums" title="Click To View"></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <h5 class="orange-underline">Drums</h5>-->
<!--                    <p id="skills">A rudimentary drum machine with language support for Italian and Japanese.</p>-->
<!--                    <table class="button_table">-->
<!--                        <tr>-->
<!--                            <td><h4><a href="https://play.google.com/store/apps/details?id=app.lereiver.mike.drums" target="_blank"><button id="_button" >To App</button></a></h4></td>-->
<!--                        </tr>-->
<!--                    </table>-->
<!--                </div>-->
<!--                <div class="row" style="margin-bottom: 4em;">-->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/pigLatin_phone.png" id="name_converter"-->
<!--                                                         data-lightbox="vector" data-title="Pig Latin Name Converter"><img src="includes/img/pigLatin_phone.png" alt="Pig Latin Name Converter" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline" >Pig Latin Name Converter</h5>-->
<!--                        <p id="skills"> Using string manipulations, this Android app converts names into Pig Latin.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <!--<td><h4><a  target=""><button id="_button" >To App</button></a></h4></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row" style="margin-bottom:0">-->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/drumsFragment_phone_tablet2.png" id="drums_fragment"-->
<!--                                                         data-lightbox="vector" data-title="Drums Fragmented"><img src="includes/img/drumsFragment.png" alt="Drums Fragment" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline">Fragmented Drums</h5>-->
<!--                        <p id="skills">This an Android App. Same as Drums, but designed with using Fragments.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <!-- <td><h4><a  target=""><button id="_button" >To App</button></a></h4></td> -->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-6">-->
<!--                        <div>-->
<!--                            <div class="project-icon"><a href="includes/images/dataview_phone_tablet.png" id="data_view"-->
<!--                                                         data-lightbox="vector" data-title="Data View"><img src="includes/img/dataview.png"  alt="Tip Calculator" title="Click To View"></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <h5 class="orange-underline">Dataview</h5>-->
<!--                        <p id="skills"> This app was built to showcase the ability to connect to secure database and output data tables.</p>-->
<!--                        <table class="button_table">-->
<!--                            <tr>-->
<!--                                <!-- <td><h4><a target=""><button id="_button" >To App</button></a></h4></td> -->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row"></div>-->
<!--                <div class="col-md-12">-->
<!--                    <h1>&nbsp;</h1>-->
<!--                    <h1>&nbsp;</h1>-->
<!--                </div>-->
<!--            </div>-->
                <h1>&nbsp;</h1>
             </div>
        </div>
    </div>
</div>
<?php require ('footer.php'); ?>
<?php require('includes/smooth_scroll.php');?>
<script>
    $(document).ready(function(){
        $("[href='projects.php']").addClass("selected");
    });
</script>
</body>
</html>
