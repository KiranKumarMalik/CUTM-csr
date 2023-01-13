<?php
require('./includes/function.php');
require('./includes/database.php');


$Culturetime=getTotalTime($db,'Culture');
$Sportstime=getTotalTime($db,'Sports');
$Responsibilitytime=getTotalTime($db,'Responsibility');

$getallAnnousementStringIs="";
$getallAnnousement=getAnnouncements($db);
foreach($getallAnnousement as $getallAnnousements){
    $getallAnnousementStringIs=$getallAnnousementStringIs." || ".$getallAnnousements['event_name']." || ";
}

?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>CUTM | CSaR | Home
        </title>
        <link rel="icon" href="assets/img/logo/cutm.png" type="image/icon type">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link
            rel="stylesheet"
            href="assets/fonts/fontawesome5-overrides.min.css?h=b7275171fee7833b33216c067c3940d2">
        <link
            rel="stylesheet"
            href="assets/css/contact-form-info.css?h=342c2ce30314aa52534c97edc5e26da5">
        <link
            rel="stylesheet"
            href="assets/css/filter-portfolio.css?h=6448068ee026269d44d82d2fd3647b5b">
        <link
            rel="stylesheet"
            href="assets/css/Footer-Dark.css?h=cabc25193678a4e8700df5b6f6e02b7c">
        <link
            rel="stylesheet"
            href="assets/css/Highlight-Blue.css?h=91a04f2b18410bc09760f3473788176a">
        <link
            rel="stylesheet"
            href="assets/css/hover.css?h=d020500b6227369b22f252a195de70cd">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
        <link
            rel="stylesheet"
            href="assets/css/styles.css?h=dd8d698acf5504a6249ee2f03b989434">
    </head>

    <body style="height: auto;">
        <header
            id="header"
            class="main-header"
            style="background: url(&quot;assets/img/csrbg.jpg?h=4b69291c09f7598206c94cbd642abc27&quot;) center / cover no-repeat;height: 690px;">
            <nav class="navbar navbar-dark navbar-expand-md fixed-top mobi">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="assets/img/logo/logo.png" alt="Logo" width="74" height="100"></a>
                    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="font-size: 14px;">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active scrollto" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" href="aboutus.php">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger scrollto" href="instruction.php">INSTRUCTIONS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger scrollto" href="imagegallery.php">GALLERY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger scrollto" href="announcements.php">ANNOUNCEMENTS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="dropdown-toggle nav-link"
                                    data-toggle="dropdown"
                                    aria-expanded="false"
                                    href="#">CO-ORDINATORS</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="coordinators.php?campus=Balasore">Balasore</a>
                                    <a class="dropdown-item" href="coordinators.php?campus=Bhubaneswar">Bhubaneswar</a>
                                    <a class="dropdown-item" href="coordinators.php?campus=Balangir">Balangir</a>
                                    <a class="dropdown-item" href="coordinators.php?campus=Paralakhemundi">Paralakhemundi</a>
                                    <a class="dropdown-item" href="coordinators.php?campus=Rayagada">Rayagada</a>
                                    <a class="dropdown-item" href="coordinators.php?campus=Chhatrapur">Chhatrapur</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger scrollto" href="campusachievements.php">PREVIOUS ACHIEVEMENTS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center header-elements">
                            <h1
                                data-aos="fade-up"
                                class="header-main-title"
                                style="color: #f4eeee;font-size: 48px;letter-spacing: 2px;">
                                <strong>WELCOME TO CSaR</strong><br></h1>
                            <p class="lead d-inline" data-aos="fade-up" style="color: #f4eeee;width: 50%;">
                                <strong>Culture Sports and Responsibility</strong><br></p>
                            <a href="login/login.php">
                                <div class="wrap">
                                    <button class="button glow-button" target="_blank">Login<i class="fa fa-sign-in" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </a>
                            <div class="header-icon" style="margin-top: 80px;">
                                <a data-aos="fade-up" class="nav-link scrollto" href="#about-us">
                                    <i class="fa fa-angle-down hvr-hang" style="color: #f4eeee;font-size: 48px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start: #about -->
        <section id="about-us" class="about-us" style="padding-bottom: 50px;">
            <div>
                <!-- Top Bar -->

                <div
                    class="announcementBlock"
                    style="display:inline-block; width:100%; height: 27px;">
                    <div class="announcements" style="padding-top: 0px">
                        <div
                            class="announcements-label"
                            style="padding-top: 5px; padding-bottom: 5px; background-color: #FC654C; text-align: right; width:12%;float: left; height: 38px;">
                            <strong style="padding-right: 10px">
                                <span class="show-large">Announcements:</span>
                                <span class="show-mobile">
                                    <i aria-hidden="true" class="fas fa-bullhorn"></i></span></strong>
                        </div>
                        <div
                            class="announcements-content "
                            style="padding-top: 5px; padding-bottom: 5px; background-color: #ffc600; color: #07294d; width:88%; float: left; height: 38px;">

                            <marquee
                                scrolldelay="80"
                                scrollamount="5"
                                onmouseover="this.stop();"
                                onmouseout="this.start();">
                                <div class='marquee-hsas-shortcode-88' style='width: 100%;overflow: hidden;'>
                                    <a href="./announcements.php" style="color: inherit;">
                                        <b><?=$getallAnnousementStringIs?></b>
                                    </a>
                                </marquee>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Top Bar -->
                <h2 class="text-center section-title"
                    data-aos="fade-up"
                    style="padding-top: 30px;padding-bottom: 0px;">
                    <strong>ABOUT US</strong>
                </h2>
            </div>
            <hr data-aos="fade-up"
                style="width: 120px;border-bottom-style: none;padding-bottom: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div data-aos="fade-up" class="hvr-trim">
                            <img class="img-fluid about-us-img" src="assets/img/about.jpg?h=4c35120507f5734af2f27b49432ace18">
                            </div>
                    </div>
                    <div class="col">
                        <div>
                            <h1 data-aos="fade-up" style="color: #002654;">
                                <strong>CULTURE SPORTS AND RESPONSIBILITY</strong>
                            </h1>
                            <p data-aos="fade-up" align="justify">Besides the clubs
                                given below, students are welcomed to send their ideas on new clubs to
                                <a href="mailto: csr.cit@cutm.ac.in" style="color: #000000;">csr.cit@cutm.ac.in</a>(CIT),
                                <a href="mailto: csr.pkd@cutm.ac.in" style="color: #000000;">csr.pkd@cutm.ac.in</a>
                                (JITM & CSREM) or submit the same to the professor In-Charge, CSR/Dean, Students'
                                Affairs. It is part of our curriculum that all students of
                                centurion University of Technology and Management will now be required to
                                participate in the Culture, Sports, and responsibility (CSR) program during
                                their studies at CUTM w.e.f. 2011-12 academic year.</p>
                            <a
                                class="btn btn-info about-us-btn"
                                role="button"
                                data-aos="fade-up"
                                href="aboutus.php"
                                style="width: 150px;">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: #about -->
        <!-- Start: Clubs -->
        <section
            id="services"
            class="services"
            style="margin-top: 20px;margin-bottom: 20px;background: rgba(240,249,255,0.6);">
            <div class="text-center">
                <h2
                    class="text-center section-title"
                    data-aos="fade-up"
                    style="padding-top: 50px;padding-bottom: 0px;">
                    <strong>CLUBS</strong>
                </h2>
                <hr
                    data-aos="fade-up"
                    style="width: 120px;border-bottom-style: none;padding-bottom: 30px;">
                <p data-aos="fade-up" style="margin-bottom: 25px;">Total Hours spent by three clubs in all 6 Campuses</p>
            </div>
            <div class="container">
                <div class="row">
                    <div
                        class="col-sm-12 col-lg-4 col-md-6 icon-box"
                        data-aos="fade-up"
                        style="margin-top: 20px;margin-bottom: 20px;">
                        <div class="float-left services-icon" data-aos="fade-up">
                            <i class="fas fa-atom fa-spin" style="font-size: 25px;"></i>
                        </div>
                        <div>
                            <h4 data-aos="fade-up" class="services-title">
                                <strong>Culture</strong><br></h4>
                            <h2 data-aos="fade-up" class="services-p"><?=(int)$Culturetime?>
                                Hrs</h2>
                        </div>
                    </div>
                    <div
                        class="col-sm-12 col-lg-4 col-md-6 icon-box"
                        style="margin-top: 20px;margin-bottom: 20px;">
                        <div class="float-left services-icon" data-aos="fade-up">
                            <i class="fas fa-basketball-ball fa-spin" style="font-size: 25px;"></i>
                        </div>
                        <div>
                            <h4 data-aos="fade-up" class="services-title">
                                <strong>Sports</strong><br></h4>
                            <h2 data-aos="fade-up" class="services-p"><?=(int)$Sportstime?>
                                Hrs</h2>
                        </div>
                    </div>
                    <div
                        class="col-sm-12 col-lg-4 col-md-6 icon-box"
                        style="margin-top: 20px;margin-bottom: 20px;">
                        <div class="float-left services-icon" data-aos="fade-up">
                            <i class="fas fa-hands-helping" style="font-size: 25px;"></i>
                        </div>
                        <div>
                            <h4 data-aos="fade-up" class="services-title">
                                <strong>Responsibility</strong><br></h4>
                            <h2 data-aos="fade-up" class="services-p"><?=(int)$Responsibilitytime?>
                                Hrs</h2>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End: #clubs -->
        <!-- Start: #CSaR team -->
        <section id="team" class="team" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="text-center">
                <h2
                    class="text-center section-title"
                    data-aos="fade-up"
                    style="padding-top: 30px;padding-bottom: 0px;">
                    <strong>Head of the CSaR</strong>
                </h2>
                <hr
                    data-aos="fade-up"
                    style="width: 120px;border-bottom-style: none;padding-bottom: 30px;">
                <p data-aos="fade-up" style="margin-bottom: 30px;">Get up, Dress up, Show up and Never give up</p>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-sm-6 col-lg-3 col-md-6 d-flex align-items-stretch"
                            data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="member">
                                <div class="member-img"><img
                                    class="img-fluid"
                                    src="assets/img/team/sangram1.png?h=63ff35667fd20fc8d734752b7311ed81"></div>
                                <div class="social">
                                    <a href="https://www.facebook.com/drsangramkeshariswain?mibextid=ZbWKwL">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/SangramBapun?s=20&t=mXKVnL_-wiF5_RCwC017lg">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://api.whatsapp.com/send/?phone=919937093949&text&app_absent=Hi">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="mailto: csrcell.bbs@cutm.ac.in">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/dr-sangram-keshari-swain-856868142">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                                <div class="member-info">
                                    <h5>
                                        <strong>Dr. Sangram Keshari Swain</strong>
                                    </h5>
                                    <span>Head of the CSaR</span></div>
                            </div>
                        </div>
                        <div
                            class="col-12 col-sm-6 col-lg-3 col-md-6 d-flex align-items-stretch"
                            data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="member">
                                <div class="member-img"><img
                                    class="img-fluid"
                                    src="assets/img/team/bikash.jpeg?h=5d89eb647c2023c1188505e36fe3a8a7"></div>
                                <div class="social">
                                    <a href="https://www.facebook.com/drsangramkeshariswain?mibextid=ZbWKwL">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="https://api.whatsapp.com/send/?phone=919090164162&text&app_absent=Hi">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="mailto: bikash.samantaray@cutm.ac.in">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </div>
                                <div class="member-info">
                                    <h5>
                                        <strong>Bikash Samantaray</strong>
                                    </h5>
                                    <span>Head of the Culture Club</span></div>
                            </div>
                        </div>
                        <div
                            class="col-12 col-sm-6 col-lg-3 col-md-6 d-flex align-items-stretch"
                            data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="member">
                                <div class="member-img"><img
                                    class="img-fluid"
                                    src="assets/img/team/rabi1.jpeg?h=6aa922960cedd9601f370b1ef9a1889b"></div>
                                <div class="social">
                                    <a href="https://www.facebook.com/rabinarayan.routray.7?mibextid=ZbWKwL">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="https://api.whatsapp.com/send/?phone=919437214867&text&app_absent=Hi">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="mailto: rabinarayan.routray@cutm.ac.in">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </div>
                                <div class="member-info">
                                    <h5>
                                        <strong>Rabi Narayan Routray</strong>
                                    </h5>
                                    <span>Head of the Sports Club</span></div>
                            </div>
                        </div>
                        <div
                            class="col-sm-6 col-lg-3 col-md-6 d-flex align-items-stretch"
                            data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="member">
                                <div class="member-img"><img
                                    class="img-fluid"
                                    src="assets/img/team/kula.jpeg?h=e6327a565d06c34455a63fad12fbff94"></div>
                                <div class="social">
                                    <a href="https://www.facebook.com/kulabhusan.pradhan?mibextid=ZbWKwL">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="https://api.whatsapp.com/send/?phone=919040540620&text&app_absent=Hi">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="mailto: kulabhusan.pradhan@cutm.ac.in">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/kula-bhusan-pradhan-269144120">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                                <div class="member-info">
                                    <h5>
                                        <strong>Kula Bhusan Pradhan</strong>
                                    </h5>
                                    <span>Head of the Responsibility Club</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: #CSaR team -->
        <!-- Start: Image gallery -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="text-center section-title" style="padding-bottom: 0px;">
                    <h3 class="text-uppercase" data-aos="fade-up" style="padding-top: 30px;">Image&nbsp;<span style="color: #f96302;">
                            <strong>Gallery</strong></span></h3>
                </div>
                <hr
                    data-aos="fade-up"
                    style="width: 120px;border-bottom-style: none;padding-bottom: 30px;">
                <div class="row">
                    <div class="col col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li class="filter-active" data-filter="*">All campuses&nbsp;</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row portfolio-container">
                    <a href="yearwise.php?campus=Balasore">
                        <div
                            class="col-12 col-lg-4 col-md-6 portfolio-item filter-app"
                            data-aos="fade-up"
                            data-aos-delay="100"><img
                            class="img-fluid"
                            src="assets/img/event_images/MRC_2314.JPG">
                            <div class="portfolio-info">
                                <h4>Balasore</h4>
                                <p>Event images</p>
                            </div>
                        </a>
                    </div>
                    <a href="yearwise.php?campus=Bhubaneswar">
                        <div
                            class="col-12 col-lg-4 col-md-6 portfolio-item filter-card"
                            data-aos="fade-up"
                            data-aos-delay="200"><img
                            class="img-fluid"
                            src="assets/img/event_images/DSC_0008.JPG">
                            <div class="portfolio-info">
                                <h4>Bhubaneswar</h4>
                                <p>Event images</p>
                            </div>
                        </a>
                    </div>
                    <a href="yearwise.php?campus=Balangir">
                        <div
                            class="col-12 col-lg-4 col-md-6 portfolio-item filter-web"
                            data-aos="fade-up"
                            data-aos-delay="300"><img
                            class="img-fluid"
                            src="assets/img/event_images/IMG_6868.JPG">
                            <div class="portfolio-info">
                                <h4>Balangir</h4>
                                <p>Event images</p>
                            </div>
                        </a>
                    </div>
                    <a href="yearwise.php?campus=Paralakhemundi">
                        <div
                            class="col-12 col-lg-4 col-md-6 portfolio-item filter-app"
                            data-aos="fade-up"
                            data-aos-delay="400"><img
                            class="img-fluid"
                            src="assets/img/event_images/IMG_20220117_131641.jpg">
                            <div class="portfolio-info">
                                <h4>Paralakhemundi</h4>
                                <p>Event images</p>
                            </div>
                        </a>
                    </div>
                    <a href="yearwise.php?campus=Rayagada">
                        <div
                            class="col-12 col-lg-4 col-md-6 portfolio-item filter-app"
                            data-aos="fade-up"
                            data-aos-delay="400"><img
                            class="img-fluid"
                            src="assets/img/event_images/IMG_7514.JPG">
                            <div class="portfolio-info">
                                <h4>Rayagada</h4>
                                <p>Event images</p>
                            </div>
                        </a>
                    </div>
                    <a href="yearwise.php?campus=Chatrapur">
                        <div
                            class="col-12 col-lg-4 col-md-6 portfolio-item filter-app"
                            data-aos="fade-up"
                            data-aos-delay="400"><img
                            class="img-fluid"
                            src="assets/img/event_images/MRC_5418.JPG">
                            <div class="portfolio-info">
                                <h4>Chatrapur</h4>
                                <p>Event images</p>
                            </div>
                        </a>
                    </div>
                </div>
                <a
                    class="btn btn-info about-us-btn"
                    role="button"
                    data-aos="fade-up"
                    href="imagegallery.php"
                    style="width: 150px;">More images</a>
            </div>
        </section>
        <!-- End: Image gallery -->
        <!-- Campus -->
        <section
            id="pricing"
            class="pricing"
            style="margin-top: 20px;margin-bottom: 20px;">
            <div class="text-center">
                <h2
                    class="text-center section-title"
                    data-aos="fade-up"
                    style="padding-top: 20px;padding-bottom: 0px;">
                    <strong>Campus</strong><br></h2>
                <hr
                    data-aos="fade-up"
                    style="width: 120px;border-bottom-style: none;padding-bottom: 30px;">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-lg-3 col-xl-3 col-md-6"
                            data-aos="fade-up"
                            data-aos-delay="100"
                            style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="card shadow" style="width: 277.5;">
                                <div
                                    class="card-body"
                                    style="padding: 0px;padding-right: 0px;padding-left: 0px10px;width: 100%;background: #fff1dc;">
                                    <i class="fa fa-map-marker fa-5x" style="color:tomato"></i>
                                    <h4 class="card-title" style="margin-top: 20px;">
                                        <strong>Balasore</strong>
                                    </h4>
                                    <ul class="list-group">
                                        <p class="text-center" data-aos="fade-up">Paikasta, Gopalpur, Balasore, Pin-756044</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-3 col-xl-3 col-md-6"
                            data-aos="fade-up"
                            data-aos-delay="100"
                            style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="card shadow" style="width: 277.5;">
                                <div
                                    class="card-body"
                                    style="padding: 0px;padding-right: 0px;padding-left: 0px10px;width: 100%;background: #fff1dc;">
                                    <i class="fa fa-map-marker fa-5x" style="color:tomato"></i>
                                    <h4 class="card-title" style="margin-top: 20px;">
                                        <strong>Bhubaneswar</strong>
                                    </h4>
                                    <ul class="list-group">
                                        <p class="text-center" data-aos="fade-up">Ramchandrapur, Jatni, Bhubaneswar Dist, Khurda Odisha.</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-3 col-xl-3 col-md-6"
                            data-aos="fade-up"
                            data-aos-delay="200"
                            style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="card shadow" style="width: 277.5;">
                                <div
                                    class="card-body"
                                    style="padding: 0px;padding-right: 0px;padding-left: 0px10px;width: 100%;background: #fff1dc;">
                                    <i class="fa fa-map-marker fa-5x" style="color:tomato"></i>
                                    <h4 class="card-title" style="margin-top: 20px;">
                                        <strong>Balangir</strong>
                                    </h4>
                                    <ul class="list-group">
                                        <p class="text-center" data-aos="fade-up">Behind BSNL Office, IDCO Land, Rajib Nagar, Balangir, Odisha .</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-3 col-xl-3 col-md-6"
                            data-aos="fade-up"
                            data-aos-delay="300"
                            style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="card shadow" style="width: 277.5;">
                                <div
                                    class="card-body"
                                    style="padding: 0px;padding-right: 0px;padding-left: 0px10px;width: 100%;background: #fff1dc;">
                                    <i class="fa fa-map-marker fa-5x" style="color:tomato"></i>
                                    <h4 class="card-title" style="margin-top: 20px;">
                                        <strong>Paralakhemundi</strong>
                                    </h4>
                                    <ul class="list-group">
                                        <p class="text-center" data-aos="fade-up">Village Alluri Nagar, R Sitapur, Via- Uppalada, Paralakhemundi.</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-3 col-xl-3 col-md-6"
                            data-aos="fade-up"
                            data-aos-delay="400"
                            style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="card shadow" style="width: 277.5;">
                                <div
                                    class="card-body"
                                    style="padding: 0px;padding-right: 0px;padding-left: 0px10px;width: 100%;background: #fff1dc;">
                                    <i class="fa fa-map-marker fa-5x" style="color:tomato"></i>
                                    <h4 class="card-title" style="margin-top: 20px;">
                                        <strong>Rayagada</strong>
                                    </h4>
                                    <ul class="list-group">
                                        <p class="text-center" data-aos="fade-up">IDCO Industrial Area, Pitamahal, Rayagada, Odisha.</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-3 col-xl-3 col-md-6"
                            data-aos="fade-up"
                            data-aos-delay="400"
                            style="margin-top: 15px;margin-bottom: 15px;">
                            <div class="card shadow" style="width: 277.5;">
                                <div
                                    class="card-body"
                                    style="padding: 0px;padding-right: 0px;padding-left: 0px10px;width: 100%;background: #fff1dc;">
                                    <i class="fa fa-map-marker fa-5x" style="color:tomato"></i>
                                    <h4 class="card-title" style="margin-top: 20px;">
                                        <strong>Chatrapur</strong>
                                    </h4>
                                    <ul class="list-group">
                                        <p class="text-center" data-aos="fade-up">Industrial Estate , Kaliabali Chhaka, CHATRAPUR Ganjam - 761045.</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: campus -->
        <!-- Start: Gajajyoti -->
        <div data-bs-parallax-bg="true" class="highlight-blue">
            <div class="container">
                <!-- Start: Intro -->
                <div class="intro">
                    <h2 class="text-center" data-aos="fade-up">Gajajyoti</h2>
                    <p class="text-center" data-aos="fade-up">Annual fest in every year, it is managed by Culture Sports and Responsibility</p>
                </div>
                <!-- End: Intro -->
            </div>
        </div>
        <!-- End: Highlight Blue -->
        <!-- Start: contact-form-info -->
        <section id="contact" class="getintouch">
            <div class="container modern-form">
                <div class="text-center">
                    <h4 data-aos="fade-up" style="color: #212529;font-size: 40px;">Get in touch</h4>
                </div>
                <hr data-aos="fade-up" class="modern-form__hr" style="margin-bottom: 26px;">
                <div class="row text-center" style="background-color: #ffffff;">
                    <div class="col-6 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <i
                                class="icon ion-ios-location get-in-touch-icons"
                                style="font-size: 40px;color: #f95602;"></i>
                            <h5 class="icon-title" style="color: #ff993f;">Location:</h5>
                            <p style="color: #cccccc;">Ramachandrapur, Jatni, Odisha 752050&nbsp;<br></p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div>
                            <i
                                class="icon ion-ios-time get-in-touch-icons"
                                style="font-size: 40px;color: #f95602;"></i>
                            <h5 class="icon-title" style="color: #ff993f;">Open-Hours</h5>
                            <p style="color: #cccccc;">Monday-Saturday:<br>09:30 AM - 05:00 PM</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div>
                            <i
                                class="icon ion-android-mail get-in-touch-icons"
                                style="font-size: 40px;color: #f95602;"></i>
                            <h5 class="icon-title" style="color: #ff993f;">E-mail:</h5>
                            <p style="color: #cccccc;">Contact: sangram@cutm.ac.in</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div>
                            <i
                                class="icon ion-ios-telephone get-in-touch-icons"
                                style="font-size: 40px;color: #f95602;"></i>
                            <h5 style="color: #ff993f;">Call-Us:</h5>
                            <p style="color: #cccccc;">+91-99370-93949, +91-93370-93949, +91-94374-93949</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: contact-form-info -->
        <!-- Start: Footer Dark -->
        <div
            class="footer-dark"
            style="background: url(&quot;assets/img/17-aoua1-night1.png?h=4b69291c09f7598206c94cbd642abc27&quot;) center / cover no-repeat, #03142c;">
            <footer>
                <div class="container">
                    <div class="row">
                        <!-- Start: Services -->
                        <div class="col-sm-6 col-md-3 item" data-aos="fade-up">
                            <h3>About</h3>
                            <ul>
                                <li>
                                    <a href="aboutus.php">CSaR</a>
                                </li>
                                <li>
                                    <a href="instruction.php">Instructions</a>
                                </li>
                                <li>
                                    <a href="campusachievements.php">Previous Achievements</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End: Services -->
                        <!-- Start: About -->
                        <div class="col-sm-6 col-md-3 item" data-aos="fade-up">
                            <h3>Clubs</h3>
                            <ul>
                                <li>
                                    <a href="imagegallery.php">Image gallery</a>
                                </li>
                                <li>
                                    <a href="announcements.php">Announcements</a>
                                </li>
                                <li>
                                    <a href="events.php">Events</a>
                                </li>
                                <li>
                                    <a href="assets/img/designer/index.html">Designer</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End: About -->
                        <!-- Start: Footer Text -->
                        <div class="col-md-6 item text" data-aos="fade-up">
                            <h4>Centurion University of Technology and Management</h4>
                            <h3>
                                <i class="fa fa-map-marker fa-1x" style="color:white"></i>
                                Corporate Office</h3>
                            <p>
                                HIG-4, Floor 1&2, Jaydev Vihar,Opp Pal Heights, Bhubaneswar, Dist: Khurda,
                                Odisha, India.</p>
                            <h3 style="color:white">
                                <i class="fa fa-globe fa-1x" style="color:white"></i>
                                <a href="https://cutm.ac.in/">www.cutm.ac.in</h3>
                            </a>
                        </div>
                        <!-- End: Footer Text -->
                        <!-- Start: Social Icons -->
                        <div class="col text-center" data-aos="fade-up">
                            <a data-aos="fade-up" href="https://www.facebook.com/centurionuniversity/"><img src="assets/img/logo/facebook.png"></a>
                            <a data-aos="fade-up" href="https://www.instagram.com/cutmodisha/"><img src="assets/img/logo/instagram.png"></a>
                            <a data-aos="fade-up" href="https://twitter.com/CUTMIndia"><img src="assets/img/logo/twitter.png"></a>
                            <a
                                data-aos="fade-up"
                                href="https://api.whatsapp.com/send/?phone=919692435036&text&app_absent=Hi"><img src="assets/img/logo/whatsapp.png"></a>
                            <a
                                data-aos="fade-up"
                                href="https://www.youtube.com/channel/UCy2a2NdleGSGlEd5FxyOcOA"><img src="assets/img/logo/youtube.png"></a>
                        </div>
                        <!-- End: Social Icons -->
                    </div>
                    <!-- Start: Copyright -->
                    <p class="copyright" style="color: #ffffff;">© Copyright&nbsp;<script>document.write(new Date().getFullYear())</script>. All Rights
                        Reserved.Designed and Devloped by <a href="./assets/img/designer/index.html" style="color: #ffffff;" >Centurion University of Technology and Management </a></p>
                    <!-- End: Copyright -->
                </div>
            </footer>
        </div>
        <!-- End: Footer Dark -->
        <div>
            <a class="text-center back-to-top" href="#">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/smart-forms.min.js?h=b7275171fee7833b33216c067c3940d2"></script>
        <script src="assets/js/bs-init.js?h=009e1093d04bef4d964ccf07197400d3"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
        <script
            src="assets/js/filter-portfolio-1.js?h=5e05f97835419d77ee3d48880a1e0e1f"></script>
        <script src="assets/js/filter-portfolio.js?h=8896e082b3fa1738e2e2f558a7fc1fa4"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.js"></script>
    </body>

</html>