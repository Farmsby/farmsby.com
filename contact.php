<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Farmsby - We always have our ears open for a call out" />
    <meta name="keywords" content="Africa, Investment, Platform, Agro, Farmsby, Farm, Farmsby, Safe, Contact" />

    <!--====== TITLE TAG ======-->
    <title>Farmsby - Contact</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="assets/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="assets/css/typography.css" rel="stylesheet">
    <link href="assets/css/header.css" rel="stylesheet">
    <link href="assets/css/blog-and-pages.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="overflow-xhidden home-three" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <?php
        $data['banner'] = "Contact us";
        $uri['contact'] = "active";
        $uri['overview'] = $uri['career'] = $uri['about'] = NULL; 
        include_once 'widgets/min-header.php'; 
    ?>

    <!--CONTACT AREA-->
    <section class="contact-area padding-100-50 gray-bg" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title center">
                        <h4 class="subtitle">Contact Us</h4>
                        <h2>We'd like to hear from you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="contact-content padding50 mb50">
                        <div class="single-contact">
                            <div class="contact-icon"><i class="dripicons-location"></i></div>
                            <h3>Location</h3>
                            
                            <p><strong>Office Address:</strong> <br> 42 Woji Road, GRA, Port Harcourt.</p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon"><i class="dripicons-mail"></i></div>
                            <h3>Contact</h3>
                            <p>hello@farmsby.com</p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon"><i class="dripicons-phone"></i></div>
                            <h3>Contact</h3>
                            <p><strong>Port Harcourt: </strong><br> +(234) 808 154 5236 </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="contact-form mb50">
                        <form action="module/contact" method="post">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="name-field">
                                        <div class="form-input">
                                            <label for="form-name">Your Name</label>
                                            <input type="text" class="form-control" id="form-name" name="name" placeholder="Jhonathan Doe" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="email-field">
                                        <div class="form-input">
                                            <label for="form-email">Your Mail</label>
                                            <input type="email" class="form-control" id="form-email" name="email" placeholder="support@mail.com" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="phone-field">
                                        <div class="form-input">
                                            <label for="form-phone">Your Subject</label>
                                            <input type="text" class="form-control" id="form-phone" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="message-field">
                                        <div class="form-input">
                                            <label for="form-message">Your Message</label>
                                            <textarea class="form-control" rows="6" id="form-message" name="message" placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group mb0">
                                        <button type="submit" class="read-more active" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT AREA END-->

    <!--FOOER AREA-->
    <?php include_once 'widgets/footer.php'; ?>
    <!--FOOER AREA END-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147734465-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-147734465-1');
    </script>

    <!--====== SCRIPTS JS ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="assets/js/vendor/jquery.easing.1.3.js"></script>
    <script src="assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/vendor/jquery.appear.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/stellar.js"></script>
    <script src="assets/js/jquery.parallax-layer-scroll.js"></script>
    <script src="assets/js/chaffle.min.js"></script>
    <script src="assets/js/anime.min.js"></script>
    <script src="assets/js/jquery-modal-video.min.js"></script>
    <script src="assets/js/venobox.min.js"></script>
    <script src="assets/js/stellarnav.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/placeholdem.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/footer-reveal.min.js"></script>
    <script src="assets/js/ResizeSensor.min.js"></script>
    <script src="assets/js/theia-sticky-sidebar.min.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="assets/js/main.js"></script>

</body>

</html>