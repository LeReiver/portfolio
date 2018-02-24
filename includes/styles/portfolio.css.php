<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 5/30/16
 * Time: 11:34 PM
 */
 header('Content-Type: text/css');
 ?>
body {
    font-size: 14px;
    line-height: 1.43;
    overflow-x: hidden;
    background-repeat: no-repeat;
    background-position: top center;
    background-attachment: fixed;
    font-family: 'Lato', sans-serif!important;
    position: relative;
    background-size: cover;
    background-color: rgb(62, 88, 93);
}
p {
    text-align: justify;
    font-weight: 200;
    font-family: 'News Cycle', sans-serif;
}
a {
    color: #ff8700;
}
h1, h2 {
    font-family: 'Hind Madurai', sans-serif!important;
    text-transform: uppercase;
    font-weight: 100;
}
h1 {
    font-size: 3em;
    font-stretch: extra-expanded;
    color: #ff8700;
}

li {
    color: rgb(25, 46, 51);
}

.input-box {
    min-height: 46px;
}
.btn-primary {
    background-color: #cb4332;
    border-color: #cb4332;
}
.jumbotron {
    background-color: transparent;
    margin-bottom: 0;
}
.jumbotron h1 {
    font-size: 46px;
}
.jumbotron h2 {
    font-size: 40px;
    text-transform: uppercase;
    line-height: 40px;
}
.jumbotron h3 {
    font-size: 1.5em;
    text-transform: inherit;
    line-height: 40px;
    color: rgb(25, 46, 51);
}
.jumbotron h5 {
    font-size: 17px;
    font-weight: bold;
    text-transform: uppercase;
    display: inline-block;
}
.jumbotron h6 {
    font-size: 18px;
}
.jumbotron p {
    font-size: 16px;
    margin-bottom: 1.5em;
    margin-top: 1.5em;
}
.project-icon {
    display: inline-block;
    margin-left: -15px;
}
.logo-icon {
    height: 350px;
    width:350px;
    display: inline-block;
    padding-top: 60px;
    margin-bottom: 1px;
}
.project-icon img {
    height: 450px;
    margin-top: 60px;
}
.project-icon.app img {
    height: 340px;
    margin-left: 10px;
}
.logo-icon img {
    margin-top: 1em;
}
#skills  {
    text-align: left;
    font-size: 90%;
    font-weight: 700;
}
.skills-icon {
    height: 105px;
    width: 105px;
    border-radius: 20%;
    display: inline-block;
    padding-top: 18px;
}
.skills-icon img {
    height: 130px;
    margin: -30px -30px 80px -30px;
}
#circle img {
    height: 2px;
    width: 2px;
}
.orange-underline {
    margin-top: 0;
    padding-bottom: 8px;
    border-bottom: 2px solid #ff8700;
/*    font-size: 150%;*/
    font-weight: 300;
}
.orange-underline table {
    margin-bottom: 3em;
}
.orange-underline h3 {
    margin-top: -3em;
    font-weight: 200;
}
.orange-underline h5 {
    font-size: 250%;
    font-weight: 300;
    font-stretch: extra-expanded;
    width: 80%;
}
.white-section {
    background-color: rgba(0,0,0,.55);
    color: #fff;
    font-size: 150%;
}
.blue-tint {
    background-color: rgba(27, 94, 126, 0.47);
    color: #fff;
    font-size: 150%;
    z-index: 2;
}
.tint {
    background-color: rgba(27, 94, 126, 0.89);
    color: #eee;
    z-index: 2;
}
.white-section .section-header h2 {
    color: #ff8700;
    font-size: 2.8vw;
    font-weight: 100;
    margin-top: -60px;
}
.grey-section {
    background-color: rgba(91, 91, 91, 0.25);
    color: #eee;
    margin: 2em 1em;
}
.dark-grey-section {
    background-color: rgba(2, 15, 35, 0.79);
    color: #eee;
}
.dark-blue-section {
    background-color: rgb(27, 94, 126);
    color: #eee;
    padding: 0;
}
.transparent-section {
    background-color: rgba(39, 39, 39, 0.35); /*rgb(27, 94, 126);*/
    color: rgba(238, 238, 238, 0);
}
.transparent-blue-section {
     background-color: rgba(25, 56, 88, 0.69); /*rgb(27, 94, 126);*/
     color: rgba(238, 238, 238, 0);
 }
.navbar {
    width: 80%;
}
.navbar-default {
    background-color: #000;
    margin-top: 0 !important;
}
.navbar-default .navbar-nav>li>a {
    color: #000;
    font-size: 1.5em;
    font-family: 'Hind Madurai', sans-serif!important;
    font-weight: 300;
    padding-right: 4em;
    margin-right: 20px;
}
.navbar-default .navbar-nav>li>a.selected {
    color: #ff8700;
}
.navbar-default .navbar-nav>li>a {
    color: #999!important;
}
.navbar-default .nav>li>a:hover,
.navbar-default .nav>li>a:focus,
.navbar-default .navbar-nav>.selected>a:hover {
    color: #ff8700!important;
}
.navbar-nav>li>a {
    padding-top: 27px;
    padding-bottom: 27px;
    padding-left: 2em;
    margin-left: -4em;
    color: #ff8700;
}
.navbar-nav>li>a.navbar-btn {
    margin-top: 17px;
    margin-bottom: 17px;
    margin-left: 10px;
    padding: 10px 18px;
    background-color: #e96656;
    border: none;
    border-radius: 4px;
    color: #eee;
}
.navbar-nav>li>a.navbar-btn:hover {
    background-color: #e96656;
    color: #eee;
}
.navbar-default .navbar-brand img.full {
    position: relative;
    top: 4px;
    width: 35px;
    height: 35px;
}
.navbar-default .navbar-toggle {
    border-color: #ff8700;
    transition: 0.8s;
}
.navbar-default .navbar-brand img.small {
    display: none;
}
.nav_name {
    margin-top: -.01em;
    margin-left: -10px;
    font-size: 2em;
    font-family: 'Hind Madurai', sans-serif !important;
    font-weight: 300;
}
.nav_list li {
    color: #ff8700;
    font-size: 120%;
}
.nav_list li:hover {
    color: #ff8700;
    font-size: 120%;
    transition: 0.8s;
}
.nav_brand {
    margin-top: -2em;
}

