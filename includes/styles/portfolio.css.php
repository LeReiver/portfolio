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
    font-family: gentonalight, sans-serif;
    margin-right: -15px;
    position: relative;
    background-size: cover;
    background-color: rgb(62, 88, 93);
}
p {
    text-align: justify;
    font-weight: 200;
    font-family: gentonalight, sans-serif;
}
a {
    color: #ff8700;

}
h1, h2 {
    font-family: gentonalight, sans-serif;
    text-transform: uppercase;
    font-weight: 100;
}
h1 {
    font-size: 3em;
    font-stretch: extra-expanded;
    color: #ff8700;
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
    font-family: gentonalight, sans-serif;
}
.jumbotron h2 {
    font-size: 40px;
    text-transform: uppercase;
    line-height: 40px;
    font-family: gentonalight, sans-serif;
}
.jumbotron h3 {
    font-size: 1.5em;
    text-transform: inherit;
    line-height: 40px;
/*    font-family: gentonaextralight, sans-serif;*/
}
.jumbotron h5 {
    font-size: 17px;
    font-weight: bold;
    text-transform: uppercase;
    display: inline-block;
    font-family: gentonalight, sans-serif;
}
.jumbotron h6 {
    font-size: 18px;
    font-family: gentonaextralight, sans-serif;
}
.jumbotron p {
    font-size: 16px;
    margin-bottom: 1.5em;
    margin-top: 1.5em;
    font-family: gentonalight, sans-serif;
}
.project-icon {
    height: 350px;
    display: inline-block;
    padding-top: 38px;
    margin-bottom: -4em;
    margin-right: 20px;
}
.logo-icon {
    height: 350px;
    width:350px;
    display: inline-block;
    padding-top: 60px;
    margin-bottom: 1px;
}
.project-icon img {
    height: 80%;
}
.logo-icon img {
    margin-top: 1em;
}
#skills  {
    text-align: left;
    font-size: 90%;
    font-weight: 200;
}
.skills-icon {
    height: 105px;
    width: 105px;
    border-radius: 20%;
    /*    border: 4px solid rgb(62, 88, 93);*/
    display: inline-block;
    padding-top: 18px;
    /*    margin-bottom: 10px;*/
}
.skills-icon img {
    height: 65px;
}
#circle img {
    height: 2px;
    width: 2px;
}
.orange-underline {
    margin-top: 0;
    padding-bottom: 8px;
    border-bottom: 2px solid #ff8700;
    font-size: 150%;
    font-weight: 100;
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
    font-weight: 200;
    font-stretch: extra-expanded;
/*    font-size: 150%;*/
/*    font-weight: 100;*/
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
    font-size: 2.5vw;
    font-weight: 100;
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
     background-color: rgba(19, 32, 58, 0.75); /*rgb(27, 94, 126);*/
     color: rgba(238, 238, 238, 0);
 }
.navbar-default {
    background-color: rgba(103, 221, 10, 0.69);
    box-shadow:0 5px 11px rgba(50,50,50,0.08);
}
.navbar-default .navbar-nav>li>a {
    color: #000;
    font-size: 1.2em;
    font-family: gentonalight, sans-serif;
    font-weight: 300;
    padding-right: 3em;
    margin-right: 3em;
}
.navbar-default .navbar-nav>li>a.current {
    border-bottom: groove #ff8700 1em;
    color: #e96656;

}
.navbar-default .navbar-nav>.active>a {
/*    background-color: #eee!important;*/
    border-bottom: groove #ff8700 1em;
    color: #e96656;
}
.navbar-default .nav>li>a:hover, .navbar-default .nav>li>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    background-color: #eee;
    color: #e96656;
}
.navbar-nav>li>a {
    padding-top: 27px;
    padding-bottom: 27px;
    padding-left: 0;
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
}
.navbar-default .navbar-brand img.small {
    display: none;
}
.navbar-brand {
    padding: 0;
}

