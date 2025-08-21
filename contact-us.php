<?php
//Please Make Sure that extension=php_openssl.dll Enabled in server
include("phpmailer/class.phpmailer.php");

if (!empty($_POST)) {
    $fromEmail = "tufftron@gmail.com"; //From Email Address
    $fromPassword = "Usa@1234"; //From Email Password
    $fromName = "Tufftron"; //From Email Display Name
    $to = "info@tufftron.com";
    $to1 = "tufftron@gmail.com";
    $fromMailAccount = "zoho"; //gmail or outlook or zoho


    $subject = 'Contact Form';
    $smtpSt = "ssl";
    $smptpPort =    465; // Or 587
    $smtpHost = "smtp.gmail.com";
    if ($fromMailAccount == "outlook") {
        $smtpSt = "ssl";
        $smptpPort =    587;
        $smtpHost = "smtp.live.com";
    } else if ($fromMailAccount == "zoho") {
        $smtpSt = "ssl";
        $smptpPort =    25;
        $smtpHost = "smtp.zoho.com";
    }
    $mail = new PHPMailer();
    // $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Port = $smptpPort;
    $mail->Username = $fromEmail;
    $mail->Password = $fromPassword;
    $mail->SMTPSecure = $smtpSt;
    $mail->From = $fromEmail;
    $mail->FromName = $fromName;
    $mail->isHTML(true);
    $mail->Subject = $subject;

    //$services=["toughened/tempered glass, insulated glass, frosted glass, laminated glass, privacy glass "];
    $message = 'New Enquiry,' . "<br>";
    $message .= 'FName: ' . $_POST['fname'] . "<br>";
    $message .= 'LName: ' . $_POST['lname'] . "<br>";
    $message .= 'Email: ' . $_POST['email'] . "<br>";
    $message .= 'Phone: ' . $_POST['phone'] . "<br>";
    $message .= 'Message: ' . $_POST['message'];
    // echo $message;exit;
    $mail->Body = $message;
    $mail->addAddress($to);
    $mail->addAddress($to1);
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

    header('Location: thankyou.html');
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="revisit-after" content="7 days">
    <meta name="copyright" content="2024 Tufftron">
    <meta name="publisher" content="Tufftron">
    <meta name="rating" content="general">
    <meta name="robots" content="index, follow">
    <title>Contact Tufftron – Best Toughened Glass Suppliers in Guntur</title>
    <meta name="description" content="Connect with Tufftron, expert toughened glass suppliers in Guntur. Trusted for quality toughened, heat strengthened, and insulated glass solutions.">
    <meta name="keywords" content="Contact Tufftron,Toughened Glass Suppliers Guntur,Glass Suppliers in Guntur">
    <meta name="author" content="Tufftron" />
    <meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=2" />
    
    <link rel="shortcut icon" href="img/favicon.png" />
   <link rel="preload"  href="css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript> <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /></noscript>
 <link rel="preload"  href="css/animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="css/animate.css" /></noscript>
 <link rel="preload"  href="css/flaticon.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="css/flaticon.css" /></noscript>
<link rel="preload"  href="css/font-awesome.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" /></noscript>
<link rel="preload"  href="css/themify-icons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="css/themify-icons.css" /></noscript>
<link rel="preload"  href="css/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="css/slick.css" /></noscript>
<link rel="preload"  href="css/prettyPhoto.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" /></noscript>
<link rel="preload"  href="css/main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="css/main.css" /></noscript>
<link rel="preload"  href="css/megamenu.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="css/megamenu.css" /></noscript>
<link rel="preload"  href="css/responsive.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="css/responsive.css" /></noscript>
<link rel="preload"  href="revolution/css/rs6.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>  <link rel="stylesheet" type="text/css" href="revolution/css/rs6.css" /></noscript>
<link rel="preload" href="css/shortcodes.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" type="text/css" href="css/shortcodes.css" /></noscript>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q4JFFVRKY3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q4JFFVRKY3');
</script>
<script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "VAJRA SAFETY GLASS - TUFFTRON | Best Toughened Glass Manfactures in AP",
  "url": "https://tufftron.com/contact-us.php",
  "logo": "https://tufftron.com/img/logo.avif",
  "image": "https://tufftron.com/img/About-tufftron.avif",
  "description": "Tufftron offers the best toughened glass in Guntur. Your trusted expert glass suppliers for custom toughened, insulated & heat strengthened glass solutions.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "near by Guntur - Prathipadu Road, Kurnuthula",
    "addressLocality": "Guntur",
    "addressRegion": "Andhra Pradesh",
    "postalCode": "522017",
    "addressCountry": "IN"
  },
  "telephone": "+91- 9519516224",
  "openingHours": "Mo-Sa 09:00-18:00",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-9519516224",
    "contactType": "Customer Service",
    "areaServed": "IN"
  },
  "sameAs": [
    "https://www.instagram.com/vajra_safety/",
    "https://www.youtube.com/channel/UCRTUHr3OPR5siCj06-eaYXg"
  ]
}
    </script>
