<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- Title and favicon -->
    <title>ITESM - Last Mile | Megacity Logistics Lab</title>
    <link rel="icon" href="/img/favicon/favicon.ico">


    <!-- CSS general files -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="css/popup.css">
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="css/owl.theme.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if IE]>
    <style>
        .flip-container:hover .back,
        .flip-container.hover .back {
            backface-visibility: visible !important;
        }
    </style>
    <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div class="loader">
        <span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span>
        <span></span>
    </div>
</div>

<!-- Home -->
<div class="home-page">

    <!-- Introduction -->
    <div class="introduction">
        <div class="intro-content">
            <ul class="list-inline">
                <li><img class="logo" src="img/logo/itesm_logo.png" alt="itesm" style="max-width: 220px;" > &nbsp;&nbsp;&nbsp;</li>
                <li><img class="logo" src="img/logo/mll_logo.png" alt="mll" style="max-width: 200px;"></li>
            </ul>
            <br><br>

            <center><img class="logo" src="img/logo/logo300.png" alt="lastmile" style="max-width: 200px;"></center>
            <p class="slogan-text text-capitalize" align="center">Megacity Logistics Lab</p>

            <div class="social-media hidden-xs">
                <a href="https://www.facebook.com/mitctl" class="fa fa-facebook" data-toggle="tooltip" title="Facebook" target="_blank"></a>
                <a href="https://twitter.com/mitsupplychain" class="fa fa-twitter" data-toggle="tooltip" title="Twitter" target="_blank"></a>
            </div>

            <!--<div class="social-media2 hidden-xs">
                <a href="https://www.facebook.com/mitctl" class="fa fa-facebook" data-toggle="tooltip" title="Facebook" target="_blank"></a>
                <a href="https://twitter.com/mitsupplychain" class="fa fa-twitter" data-toggle="tooltip" title="Twitter" target="_blank"></a>
            </div>-->
        </div>
    </div>
    <!-- End Introduction -->

    <!-- Navigation Menu -->
    <div class="menu">
        <div data-url_target="case_study" class="profile-btn menu_button">
            <img alt="" src="img/home/case_study.png" style="width:100%; height:100%;">
            <div class="mask">
            </div>
            <div class="heading">
                <i class="ion-navigate hidden-xs"></i>
                <h2>Case Study</h2>
            </div>
        </div>

        <!-- Single Navigation Menu Button -->
        <div data-url_target="projects" class="portfolio-btn menu_button">
            <img alt="" src="img/home/projects.png">
            <div class="mask">
            </div>
            <div class="heading">
                <i class="ion-briefcase hidden-xs"></i>
                <h2>Projects</h2>
            </div>
        </div>
        <!-- End Single Navigation Menu Button  -->

        <!-- Single Navigation Menu Button -->
        <div data-url_target="team" class="service-btn menu_button">
            <img alt="" src="img/home/team.png">
            <div class="mask">
            </div>
            <div class="heading">
                <i class="ion-ios-people hidden-xs"></i>
                <h2>Team</h2>
            </div>
        </div>
        <!-- End Single Navigation Menu Button  -->

        <!-- Single Navigation Menu Button -->
        <div data-url_target="contact" class="contact-btn menu_button">
            <img alt="" src="img/home/contact.png">
            <div class="mask">
            </div>
            <div class="heading">
                <i class="ion-chatboxes hidden-xs"></i>
                <h2>Contact</h2>
            </div>
        </div>
        <!-- End Single Navigation Menu Button  -->

    </div>
</div>

<!-- Close Button -->
<div class="close-btn"></div>

<!-- Case Study -->
@include('web-home.case_study')

<!-- Projects -->
@include('web-home.projects')

<!-- Team -->
@include('web-home.team')

<!-- Contact -->
@include('web-home.contact')



<!-- Javascript files -->
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/jquery.popup.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