.nav_name {
    margin-top: -.01em;
    color: rgb(62, 88, 93);
    margin-left: -1.5em;
    font-size: 1.5em;
    font-family: gentonalight, sans-serif;
    font-weight: 200;
}
.nav_list li {
    color: #ff8700;
    font-size: 120%;
}
.nav_list li:hover {
    color: #ff8700;
    font-size: 120%;
}
.nav_brand {
    margin-top: -2em;
}
.header-logo img {
    height: 35px;
    width: 35px;
    position: fixed;
    top: 1em;
    right: 2em;
    float: right;
}
.hire_me {
    background-image: url('../../includes/images/hire_me_industrial_3.jpg');
    background-size: cover;
    overflow-x: hidden;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: bottom center;
}
.my_work {
    background-image: url('');
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
    font-family: gentonalight, sans-serif;
}
#about.w3-content h1{
    margin; 0 0 0 3em;
    font-size: 2.2em;
    color: #ff8700;
    font-stretch: extra-expanded;
    font-weight: 100;
    text-align:center;
}
.section-hero {
    background-image: url('../../includes/images/hero2__4_op.jpg');
    margin: 1em 0;
    padding: 0;
    height: 100%;
    background-size: cover;
    background-color: rgba(229, 229, 229, 0.3);
    overflow-x: hidden;
    background-repeat: no-repeat;
    background-position: top center;
    background-attachment: scroll;
    font-family: gentonalight, sans-serif;
/*    margin-right: 0;*/
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
    background-color: #eee;
}
.section.bigbox h5{
    padding: 0 2em;
    font-size: 200%;
    font-weight: 100;
/*    font-family: gentonalight, sans-serif;*/
    color: rgb(62, 88, 93);
    border-bottom: 2px solid #ff8700;
}
.section.bigbox.speech p {
    padding: 1em 4em;
    margin: 4em;
    text-align: justify;
    font-family: gentonalight, sans-serif;
    font-size: 1.5em;
    font-weight: 100;
}
.section.bigbox p {
    margin-top: 45px;
    font-family: gentonalight, sans-serif;
    color: rgb(62, 88, 93);
}
.section.bigbox .btn-primary {
    background-color: #e96656;
    border: none;
    font-size: 16px;
    font-weight: bold;
    border-radius: 4px;
    padding: 13px 35px;
    text-transform: uppercase;
    font-family: gentonalight, sans-serif;
}
.section.footer {
    margin-bottom: -20px;
    padding-bottom: -10px;
    background-image: url('../images/footer.png');
    background-size: cover;
    background-repeat: repeat;
    background-position: bottom left;
    background-attachment: scroll;
    color: #ff8700;
    font-size: 90%;
    font-weight: 100;
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
    height: 35px;
}
.section.footer #footer-linkedIn {
    height: 35px;
}
.section.footer .footer-item {
    margin-bottom: 20px;
}
.section.sensor .project-icon {
    border-color: #ff8700;
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
    font-weight: 100;
    line-height: 110%;
}

#about h1 {
    margin: 3px 2em 0 0;
    font-size: 3vw;
    font-weight: 100;
    text-align: start;
    color: #ff8700;
}

#about_me p {
    margin: 20px 30px;
    font-size: 1.75em;
    font-weight: 100;
}
#about_2 p {
    font-size: 1.5em;
    font-weight: 100;
    margin: 20px 40px 20px 0;
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
    font-family: gentonalight, sans-serif;
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
    width: 105vw;
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
    color: rgb(62, 88, 93);
    background: transparent;
    border: thin #ff8700 solid;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    font-size: 120%;
    width: 6em;
    height: 1.5em;
    margin: 0 0 0 15em;
    font-weight: 200;
}
#_button_contact {
    color: rgb(62, 88, 93);
    background: transparent;
    border: thin #ff8700 solid;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    font-size: 60%;
    width: 6em;
    height: 1.5em;
    font-weight: 200;
}
#_button_nav {
    color: rgb(62, 88, 93);
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
}
#_button:hover {
    background-color: rgb(255, 255, 255);
    color: #ff8700;
    border: thin rgb(62, 88, 93) solid;

}
#_button_nav:hover {
    background-color: rgb(255, 255, 255);
    color: #ff8700;
    border: thin rgb(62, 88, 93) solid;
}
#_button_contact:hover {
    background-color: rgb(255, 255, 255);
    color: #ff8700;
    border: thin rgb(62, 88, 93) solid;
}
.button_table td {
    /*    padding: 2em 1em 2em 1em;
        margin: 2em 4em 4em 2em;*/
    text-align: center;
    font-weight: 200;
    width: 3em;
}
.button_table_submit {
     /*    padding: 2em 1em 2em 1em;
         margin: 2em 4em 4em 2em;*/
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
    margin: -2em 1.75em;
    padding: .5em 0;
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
    font-weight: 100;
}
.me {
    font-size: 10em;
    height: 8em;
    display: none;
}
.wait {
    display: none;
}

/* ------------------------------  media queries ----------------------------------------*/
@media (min-width: 1200px) {
    body {
        background-size: cover;
    }
    #about h1 {
          font-size: 3vw;
      }
    .navbar {
        margin-top 1em;
    }

}