/* --  projects navigation ------------------------------------------------------------------------------------------*/

#projects_nav {
    float: right;
    display: inline;
    padding-right: 2em;
}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

ul.topnav li a:hover {
    background-color: #555;
    transition: 0.8s;
}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
    ul.topnav li:not(:first-child) {display: none;}
    ul.topnav li.icon {
        float: right;
        display: inline-block;
    }
}

@media screen and (max-width:680px) {
    ul.topnav.responsive {position: relative;}
    ul.topnav.responsive li.icon {
        position: absolute;
        right: 0;
        top: 0;
    }
    ul.topnav.responsive li {
        float: none;
        display: inline;
    }
    ul.topnav.responsive li a {
        display: block;
        text-align: left;
    }
}

/* ------------------------------------------------------------------------------------------*/




.header-logo img {
    height: 35px;
    width: 35px;
    position: fixed;
    top: 1em;
    right: 3em;
    margin-right: 0.5em;
    padding-right: 0;
    float: right;
}
.hire_me {
    background-image: url('../../includes/images/hire_me_industrial_3.jpg');
    background-size: cover;
/*    overflow-x: hidden;*/
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: bottom center;
}
.my_work {
    background-image: url();
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.69);
    overflow-x: hidden;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: top center;
}
.logo {
    margin: 3em 5em 3em 2em;
    width: 200px;
    height: 200px;
    padding: 2em 4em 2em 2em;
    float: left;
    clear: both;
}
.section {
    padding-top: 40px;
    padding-bottom: 40px;
    margin: 0;
    text-align: center;
}
.section.my_work {
     padding-top: 0;
     padding-bottom: 0;
     margin: 0;
     text-align: center;
 }
.section-header {
    padding-bottom: 150px;
}
.section-header h2 {
    padding-bottom: 10px;  
}
#about.w3-content h1{
    margin: 0 0 0 3em;
    font-size: 2em;
    color: #ff8700;
    font-stretch: extra-expanded;
    font-weight: 200;
    text-align:center;
}
.section-hero {
    background-image: url('../../includes/images/hero2__4_op2.jpg');
    margin: 1em 0;
    padding: 0;
    height: 100%;
    background-size: cover;
    background-color: rgba(229, 229, 229, 0.3);
    overflow-x: hidden;
    background-repeat: no-repeat;
    background-position: top center;
    background-attachment: scroll; 
    position: relative;
    z-index: 0;
}
.section.project.img {
    float: left;
    margin: 5em 5em 3em -2em;
    padding: 1em;
    width: 250px;
    height: 250px;
    clear: right;
}
.section.bigbox {
    padding: 0;
    background-color: #fff;
}
.section.bigbox h5{
    font-size: 180%;
    font-weight: 300;
/*    color: #fff;*/
    border-bottom: 2px solid #ff8700;
/*    margin-top: 30px;*/
}

.section.bigbox h4 {
    color: #777;
    margin-top: 20px;
}
.section.bigbox h3 {
    color: #333;
    margin-top:250px;
}
.section.bigbox.speech p {
    padding: 1em 4em;
    margin: 4em;
    text-align: justify;
    font-size: 1.5em;
    font-weight: 100;
}
.section.bigbox p {
    margin-top: 45px;
    font-family: 'Hind Madurai', sans-serif;
    color: rgb(25, 46, 51);
    font-weight: 700;
}
.section.bigbox .btn-primary {
    background-color: #e96656;
    border: none;
    font-size: 16px;
    font-weight: bold;
    border-radius: 4px;
    padding: 13px 35px;
    text-transform: uppercase;
     
}
.section.footer {
    margin-bottom: -20px;
    background-size: cover;
    background-color: #000;
    background-repeat: repeat;
    background-position: bottom left;
    background-attachment: scroll;
    color: #ff8700;
    font-size: 90%;
    font-weight: 300;
    font-stretch: extra-expanded;
    position: relative;
    z-index: 0;
}
.footer-tint {
    background-color: rgba(240, 236, 204, 0.41);
}
.section.footer #footer-loc {
    height: 35px;
}
.section.footer #footer-email {
    height: 38px;
}
.section.footer #footer-linkedIn {
    height: 35px;
}
.section.footer #footer-github {
    height: 38px;
}

.section.footer .footer-item {
    margin-bottom: 20px;
    margin-top: 20px;
}
.social-icons {
    margin-top: 8px;
}
.social-icons ul {
    margin: 0;
    padding: 0;
}
.social-icons li {
    list-style: none;
    padding: 0;
    margin: 0;
}
.social-icons img {
    height: 26px;
    opacity: .5;
    position: relative;
    left: -1px;
}
#network h6 {
    color: #808080;
}
#network .section-header {
    padding-bottom: 40px;
    margin: 2em 1em;
}
#about .section-header {
    padding-bottom: 2em;
    margin: 2em 1em;
}
#about .section {
    margin: 2em 1em;
}
#about .section p {
    margin: 2em 1em;
    padding: 2em 2em;
    font-size: 120%;
}
#about p {
    margin: 20px 50px;
    font-size: 1.75vw;
    font-weight: 200;
    line-height: 110%;
}

#about h1 {
    margin: 3px 2em 0 -1em;
    font-size: 50px;
    font-weight: 500;
    text-align: start;
    color: #ff8700;
}

