<!--START TOP AREA-->
    <header class="top-area-min" id="home">
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
                                        <div class="header-call-to-action hidden-sm hidden-xs hidden-md">
                                            <div class="home-button">
                                                <a class="xs-mb20" href="https://app.farmsby.com/login">Login</a>
                                                <a href="https://app.farmsby.com/join">Join now <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
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
            <div class="area-bg" style="height:280px;"></div>
            <div class="welcome-area section-padding">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h4 class="wow fadeInUp" data-wow-delay="0.3s"><?php echo $data['banner'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--WELCOME TEXT AREA END-->
    </header>
    <!--END TOP AREA-->