@media (max-width: 1200px) {
    .logo img {
        width: 250px;
        height: 250px;
    }
    .logo-icon img {
        margin: 2em 3em 2em 1em;
        width: 250px;
        height: 250px;
    }
    .logo-icon {
        height: 250px;
        width:250px;
        padding-top: 60px;
        margin-bottom: 1px;
    }
    #about p {
        font-size: 1.75em;
        font-weight: 100;
    }
    #about h1 {
        font-size: 3vw;
    }
    #about_2 p {
        font-size: 1.5em;
        font-weight: 100;
        margin: 20px 20px 20px 0;
    }

    #about_me  p {
        margin-right: 800px;
        padding-right: 3em;
        font-size: 1.75em;
        font-weight: 300;
    }
    #_button {
        margin: 0 0 0 8em;
    }
    #_button a {
        font-size: 40%;
        width: 4em;
        height: 1.5em;
        margin: 0 2em;
        font-weight: 200;
    }
    #_button_nav  {
        font-size: 80%;
        width: 6em;
        height: 2em;
        margin: 0 1em;
        font-weight: 200;
    }

    .button_table  {
        margin-left: 6em;
    }
    .button_table td {
        font-weight: 200;
        font-size: 40%;
    }
    .project-icon img {
        height: 75%;
    }
    .navbar-default .navbar-nav>li>a {
        padding-right: 3em;
    }
    .row {
          margin: -2em 1.75em;
          padding: .5em 0;
      }
    .row_contact {
        margin: .5em -.75em;
        padding: .5em 1em;
    }
}

@media (max-width: 1024px) {
    .navbar-default .navbar-brand img.full {
        display: none;
    }
    .navbar-default .navbar-brand img.small {
        display: inline;
        position: relative;
        top: 6px;
        width: 60px;
        float: right;
    }
    .navbar-default .navbar-nav>li>a {
        padding-right: 5em;
    }
    #_button {
        margin: 0 0 0 8em;
    }
}

@media (max-width: 991px) {
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
    .navbar-default .navbar-nav>li>a {
         color: #000;
         font-size: 1.2em;
         font-family: gentonalight, sans-serif;
         font-weight: 300;
         padding-right: 7em;
         margin-right: -1.2em;
     }
    #about p {
        margin: 20px -20px;
        padding: 0 0;
        font-size: 1.75em;
        font-weight: 200;
    }
    #about h1 {
        margin-top: 0.125em;
/*        font-size: 2.8em;*/
        font-size: 3vw;

    }
    #about_me p {
        margin: 20px 40px;
        padding: 0 0 0 1em;
        font-size: 1.25em;
        font-weight: 200;
    }
    #about_2 p {
        font-size: 1.5em;
        margin: 20px 20px 20px 0;
        padding-right: 1em;
     }
    #_button  {
        font-size: 70%;
        width: 6em;
        height: 2em;
        font-weight: 200;
        margin 0 0 0 0;
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
        margin-left: -2em;
    }
    .button_table  a {
        font-size: 1.5em;
        margin-left: -4em;
/*        padding-left: 5em;*/
    }
    .section.footer  {
        margin-bottom: 0px;
    }
    .project-icon img {
        height: 65%;
        margin-left: -2em;
    }
    .project-icon {
        height: 350px;
        display: inline-block;
        padding-top: 20px;
        margin: 1em 0 -4em 1em;
    }
    .section.project.img {
        text-align: center;
        margin: 5em 5em 1em -2em;
        padding: 1em;
        width: 250px;
        height: 250px;
    }
    .section.footer #footer-loc {
        height: 25px;
    }
    .section.footer #footer-email {
        height: 25px;
    }
    .section.footer #footer-linkedIn {
        height: 25px;
    }
    .section.footer  {
        padding: 3em;
    }
     .col-md-8.button_table, {
        float: right;
         clear: left;
    }
    .row {
        margin: -2em 0;
        padding: .5em 0;
    }
    .row_contact {
        margin: .5em -.75em;
        padding: .5em 1em;
    }
    .me {
        line-height: 800%;
    }
}

@media (max-width: 845px) {
    .navbar-default .navbar-nav>li>a {
        color: #000;
        font-size: 1.2em;
        font-family: gentonalight, sans-serif;
        font-weight: 300;
        padding-right: 3em;
        margin-right: 3em;
    }
}

@media (max-width: 786px) {
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
        font-family: gentonalight, sans-serif;
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
        margin: -.5em 0 -3em 1em;
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
        color: rgb(62, 88, 93);
        font-size: 70%;
        width: 6em;
        height: 2em;
        margin: 0 0 0 13em;
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
/*        padding-left: 5em;*/
    }
    .section.footer  {
        margin-bottom: 0;
    }
    .project-icon img {
        height: 65%;
        margin-left: -2.2em;
    }
    .project.img {
        text-align: center;
        margin: 3em 5em 3em -2em;
        padding: 1em;
        width: 250px;
        height: 250px;
        clear: right;
    }
}


