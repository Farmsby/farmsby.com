<!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 flex-v-center">
                                <div class="navbar-header">
                                    <a href="index" class="custom-logo-link default-logo"><img src="assets/img/logo.png" alt="logo"></a>
                                    <a href="index" class="custom-logo-link sticky-logo"><img src="assets/img/sticky_logo.png" alt="logo"></a>
                                </div>
                                <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50">
                                    <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                                    <path class="line middle" d="m 30,50 h 40" />
                                    <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                                </svg>
                                <div id="main-nav" class="stellarnav">
                                    <ul id="nav" class="nav navbar-nav pull-right">
                                        <li class="<?php echo $uri['about'] ?>"><a href="about">About</a></li>
                                        <li class="<?php echo $uri['career'] ?>"><a href="farm">Farms</a></li>
                                        <li><a href="https://forum.farmsby.com/" target="_blank">Community</a></li>
                                        <li><a href="http://trade.farmsby.com/" target="_blank">Trade</a></li>
                                        <li class="<?php echo $uri['contact'] ?>"><a href="contact">Contact</a></li>
                                        <li id="mobileshow"><a href="https://app.farmsby.com/login">Login</a></li>
                                        <div class="header-call-to-action hidden-sm hidden-xs hidden-md">
                                            <a href="https://app.farmsby.com/login" class="action-button">Login</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--WELCOME TEXT AREA-->
        <div class="welcome-text-area font16 white">
            <div class="area-bg"></div>
            <div class="welcome-area section-padding">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h4 class="wow fadeInUp" data-wow-delay="0.3s">Africa's most lucrative Agro investment platform</h4>
                                <h1 class="wow fadeInUp" data-wow-delay="0.6s">Let your Wallet<span> Do the Farming</span></h1>
                                <p class="wow fadeInUp bannerDesc" data-wow-delay="0.9s">Farmsby is an Agro Investment platform that leverages on the power of crowd funding to generate capital for African Farmers, thereby eliminating food insecurity, increasing the volume of food production and earning solid returns on all investments made.</p>
                                <strong class="wow fadeInUp" data-wow-delay="1.3s">
                                    Earn 50% return on Standard Investment.
                                    <br>Earn over 75% return on Joint Ventures.
                                </strong>
                                <div class="home-button mt40 xs-mt40 wow fadeInUp" data-wow-delay="1.6s">
                                    <a class="xs-mb20" href="https://wa.me/2348065032176">Talk to us</a>
                                    <a href="http://app.farmsby.com/join">Join now <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="welcome-layer-4 hidden-sm hidden-xs">
                    <div class="home3-layer-2 wow fadeInRight" data-wow-delay="0.5s">
                        <img src="assets/img/screenshots/purple-screenshot-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--WELCOME TEXT AREA END-->
    </header>
    <!--END TOP AREA-->
    <?php 
        $img = array(
            1 => 'assets/img/background/hero1.jpg',
            2 => 'assets/img/background/hero2.jpg', 
            3 => 'assets/img/background/hero3.jpg',
            4 => 'assets/img/background/hero4.jpg'
        ); 
        $m_img = array(
            1 => 'assets/img/background/m-hero1.jpg',
            2 => 'assets/img/background/m-hero2.jpg'
        ); 
        $int_rand = array_rand($img);
        $m_int_rand = array_rand($m_img);
        echo 
        '<style type="text/css">
            .home-three .welcome-text-area .area-bg {
                background-image: url('.$img[$int_rand].');
            }
            .bannerDesc { color: #ccf9c5; }
            @media only screen and (max-width: 767px) {
                .home-three .welcome-text-area .area-bg {
                    background-image: url('.$m_img[$m_int_rand].');
                }
                .bannerDesc { color: #fff; }
            }
            #mobileshow { 
                display:none; 
            }
            @media screen and (max-width: 500px) {
                #mobileshow { 
                    display:block; 
                }
            }
        </style>';
    ?>