#about_me p {
    margin: 20px 30px;
    font-size: 1.75em;
    font-weight: 200;
}
#about_2 p {
    font-size: 20px;
    font-weight: 200;
    margin: 20px 0 0 80px;
    color: #333;
    line-height: 120%;
}
#pipe {
    color: #333;
    font-size: 150%;
    margin-top: 2px;
    font-weight: 100;
}
#about_bio {
    margin-top: 3em
}
#about_bio p {
    font-size: 1.5em;
    margin: 20px 40px 20px 0;
    padding-right: 0;
    text-align: start;
    color: #333;
}
img.fullwidth {
    width: 100%;
    height: auto;
    position: relative;
}
img.fullwidth2 {
    width: 100%;
    height: auto;
    position: relative;
    margin-top: -87px;
}
.col-md-12 {
    width: 100%;
}
.button {
    background-color: #eee;
    border: solid;
    font-size: 16px;
    border-radius: 5px;
    border-width: 1px;
    padding: 13px 35px;
    text-transform: uppercase;
    color: #404040;
    border-color: #e96656;
}
a.button:hover {
    background-color: #e96656;
    color: #eee;
}
.navbar .container {
    padding-right: 15px;
    padding-left: 15px;
    background-image: none;
}
.navbar-default {
    width: 100vw;
}

#announcement {
    padding: 2em 0 0 0;
    font-size: 250%;
    font-weight: 200;
    color: #bbcccc;
}
#details {
    color: #bbcccc;
    width: 100%;
    margin-left: -3em;
    text-align: justify;
    line-height: 120%;
    float: right;
    clear: both;
}
#project_img {
    float: left;
    margin: 5em 5em 3em -2em;
    padding: 1em;
    width: 450px;
    height: 450px;
    clear: right;
}
#bio {
    font-size: 20px;
    float: left;
    clear: right;
    width: 50%;
    margin: 5em auto;
}
#project_blocks {
    margin-top: -10em;
}
#resume_view {
    height: 100%;
}
#_button {
    color: #ff8700;
    background: transparent;
    border: thin #333 solid;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    font-size: 120%;
    width: 7.5em;
    height: 1.8em;
    font-weight: 200;
    transition: 0.8s;
}
#_button_contact {
    color: #ff8700;
    background: transparent;
    border: thin #333 solid;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    font-size: 60%;
    width: 7.5em;
    height: 2.2em;
    font-weight: 200;
    transition: 0.8s;
}
#_button_nav {
    color: rgb(25, 46, 51);
    background: transparent;
    border: thin #ff8700 solid;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    font-size: 80%;
    width: 6em;
    height: 1.5em;
    margin: 0 1em;
    font-weight: 100;
    transition: 0.8s;
}
#_button:hover {
    background-color: rgba(196, 185, 193, 0.2);
    color: #000;
    border: thin #ff8700 solid;
    transition: 0.8s;
}
#_button:active {
    background-color: rgb(255, 255, 255);
    color: #ff8700;
    border: thin rgb(62, 88, 93) solid;
    transition: 0.8s;
}
#_button_nav:hover {
    background-color: rgb(255, 255, 255);
    color: #ff8700;
    border: thin rgb(62, 88, 93) solid;
    transition: 0.8s;
}
#_button_contact:hover {
    background-color: rgba(196, 185, 193, 0.2);
    color: #000;
    border: thin #ff8700 solid;
    transition: 0.8s;
}
.button_table td {
    text-align: center;
    font-weight: 200;
    width: 3em;
}
.button_table_submit {
     text-align: center;
     font-weight: 200;
     width: 1em;
 }
.content_list {
    margin-top :300px;
    text-align: center;
    width: 200%;
    margin-bottom: 300px;
}
.project_block_story {
    margin-top: -2em;
}
.project_block_story h2 {
    font-size: 170%;
}
.project_block table {
    text-align: center;
}

/* ------------------------------ PROJECT PAGES ---------------------------------------*/
.project-nav {
    margin-top: 80px;
    list-style-type: none;
    border: none;
}
.project-nav li .chev-left a img {
    position: relative;
    left: 520px;
}
.project-nav li .chev-right a img {
    position: relative;
    top: 0;
    left: 1220px;
}
.description p {
    font-size: 2.5rem;
     padding-right: 25px;
    font-family: Roboto sans-serif;
}
.project-hero img {
    height: 35vw;
    max-width: 1200px;
    margin: 60px 0 -20px -40px;
    border: 1em solid #222F3F;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}
.project-hero.tablet img {
    border: none;
    margin-top:-35px;
    margin-bottom: -40px;
}
.project-title h1 {
    font-size: 3em;
    color: #ff8700;
    font-stretch: extra-expanded;
    font-weight: 600;
    text-align: start;
    margin-top: -115px;
}
.subtitle {
    font-size: 160%;
    color: #111;
}
.project-title p {
    margin: 0 80px 0 40px;
    font-size: 22px;
    font-weight: 400;
}
.project-description h2 {
    text-align: center;
/*    margin-left: -55px;*/
}
.project-description h3 {
    text-align: center;
/*    margin-left: -85px;*/
}
.project-description p, .project-outcome p {
    font-size: 18px !important;
    font-weight: 400;
    text-align: justify;
    margin-bottom: 80px;
}
.project-title .orange-underline {
    margin: 30px 75px 0 30px;
    padding-right: 60px;
}
.testimonials {
    margin: 40px 0 0 0;
}
.project-button #_button {
    height: 200%;
    font-weight: 500!important;
    font-size: 200%;
    margin: 50px 0 20px 0;
}
.half-page-left p {
    padding-right: 2em;
}
.half-page-right p {
    padding-left: 2em;
 }