@media (max-width: 767px) {
    #about h1 {
        margin-top: 0.25em;
        font-size: 4vw;
    }
    #about p {
        margin: 20px 0 0 20px;
    }
    section.project-icon {
        height: 350px;
        width:350px;
        display: inline-block;
        padding-top: 20px;
        margin-bottom: 10px;
        margin-left: 80px;
    }
    .nav_name {
        margin-left: -.5em;
    }
    .project-icon img {
        height: 100%;
    }
    .project-icon {
        height: 350px;
        display: inline-block;
        padding-top: 50px;
        margin: 0;
    }
    .section-hero {
        background-image: url('../images/hero2_2_op.jpg');
    }
    .white-section .section-header h2 {
        font-size: 4vw;
    }
}
@media (max-width: 720px) {
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
        margin: 0 1em;
        font-weight: 100;
    }
    #_button {
        color: rgb(62, 88, 93);
        font-size: 80%;
        width: 6em;
        height: 2em;
        margin: 0 0 0 10em;
        font-weight: 200;
    }
    .button_table td {
        font-weight: 200;
        font-size: 60px;
    }
    .button_table  {
        margin-left: -2em;
    }
    .button_table  a {
        font-size: 1.5em;
        margin-left: -4em;
/*        padding-left: 5em;*/
    }
    #about h1 {
        margin-top: 0.25em;
        font-size: 4.5vw;
    }
}

@media (max-width: 610px) {
    #about h1 {
        margin-top: 0.25em;
        font-size: 5vw;
    }
}

@media (max-width: 590px) {
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
        <!-- margin: 20px -20px; -->
        font-size: 1.75em;
        font-weight: 100;
        text-align: start;
    }
    #about h1 {
        margin-top: 0.25em;
        font-weight: 100;
        font-size: 5vw;
    }
    #about_2 p {
        <!-- margin: 20px -20px 20px 0; -->
        font-size: 1.3em;
        font-weight: 100;
        text-align: start;
    }
    .project-icon img {
        height: 80%;
        <!-- padding-top: 50px; -->
        margin: -.5em 0 -18em 1em;
        }
    #_button {
        color: rgb(62, 88, 93);
        font-size: 80%;
        width: 6em;
        height: 1.5em;
        margin: 0 3em 0 0;
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
/*        margin-left: -4em;*/
        padding-left: 8em;
    }
}
@media (max-width: 540px) {
    #about h1 {
        font-size: 5vw;
    }
}
@media (max-width: 480px) {
    .nav_name {
        margin-left: -.8em;
        font-size: 1.5em;
        font-weight: 200;
    }
}
@media (max-width: 440px) {
    h1 {
        font-size: 2em;
    }
    #network-text p {
        font-size: 8px;
        height: 25%;
        top: ;
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
    #about_2 p {
         margin: 30px -20px;
         font-size: 1.75em;
         font-weight: 100;
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
        margin-top: 5px;
        margin-left: 0;
        padding-right: 1em;
    }
    #about_2.about {
         margin-top: 5em;
        font-size: 1.5em;
     }
    #about h1 {
        text-align: start;
/*        font-size: 1.93em;*/
        font-size: 5.25vw;
        margin-top: .25em;
        font-weight: 500;
    }
    .orange-underline {
        margin-top: 1em;
        padding-bottom: 8px;
        border-bottom: 2px solid #ff8700;
        font-size: 2vw;
        font-weight: 100;
    }
    .orange-underline h5 {
        font-size: 250%;
        font-weight: 200;
        font-stretch: extra-expanded;
        margin: 20px;
    }
    #_button {
        color: rgb(62, 88, 93);
        font-size: 80%;
        width: 6em;
        height: 1.5em;
        font-weight: 200;
        margin: 0 3em 0 0;
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
    #waitlist h2 {
        font-size: 25px;
    }
    #waitlist row {
        font-size: 25px;
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
        height: 70%;
        margin-bottom: 1em;
        margin-left: -4em;
    }
    .project-icon {
        height: 350px;
        width:350px;
        display: inline-block;
        padding-top: 50px;
        margin: -.5em 0 -8em 1em;
    }
    .nav_name {
        margin-left: -.85em;
        font-size: 1.25em;
        font-weight: 200;
    }
    .header-logo img {
        top: 1.125em;
        right: 1em;
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
        height: 25px;
    }
    .section.footer #footer-email { 
        height: 25px;
    }
    .section.footer #footer-linkedIn {
        height: 25px;
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
         border-radius: 20%;
         /*    border: 4px solid rgb(62, 88, 93);*/
         display: inline-block;
         padding-top: 18px;
         /*    margin-bottom: 10px;*/
     }
    .skills-icon img {
        height: 58px;
    }
    .jumbotron h3 {
        font-size: 25px;
        line-height: 20px;
    }
}
@media (max-width: 400px) {
    #about h1 {
        font-size: 5vw;
    }
}
