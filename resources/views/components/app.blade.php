<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>TARDO // Producer - Sound Engineer - DJ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CInconsolata:400,700" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset ('izzy/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset ('izzy/css/theme.min.css')}}" />
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-toggle toggle-menu menu-right pull-right push-body collapsed" data-toggle="colapse" data-target="#mobile-sidebar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="" href="index.php" style="display: inline-block; width: 200px !important;">
                        <img src="{{ asset ('izzy/Whitelogo-nobg.png')}}" alt="" height="87" width="270" />
                    </a>
                </div>
                <!-- Mobile Menu -->
                <div id="mobile-sidebar " class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
                    <div class="row">
                        <img src="{{ asset ('izzy/Whitelogo-nobg.png')}}" alt="" height="87" width="70" />
                        <ul class="mobile-menu">
                            <li class="mobile-dropdown">
                                <a href="{{ route ('page.home')}}" class="mobile-dropdown-toggle expander" data-toggle="dropdown" role="button" aria-expanded="false">Home</a>

                            </li>
                            <li><a href="{{ route ('page.about')}}">Izzy</a></li>
                            <li class="mobile-dropdown">
                                <a href="top-hits.php" class="mobile-dropdown-toggle expander" aria-expanded="false">Top hits</a>
                            </li>

                            <li class="mobile-dropdown">
                                <a href="gallery.php" class="mobile-dropdown-toggle expander" aria-expanded="false">Gallery</a>
                            </li>
                            <li><a href="contact.php">Contact Me</a></li>
                        </ul>
                        <p class="mobile-sidebar-msg text-white">
                            Izzy <span class="text-primary">//&nbsp;</span><span class="text-semi-white text-caps">All rights reserved © 2023
                            </span>
                        </p>
                    </div>
                </div>
                <!-- End of mobile menu -->
                <!-- Collect the nav links, forms, and other content for toggling -->

                <!-- Desktop menu -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="{{ route ('page.home')}}" class="dropdown-toggle" aria-expanded="false">Home </a>

                        </li>
                        <li><a href="{{ route ('page.about')}}">Izzy</a></li>
                        <li class="dropdown">
                            <a href="top-hits.php" class="dropdown-toggle" aria-expanded="false">Top hits</a>
                        </li>

                        <li class="dropdown">
                            <a href="gallery.php" class="dropdown-toggle" aria-expanded="false">Gallery</a>
                        </li>

                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right"></ul>
                </div>
                <!-- navbar-collapse -->
                <!-- end Desktop menu -->
            </div>
        </div>
        <!-- container-fluid -->
    </nav>
    @yield("contents")
    <div class="footer-placeholder"></div>
    <footer class="footer-semi-dark vertical-middle text-center">
        <div class="col-md-12">
            <div class="container">
                <ul class="social-icons text-white">
                    <li>
                        <a href="#"><i class="icon ion-social-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon ion-social-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon ion-social-twitter"></i></a>
                    </li>

                </ul>
            </div>
            <div class="copyright-wrap text-center">
                <div class="container">
                    <hr class="copyright-hr" />
                    <p class="text-white">
                        All rights reserved © 2023 - IZZY
                        <i class="icon ion-heart text-primary"></i> 2023
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset ('izzy/js/packages.min.js')}}"></script>
    <script src="{{ asset ('izzy/js/theme.min.js')}}"></script>
</body>

</html>