</head>

<body>

    <!--page start-->
    <div class="page ttm-bgcolor-grey">

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex flex-row align-items-center justify-content-between">
                                    <!-- site-branding -->
                                    <div class="site-branding ">
                                       <a class="home-link" href="index.html" title="TUFFTRON" rel="home">
                                            <img id="logo-img"  class="img-fluid"  width="167" height="53"
                                                src="img/logo.avif" alt="TUFFTRON logo-img" loading="lazy">
                                        </a>
                                    </div><!-- site-branding end -->
                                    <div class="d-flex flex-row">
                                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                        </div>
                                        <!-- menu -->
                                        <nav class="main-menu menu-mobile" id="menu">
                                            <ul class="menu">
                                                <li class="mega-menu-item">
                                                    <a href="index.html">Home</a>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="about-us.html">About</a>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="infrastructure.html">Infrastrucutre</a>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Innovations</a>
                                                    <ul class="mega-submenu">
                                                        <li><a href="tempered-toughened-glass.html">TOUGHEND /TEMPERED
                                                                GLASS</a></li>
                                                        <li><a href="heat-strength-glass.html">HEAT STRENGTH GLASS</a>
                                                        </li>
                                                        <li><a href="insulated-glass.html">INSULATED GLASS</a></li>
                                                        <li><a href="frosted-glass.html">FROSTED GLASS</a></li>
                                                        <li><a href="laminated-glass.html">LAMINATED GLASS</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-link">Media</a>
                                                    <ul class="mega-submenu">
                                                        <li><a href="testimonials.html">Testimonials</a></li>
                                                        <li><a href="gallery.html">Photo Gallery</a></li>
                                                        <li><a href="#">Certifications</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="blogs.html">Blogs</a>
                                                </li>
                                                <li class="mega-menu-item active">
                                                    <a href="contact-us.php">Contact Us</a>
                                                </li>
                                            </ul>
                                        </nav><!-- menu end -->
                                    </div>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header>
        <!--header end-->

        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h1 class="title">Contact Us</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a href="index.html" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                        </span>
                                        <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                        <span>Contact Us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--site-main start-->
        <div class="site-main">


            <section class="ttm-row pt-85 res-991-pt-45 pb-0 res-991-pb-0 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style7">
                                <div class="featured-inner">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">
                                            <i class="flaticon flaticon-call-1"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Phone Number</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>+91-951 951 6224</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style7">
                                <div class="featured-inner">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">
                                            <i class="flaticon flaticon-email"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Email Address</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>info@tufftron.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style7">
                                <div class="featured-inner">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">
                                            <i class="flaticon flaticon-navigation"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Visit Us On</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Guntur</p>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style7">
                                <div class="featured-inner">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">
                                            <i class="flaticon flaticon-wall-clock"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Visit Between</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Mon - Sat : 9.00 - 6.00</p>
                                            <!-- <p>Sunday : Closed</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
                </div>
            </section>


            <!--- conatact-section -->
            <section class="ttm-row conatact-section bg-layer-equal-height mt_15 clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="col-bg-img-eight ttm-bg ttm-col-bgimage-yes ttm-textcolor-white spacing-11 z-index-2">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            </div>
                            <!-- col-img-bg-img-eight end-->
                        </div>
                        <div class="col-lg-8">
                            <!-- col-img-img-eight -->
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span spacing-12">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <!-- section title -->
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h2 class="title">Let’s Talk</h2>
                                        </div>
                                    </div><!-- section title end -->
                                    <div class="padding_top30">
                                        <form id="contact_form" class="contact_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                                            <div class="row ttm-boxes-spacing-20px">
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="fname" type="text" value="" placeholder="First Name..." required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="lname" type="text" value="" placeholder="Last Name..." required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="email" type="text" value="" placeholder="Email Address..." required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number..." required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>
                                                        <span class="text-input"><textarea name="message" cols="50" rows="5" placeholder="Enter Message Here..." required="required"></textarea></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button class="ttm-btn ttm-btn-size-md ttm-btn-shape-squar ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-darkgrey mt-15" type="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- col-img-bg-img-two end-->
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!-- conatact-section end -->


            <!--google_map-->
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15323.632338805064!2d80.374363!3d16.2251644!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x217c37137cf13f1c!2zMTbCsDEzJzMwLjYiTiA4MMKwMjInNTkuMiJF!5e0!3m2!1sen!2sin!4v1654192789309!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>



        </div>
        <!--site-main end-->



        <!--footer start-->
        <footer class="footer ttm-bg ttm-bgcolor-darkgrey widget-footer clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="second-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                            <div class="widget widget_text clearfix">
                                <div class="footer-logo">
                                    <img width="205" height="65" id="footer-logo-img" class="img-fluid" src="img/logo.avif" alt="tufftron">
                                </div>
                                <div class="textwidget widget-text">
                                    <p>A firm which caters to all your safety glass<br /> needs with finest quality
                                        delivered in time .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                               <h2 class="widget-title">Quick Links</h2>
                                <ul id="menu-footer-service-link" class="menu">
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="tempered-toughened-glass.html">Toughened Glass</a></li>
                                    <li><a href="infrastructure.html">Infrastructure</a></li>
                                    <li><a href="heat-strength-glass.html">Heat Strengthen Glass</a></li>
                                    <li><a href="insulated-glass.html">Insulated Glass</a></li>
                                    <li><a href="frosted-glass.html">Frosted Glass</a></li>
                                    <li><a href="laminated-glass.html">Laminated Glass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-4 widget-area">
                            <div class="widget widget-timing clearfix">
                                <h3 class="widget-title">Contact</h3>
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                            <i class="flaticon flaticon-call-1"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Phone Number</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>+91 951 951 6224</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                            <i class="flaticon flaticon-email"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Email Address</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>info@tufftron.com</p>
                                        </div>
                                    </div>
                                </div>
                               <div class="social-icons d-flex align-items-center justify-content-start">
                                        <ul class="list-inline">
                                            <li><a href="https://www.facebook.com/profile.php?id=100084621490752"
                                                    target="_blank" aria-label="Visit our Facebook profile"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://www.instagram.com/vajra_safety/"
                                                target="_blank" aria-label="Visit our Instagram page"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCRTUHr3OPR5siCj06-eaYXg"
                                                    target="_blank" aria-label="Visit our YouTube channel"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer-text">
                    <div class="row copyright">
                        <div class="col-lg-7 col-md-8">
                            <p class="mb-0 res-991-pb-15">Copyright © 2025 <a href="#">TUFFTRON</a>. All
                                rights reserved.</p>
                        </div>
                        <div class="col-lg-5 col-md-4">
                            <div class="social-icons d-flex align-items-center justify-content-end">
                                <p class="mb-0 res-991-pb-15">Developed By <a href="http://chssoftwares.com/" target="_blank">CHS Software Solutions</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->



        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->


    <!-- Javascript -->

  <script src="js/jquery.min.js" defer></script>
<script src="js/jquery-migrate-1.4.1.min.js" defer></script>
<script src="js/tether.min.js" defer></script>
<script src="js/bootstrap.min.js" defer></script>
<script src="js/jquery.easing.js" defer></script>
<script src="js/jquery-waypoints.js" defer></script>
<script src="js/jquery-validate.js" defer></script>
<script src="js/jquery.prettyPhoto.js" defer></script>
<script src="js/slick.min.js" defer></script>
<script src="js/numinate.min.js" defer></script>
<script src="js/imagesloaded.min.js" defer></script>
<script src="js/main.js" defer></script>
<script src="revolution/js/slider.js" defer></script>
<script src="revolution/js/revolution.tools.min.js" defer></script>
<script src="revolution/js/rs6.min.js" defer></script>
<script src="js/jquery.event.move.js" defer></script>
<script src="js/jquery.twentytwenty.js" defer></script>
<script src="js/circle-progress.min.js" defer></script>

</body>

</html>