.project-description .process {
    margin-top: -80px;
}
.project-video-left {
    margin-left: -40px;
    margin-top: 40px;
    width: 560px;
    height: 515px;
    border: 1em solid #222F3F;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}
.project-video-full {
    height: 35vw;
    max-width: 1200px;
    margin: 60px 0 80px -40px;
    border: 1em solid #222F3F;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}
.quote {
    font-size: 3rem;
    opacity: 0.2;
    line-height: 0;
}
.quote img {
    height: 35px;
}
.quote.left img {
    margin: 40px 0 -30px 0;
}
.quote.right img {
    margin-left: 0;
    margin-top: 0;
}
.author {
    font-size: 2em;
    color: #a6a6a6;
    word-wrap: normal;
    text-align: start;
 }
.project-header {
    margin: 4em auto;
}
.project-objective {
    margin: 4em auto;
 }
.project-process {
    margin: 4em auto;
}
.project-process h2 {
    margin-bottom: 80px;
}
.project-process-img {
    max-width: 100%;
    background-size: contain;
    color: #4A6077;
}
.project-process-img img {
    height: 400px;
    max-width: 100%;
    background-size: contain;
    margin-top: 60px;
}
.project-challenges {
    margin: 4em auto;
}
.project-outcome {
    margin: 4em auto;
}
.project-outcome p {

}
.kind-words {
    margin: 4em auto;
}
.project-div {
    height: 5px;
    background-color: rgba(25, 93, 89, 0.39);
    background-size: contain;
    width: 100%;
    position: relative;
    margin: 100px 0;
}
.project-div-bl {
    height: 20px;
    background-color: rgba(31, 126, 154, 0.4);
    background-size: contain;
    width: 180%;
    position: relative;
    right: 40%;
}
.project-div-or {
    height: 20px;
    background-color: rgba(69, 29, 0, 0.36);
    background-size: contain;
    width: 180%;
    position: relative;
    right: 40%;
}

/*---------------------------------------------------*/


.details_project {
    margin: 90px auto -20px auto;
}
#announcement_project {
    margin: 90px auto -40px auto;
    padding: 3em 0 0 0;
    font-size: 250%;
    font-weight: 200;
    color: #bbcccc;
}
.container.projects h1 {
    margin-bottom: -.5em;
}
.align_left {
    float: left;
    clear: both;
}
.align_right {
    float: right;
    clear: left;
}
.row_contact {
    margin: .5em -.75em;
    padding: .5em 1em;
}
.row {
    margin-top: 2em;
    padding: .5em 0;
}
.row.project {
    margin-bottom: 180px;
    margin-top: 100px;
}
.row_project {
    margin: -2em 1.75em;
    padding: .5em 0;
}
.slides {
    display:none;
}
.slides h1 {
    display:none;
    font-weight: 100;
}
.title {
    color: rgb(255, 255, 255);
    font-weight: 500;
}
.me {
    font-size: 10em;
    height: 8em;
    display: none;
}
.wait {
    display: none;
}
.down {
    margin-left: 46%;
}

.active.selected {
    color: #ff8700;
}

/* ------------------------------  media queries ----------------------------------------*/

@media  (max-width: 1420px) {
    .project-hero img {
        height: 48vw;
    }
}

@media (max-width: 1200px) {
    .logo img {
        width: 250px;
        height: 250px;
        float: left;
        clear: both;
        padding-right: 0;
    }
    .logo-icon img {
/*        width: 200px;*/
        height: 400px;
        margin-left: 230px;
    }
    .logo-icon {
        height: 400px;
        width:200px;
        padding-top: 0;
        margin-bottom: 1px;
    }
    .navbar-default .navbar-nav>li {
        margin-left: 10px;
     }
    .navbar-default .project_nav {
        margin-top: 10px;
        margin-left: 150px;
    }
    #about_bio {
        margin-top: 6em
    }
    #about p {
        margin: 20px -20px;
        padding: 0 0;
        font-size: 1.75em;
        font-weight: 200;
    }
    #about h1 {
        margin-top: 0.125em;
    }
    #about_me p {
        margin: 20px 40px;
        padding: 0 0 0 1em;
        font-size: 1.25em;
        font-weight: 300;
    }
    #about_2 p {
        font-size: 1.5em;
        margin: 20px 0 20px 50px;
        padding-right: 1em;
     }
    #_button  {
        font-size: 70%;
        font-weight: 200;
        margin: 0 0 0 0;
    }
    #_button_nav  {
        font-size: 40%;
        width: 6em;
        height: 2em;
        margin: 0 0 0 0;
        font-weight: 200;
    }
    #_button a {
         font-size: 20%;
         width: 3em;
         height: 1.5em;
         margin: 0;
         font-weight: 100;
     }
    #_button_nav a {
        font-size: 60%;
        width: 4em;
        height: 1.5em;
        margin: 0 0.5em;
        font-weight: 100;
    }
    .button_table td {
        font-weight: 100;
    }
    .button_table  {
        margin: -20px 0 0 180px;
    }
    .button_table  a {
        font-size: 1.5em;
        margin-left: -4em;
    }
    .section.footer  {
        margin-bottom: -5px;
    }
    .project-icon img {
        height: 125%;
        margin: 45px 0 40px -80px;
    }
    .project-icon.app img {
         height: 315px;
         margin-left: -70px;
     }
    .project-icon {
        height: 350px;
        display: inline-block;
        padding-top: 20px;
        margin: -1em 0 -4em 1em;
    }
    .section.bigbox {
        padding: 0 2em;
        margin: -.5em 0;
    }
    .section.bigbox h5{
        margin-top: -1.75em;
    }
    .section.bigbox h4 {
        margin: 20px 0 0 -20px;
        font-size: 100%;
    }
    .section.bigbox h3 {
         margin-top: 80px;
     }
    .section.project.img {
        text-align: center;
        margin: 5em 3em 1em -2em;
        padding: 1em;
        width: 250px;
        height: 250px;
    }
    .section.footer  {
        padding: 3em;
    }
    .white-section .section-header h2 {
        font-size: 1.5em;
        margin-bottom: 20px;
        margin-top: 5px;
    }
     .col-md-8.button_table {
        float: right;
         clear: left;
    }
    .row {
        margin: -2em 0;
        padding: .5em 0;
    }
    .row.project {
        margin-top: 50px;
     }
    .row_contact {
        margin: .5em -.75em;
        padding: .5em 1em;
    }
    .me {
        line-height: 800%;
    }
    .down {
        margin-left: 44%;
    }
    .project-header {
        margin-top: 6.5em;
    }
    .project-hero img {
        height: 50vw;
    }
    .kind-words {
        margin: auto 2em;
    }
    .project-process-img {
        margin-bottom: -40px;
    }
    .project-video-full {
        height: 50vw;
    }

}

@media screen and (max-width: 1024px) {
    .project-icon {
        margin: 1em 0 -4em 1.5em;
    }
    .section.bigbox h4 {
        margin-left: 5px;
    }
    .project-hero img {
        height: 55vw;
        position: relative;
        margin: 50px 0 0 -45px;
    }
    .project-description img {
        height: 400px;
        margin: 50px 0 0 -10px;
    }
    .project-description {
        margin-bottom: 20px;
    }
    .project-description p {
        font-size: 2vw;
        padding-right: 2em;
        margin-left: 10px;
    }
    .half-page-left p {
        padding-right: 2em;
    }
    .half-page-right p {
        padding-left: 2em;
        clear: both;
    }
    .project-video-left {
        width: 90vw;
    }
    .author {
        /*        margin-top: -80px;*/
        font-size: 1.5em;
    }
    .quote.left img {
        height: 4vw;
    }
    .quote.right img {
        height: 4vw;
    }
    .project-nav li {
        margin-right: 10px;
    }
    .project-process-img {
        margin: 20px 40px -60px 0;
    }
}

@media (max-width: 991px) {
    h1 {
        font-size: 20%;
    }
    .logo img {
        width: 150px;
        height: 150px;
        margin-left: 60px;
        margin-bottom: -20px;
    }
    #about p {
        margin: 20px -20px;
        font-size: 1.75em;
        font-weight: 100;
        text-align: start;
    }
    #about h1 {
        margin-top: 0.25em;
        font-weight: 500;
        font-size: 45px;
    }
    #about_2 p {
        margin: 20px -10px 20px 0;
        font-size: 1.5em;
        font-weight: 100;
        text-align: start;
    }
    .col-md-6 {
        margin: 0 -2em 0 1em;
    }
    .section.bigbox h5{
        margin: .25em 4em 0 1em;
        padding-right: 1em;
    }
    .section.bigbox h4 {
        margin-left: -50px;
    }
    .section.bigbox h3 {
        margin: 220px 0 0 -50px;
    }
    .project-icon img {
        height: 150%;
        margin-top: -4em;
    }
    .project-icon.app img {
        height: 380px;
        margin-left: -90px;
        margin-top: 100px;
    }
    #_button {
        font-size: 250%;
        font-weight: 200;
        height: 2em;
    }
    .project-button #_button {
        margin-right: 20px;
    }
    #_button a {
        font-size: 30%;
        width: 2em;
        height: 1.5em;
        margin: 0;
        font-weight: 100;
    }
    #_button_contact  {
        font-size: 60%;
        width: 6em;
        height: 1.75em;
        margin: 0 2em 0 0;
        font-weight: 100;
    }
    .button_table td {
        font-weight: 200;
        font-size: 30%;
    }
    .button_table  {
        margin-left: -2em;
    }
    .button_table  a {
        font-size: 1.5em;
        padding-left: 8em;
    }
    .navbar-default .navbar-nav {
        margin-right: -20px;
    }
    .navbar-default .navbar-nav>li>a {
        margin-right: 0;
        position: relative;
        left: 80px;
    }
    .down {
        margin-left: 42%;
    }
    .container.projects h1 {
        margin-bottom: -4.5em;
    }
    .orange-underline {
        margin: .5em 0;
    }
    .product_desc {
        margin-top: 150px;
    }
    .row.project{
         margin-bottom: 160px;
         padding-bottom: 60px;
         margin-top: 120px;
    }
    .project-hero img {
        margin-bottom: -60px;
    }
    .project-hero.tablet img {
        margin-bottom: -80px;
    }
    .project-description h3 {
        margin-left: -30px;
    }
    .project-description p {
        margin: 20px 0 80px 20px;
    }
    .project-process h3 {
        margin-top: -60px;
    }
    .project-process-img {
        margin: 20px 40px -180px 0;
    }

    .project-hero img {
        height: 49vw;
        margin-left: -30px;
    }
    .project-title .orange-underline {
        margin-top: 100px;
    }
    .project-title p {
        margin: 160px 20px -100px 20px !important;
    }
    .quote.left img {
        height: 30px;
    }
    .quote.right img {
        height: 30px;
        margin: 10px 0 0 0;
    }
    .author {
        margin: 40px 0 0 20px;
    }
    .project-video-left {
        width: 80vw;
    }
}

@media (max-width: 892px) and (min-width: 891px) {
    .section.bigbox h3 {
        margin-top: 440px;
    }

}
@media (max-width: 680px) {
    .navbar-default .navbar-brand img.small {
        top: 2px;
        width: 45px;
    }
    .section-header {
        padding-bottom: 25px;
    }
    .section-header h2 {
        padding-top: .25em;
        padding-bottom: 10px;
         
    }
    .section-hero {
        background-image: url('../images/hero2_2_op.jpg');
    }
    #network-text p {
        font-size: 11px;
    }
    #network-text h2 {
        font-size: 16px;
    }
    .logo img {
        width: 250px;
        height: 250px;
        float: left;
        clear: both;
        padding-right: 0;
    }
    .logo-icon img {
        width: 200px;
        height: 200px;
        margin-left: 230px;
    }
    .logo-icon {
        height: 200px;
        width:200px;
        padding-top: 0;
        margin-bottom: 1px;
    }
    .project-icon {
        height: 350px;
        display: inline-block;
        padding-top: 50px;
        margin: -1.5em 0 -4em 1em;
    }
    .project-icon.app img {
         height: 320px;
         margin-left: -80px;
     }
    .project-icon img{
        margin: -2em 0 0 -2em;
    }
    #about p {
        margin: 20px -20px;
        padding: 0 0;
        font-size: 1.75em;
        font-weight: 200;
        text-align: start;
    }
    #about_2 p {
        margin: 20px 20px 20px 0;
        padding: 0 0;
        font-size: 1.5em;
        font-weight: 100;
        text-align: start;
    }
    #about_bio  p {
        font-size: 1.5em;
        margin: 20px -30px 20px 0;
        padding-right: 0;
        text-align: start;
    }
    #about h1 {
        margin-top: 0.25em;
        font-size: 3vw;
    }
    #network-text p {
        font-size: 16px;
    }
    #network-text h2 {
        font-size: 24px;
    }
    #_button {
        font-size: 70%;
        font-weight: 200;
    }
    #_button a {
        font-size: 40%;
        width: 4em;
        height: 1.5em;
        margin: 0;
        font-weight: 200;
    }
    #_button_nav a {
        font-size: 50%;
        width: 4em;
        height: 1.5em;
        margin: 0 1em;
        font-weight: 100;
    }
    #_button_nav  {
        font-size: 50%;
        width: 6em;
        height: 2em;
        margin: 0 1em;
        font-weight: 100;
    }
    .button_table td {
        font-weight: 200;
        font-size: 80%;
    }
    .button_table  {
        margin-left: -2em;
    }
    .button_table  a {
        font-size: 1.5em;
        margin-left: -4em;
    }
    .section.footer  {
        margin-bottom: 0;
    }
    .project-icon img {
        height: 150%;
        margin-left: -5em;
    }
    .project.img {
        text-align: center;
        margin: 3em 5em 3em -2em;
        padding: 1em;
        width: 250px;
        height: 250px;
        clear: right;
    }
    h1 #project_type{
        margin-top: 4em;
    }
    #projects_nav {
        padding: 2em 0 1em 3em;
        margin-top: 5em;
    }
    .navbar-default .project-nav {
        margin: 55px 0 20px 220px;
    }
    .navbar-default .project-nav .bottom{
        margin-top: 0;
    }
    .container.projects h1 {
        margin-bottom: -.75em;
    }
    .kind-words {
        margin: auto 0;
    }
}


@media (max-width: 768px) {
    .project-icon img {
        height:140%;
        margin-top: -8em;
        margin-left: -7em;
    }
    .project-icon.app img {
        margin-top: -3em;
        margin-left: -7em;
    }
    .section.bigbox h3 {
        margin-top: 100px;
    }
    #about h1 {
        font-size: 5vw;
        margin-top: -20px;
        margin-bottom: -2.5em;
    }
    #_button_contact {
        margin-bottom: 20px;
    }
    .navbar-default .project-nav {
        margin-left: 350px;
/*        margin-bottom: 30px;*/
    }
    .project-nav .bottom {
        margin-top: -80px;
        margin-bottom: 50px;
    }
    .project-nav .nav li {
         display: inline-block !important;
         margin-bottom: -50px;
         padding: 0;
    }
    .navbar-right {
        <!-- float: right !important; -->
        margin-right: -85px !important;
    }
    .row.project {
        margin-top: 180px;
    }
    .project-header {
        margin-top: 9.5em;
    }
    .project-title h1 {
        margin-top: -110px;
    }
    .project-title p {
        padding-right: 20px;
    }
    .project-description .process p {
        margin: 30px 0 80px 0;
    }
    .author {
        margin-left: 20px;
    }
    .project-process-img {
        margin: 20px 40px -60px 0;
    }
    .container > .navbar-header {
        margin-right: 0;
    } 
}


@media (max-width: 590px) {
     h1 {
        font-size: 80%;
     }
    .logo img {
        width: 150px;
        height: 150px;
        margin-left: 60px;
        margin-bottom: -20px;
    }
    #about p {
        margin: 20px -20px;
        font-size: 1.75em;
        font-weight: 100;
        text-align: start;
    }
    #about h1 {
        <!-- margin-top: 0.25em; -->
        font-weight: 500;
        font-size: 5vw;
    }
    #about_2 p {
       margin: 20px 10px 20px -60px;
        font-size: 1.5em;
        font-weight: 100;
        text-align: start;
    }
    .col-md-6 {
        margin: 0 -2em 0 1em;
    }
    .section.bigbox h5{
        margin: .25em 4em 0 1em;
        padding-right: 1em;
    }
    .section.bigbox h3 {
        margin-top: 20px;
        font-size: 160%;
     }
    .section.bigbox h4 {
        margin-left: -100px;
    }
    .project-icon img {
        height: 325px;
        padding-top: 10px;
        margin: -8em 0 -5em -100px;
        }
    .project-icon.app img {
        height: 285px;
        margin-left: -70px;
    }
    .project-button #_button {
        margin-right: 80px;
    }
    #_button {
        font-size: 220%;
        margin: 0 0 0 40px;
        font-weight: 200;
    }
    #_button a {
        font-size: 30%;
        width: 2em;
        height: 1.5em;
        margin: 0;
        font-weight: 100;
    }
    #_button_nav  {
        font-size: 40%;
        width: 6em;
        height: 2em;
        margin: 0 2em 0 0;
        font-weight: 100;
    }
    .button_table td {
        font-weight: 200;
        font-size: 30%;
    }
    .button_table  {
        margin-left: -2em;
    }
    .button_table  a {
        font-size: 1.5em;
        padding-left: 8em;
    }
    .down {
        margin-left: 42%;
    }
    .container.projects h1 {
        margin-bottom: -4.5em;
    }
    .orange-underline {
             margin: .5em 0;
         }
    .product_desc {
        margin-top: 150px;
    }
    .project-nav .navbar-nav {
/*        margin-left: 150px;*/
    }
    .navbar-default .project-nav {
             margin: 55px 0 20px 300px;
         }
    .project-nav li {
/*        margin-left: 30px;*/
    }
    .project-process h3 {
        margin-left: 85px;
    }
    .project-process-img {
             margin: 20px 40px 20px 0;
         }
}

@media (max-width: 481px) {
    #about_2 p {
        margin-right: 2.5em;
    }
    .project-nav .navbar-nav {
        margin-left: -150px;
    }
    .project-nav ul li {
        margin-right: 5px;
    }
}


@media (max-width: 440px) {
    h1 {
        font-size: 2em;
    }
    #network-text p {
        font-size: 8px;
        height: 25%;
        top: 0;
        transform: translate(-10%, 0%);
        line-height: 10px;
    }
    #network-text h2 {
        font-size: 11px;
        height: 45%;
        top: 0;
    }
    #network-text {
        font-size: 11px;
        height: 25%;
        top:0;
    }
    .logo {
        float: none;
    }
    .logo img {
        width: 100px;
        height: 100px;
        margin-left: 0;
    }
    .logo-icon img {
        width: 100px;
        height: 100px;
    }
    .logo-icon {
        height: 100px;
        width:10px;
        padding-top: 60px;
        margin-bottom: 1px;
    }
    #about p {
        margin: 20px -20px;
        font-size: 1.75em;
        font-weight: 200;
    }
    #about form {
        margin: 20px -60px;
        font-size: 1.2em;
        font-weight: 100;
    }
    #about form.button {
        text-align: center;
    }
    #about h6 {
        font-size: 14px;
    }
    #about h2 {
        font-size: 25px;
        margin-top: 5px;
    }
    #about_2 p {
        font-size: 1.5em;
        margin-top: 20px;
        margin-left: -50px;
    }
    p #about_2 .bio  {
        font-size: 1.5em;
        margin-top: 5px;
        margin-right: -4em;
        padding-right:0;
    }
    #about_2.about {
         margin-top: 5em;
        font-size: 1.5em;
     }
    #about_bio  p{
        font-size: 1.5em;
        margin: 20px -20px 20px 0;
        padding-right: 0;
        text-align: start;
    }
    #about h1 {
        text-align: start;
        font-size: 5.25vw;
        margin-top: .25em;
        font-weight: 500;
        padding-left: .5em;
    }
    #about .section-header {
         padding: 2em 0;
         margin: 1em 0 0 0;
     }
    .col-md-6 {
        margin: 0 1em 0 -.5em;
        padding-right: 2em;
    }
    .section.bigbox h5{
        margin-top: 1.25em;
        padding: 0 1.5em;
        font-size: 175%;
    }
    .section.bigbox h4 {
        margin-left: -65px;
    }
    .section.bigbox h3 {
        margin-top: -50px;
        margin-left: -55px;
        font-size: 140%;
    }
    .orange-underline {
        margin: .5em 0;
        padding: 0 2em;
        border-bottom: 2px solid #ff8700;
        font-size: 2vw;
        font-weight: 100;
    }

    h3.orange-underline  {
        padding: .5em 0;
        font-weight: 300;
    }
    #_button {
        font-size: 140%;
        font-weight: 200;
    }
    .project-button #_button {
        margin: 20px 60px 0 0;
    }
    #_button a {
        font-size: 30%;
        width: 2.5em;
        height: 1.5em;
        margin: 0;
        font-weight: 100;
    }
    #_button_nav a {
        font-size: 30%;
        width: 2em;
        height: 1.5em;
        font-weight: 100;
    }

    #_button_nav  {
        font-size: 50%;
        width: 6em;
        height: 2em;
        font-weight: 100;
    }
    .button_table td {
        font-weight: 200;
        font-size: 60%;
    }
    .button_table  {
        margin-left: -2em;
      }
    .button_table  a {
        font-size: 1.5em;
        margin-left: -5em;
        padding-left: 9em;
    }
    .section.footer  {
        margin-bottom: 5px;
    }
    #about .grey-section {
        padding-top: 15px;
        padding-bottom: 1px;
    }
    #top {
        padding: 180px 0 158px;
    }
    #top h1 {
        font-size: 30px;
    }
    #navbar {
        max-height: 481px;
    }
    .project-icon img {
        height: 90%;
        margin-left: -8em;
    }
    .project-icon.app img {
        height: 240px;
        margin-left: -60px;
        margin-top: -70px;
    }
    .project-icon {
        height: 350px;
        width:350px;
        display: inline-block;
        padding-top: 50px;
        margin: -2.5em 0 -5em 0;
    }
    .nav_name {
        margin-left: -.85em;
        font-size: 140%;
        font-weight: 200;
    }
    .header-logo img {
        top: 1.125em;
        margin: 0 0 0 .25em;
        width: 32px;
        height: 32px;
     }
    #network-solutions h3 {
        font-size: 28px;
    }
    #network .button {
        padding: 13px 20px;
    }
    .section.footer #footer-loc {
        height: 30px;
    }
    .section.footer #footer-email {
        height: 30px;
    }
    .section.footer #footer-linkedIn {
        height: 30px;
    }
    .section.footer #footer-github {
        height: 30px;
    }
    .section.footer  {
        margin-bottom: 0;
        padding: 2.2em;
    }
    .sensor h1 {
        font-size: 2em;
    }
    .skills-icon {
         height: 105px;
         width: 105px;
         display: inline-block;
         padding-top: 18px;
        margin-bottom: -30px;
     }
    .skills-icon img {
        height: 130px;
        margin-bottom: 60px;
    }
    .white-section .section-header h2 {
        font-size: 1.5em;
        margin-bottom: 20px;
        margin-top: 0px;
    }
    .jumbotron h3 {
        font-size: 25px;
        line-height: 20px;
    }
    .down {
        margin-left: 40%;
    }
    .project-process h3 {
        margin: 50px 0 0 55px!important;
    }
    .project-process p {
        margin: 0 0 10px 60px;
        padding-right: 0.5em;
    }
    .project-outcome h3 {
        margin: 50px 0 0 55px!important;
    }
    .project-outcome p {
        margin: 0 0 10px 35px;
        padding-right: 0.5em;
    }
    .kind-words {
        padding: 0;
        margin: 0;
    }
    .project-hero img {
        <!-- margin-left: 33px; -->
        margin-top: -20px;
    }
    .project-hero.tablet img {
        margin-top: -20px;
        margin-bottom: -80px;
    }
    .author {
        font-size: 1.25em;
        margin: 20px 0 0 -20px;
    }
    .navbar-default .project-nav {
        margin-left: 300px;
    }
    .project-process-img {
         margin: 20px 0 -20px 60px;
     }
}




@media (max-width: 400px) {
    .about.container.project {
        margin-top: -40px;
    }
    #about h1 {
        padding-left: .5em;
        margin-top: -20px;
        padding-bottom: 3.5em;
    }
    .col-md-6 {
        margin: 0 1em 0 -4.5em;
        padding: 0 2em;
    }
    p.nav_name {
        font-size: 170%;
    }
    p#about_2.about.phone {
        font-size: 3%;
    }
    .down {
        margin-left: 38%;
    }
    .orange-underline {
        margin: .5em 1.75em;
    }
    .section.bigbox h5 {
        margin: .25em 5em 0 0;
    }
    .section.bigbox h4 { 
        margin-left: -80px;
    }
    .section.bigbox h3 {
        <!-- margin: -30px 0 0 -15px; -->
    }
    #about_2 p {
        margin-top: 20px;
        margin-right: 2em;
    }
    #about_bio  p{
        font-size: 1.5em;
        margin: 20px -10px 20px 0;
        padding-right: 0;
    }
    .project-icon img {
        margin-top: -90px;
        margin-left: -8em;
        height: 260px;
    }
    .project-icon.app img {
        height: 210px;
        margin-left: -100px;
    }
    .project-title h1 {
        font-size: 2em;
        margin: -100px 0 -120px -35px;
    }
    .project-title p {
        margin: 140px 10px -100px -30px !important;
        text-align: start;
    }
    .project-description h2 {
        font-size: 1.8em;
        margin: -20px 30px 50px 0;
     }
    .project-description p {
        margin: 0 -15px 0 -35px;
        text-align: start;
    }
    .project-process p {
         margin: 0 0 100px 45px;
         padding-right: 0.5em;
         text-align: start;
     }
    .project-challenges h2 {
        margin-top: 60px;
    }
    .project-outcome p {
        text-align: start;
    }
    .project-outcome h3 {
         margin: 50px 0 0 50px!important;
     }
    .project-process h2 {
        margin-bottom: 40px!important;
    }
    .project-process h3 {
        margin: 40px 0 -20px 50px!important;
        font-size: 35px;
    }
    .project-process-img {
/*        margin-left: 20px;*/
    }
    .project-hero img {
        height: 55vw;
        border: 0.5em solid #222F3F;
        margin: 30px 0 -60px -33px;
    }
    .project-title .orange-underline {
        margin-right: 0;
        margin-left: 0;
    }
    .project-video-left {
        margin-bottom: -30px;
        height: 80vw;
        width: 120%;
        border: 0.5em solid #222F3F;
    }
    .project-nav .nav li {
        margin-left: 10px;
    }
    .project-nav .navbar-nav {
/*        margin-left: 150px;*/
    }
    .author {
        margin-top: 5px;
    }
}


@media (max-width: 350px) {
    #about h1 {
        font-size: 5vw;
    }
    .header-logo img {
        margin-right:-1em;
    }
    p.nav_name {
        font-size: 120%;
    }
    .down {
        margin-left: 35%;
    }
    #about_2 p {
        font-size: 1.5em;
        margin: 15px 3em 0 -40px;
        padding-right: 0;
    }
    #about_bio  p{
        font-size: 1.25em;
        margin: 5px -3em 0 0;
        padding-right: 0;
        text-align: start;
    }
    .container.project {
        margin-top: -160px;
    }
    .section.bigbox h5{
        margin: 1.25em 4em 0 1em;
        padding: 0 2.5em .25em .5em;
        font-size: 150%;
    }
    .section.bigbox h4 {
        margin-left: -120px;
        margin-top: 15px;
    }
    .section.bigbox h3{
        margin-left: -120px;
        margin-top: -90px;
    }
    .project-icon img {
        height: 75%;
        margin-top: -100px;
        margin-left: -10em;
    }
    .project-icon.app img {
        height: 180px;
        margin-left: -160px;
        margin-top: -100px;
    }
    .orange-underline {
        margin: .5em 4em 0 1em;
        padding: 0 2em;
    }
    .container.projects h1 {
        margin-left: 0;
    }
    .navbar-default .navbar-nav>li>a {
        font-size: 110%;
    }
    .header-logo img {
        margin-right:-2em;
        width: 30px;
        height: 30px;
    }
    #_button {
        margin-left: 70px;
        margin-top: 20px;
    }
    .white-section .section-header h2 {
        margin-top: 0;
    }
    .project-button {
        margin-right: 175px;
    }
    .navbar-default .project-nav {
        margin-bottom: 10px;
        margin-left: -5px;
    }
    .project-nav.bottom {
        margin-top: 10px;
    }
    .project-nav a img {
        margin-left: -15px;
    }
    .project-nav .navbar-nav {
        margin-left: 150px;
     }
}
@media (max-width: 300px) {
    body {
        min-width: 300px;
    }
    #about h1 {
        font-size: 5vw;
    }
    p.nav_name {
        font-size: 115%;
        margin-left: -1.5em;
    }
    .down {
        margin-left: 32%;
    }
    #about_2 p {
        font-size: 1.5em;
        margin: 15px 3em 0 -40px;
        padding-right: 0;
    }
    .header-logo img {
        margin-right:-2em;
        width: 30px;
        height: 30px;
    }
    .section.bigbox h4 {
        font-size: 80%;
        margin-left: -140px;
    }
    .section.bigbox h3 {
        font-size: 120%;
        margin-left: -130px;
    }
    .project-icon img {
        margin-left: -250px;
        margin-bottom: -40px;
    }
    .project-title h1 {
        font-size: 2.5em;
        margin-bottom: -130px;
    }
    .project-nav .navbar-nav {
        margin-left: 80px;
    }
    .project-nav .nav li {
        margin-left: -5px;
    }
}



@media (max-width: 267px) {
    h3.orange-underline {
        margin-left: -4em;
    }
}
@media (min-width: 1200px) {
    body {
        background-size: cover;
    }
    .navbar {
        margin-top: 1em;
    }
    .section.bigbox h4 {
        margin: 20px 0 0 30px;
    }
    .section.bigbox h3 {
        margin-top: 60px;
    }

}
