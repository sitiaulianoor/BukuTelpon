<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHONE BOOK</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="js/modernizr.custom.js"></script>

</head>

<body>

    <a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>
    <!-- HHHHHHHHHHHHHHHHHH        Preloader          HHHHHHHHHHHHHHHH -->
    <!-- <div id="preloader"></div> -->
    <!-- HHHHHHHHHHHHHHHHHH        Header          HHHHHHHHHHHHHHHH -->
    <section id="header" class="header">
        <div class="top-bar">
            <div class="container">
                <div class="navigation" id="navigation-scroll">
                        <div class="row">
                            <div class="col-md-11 col-xs-10">
                                <a href="#"><span id="logo"><strong class="strong">PHONE</strong>BOOK</span></a>
                            </div>

                        </div><!-- /.row -->
                    </div><!-- /.navigation -->
                </div><!--/.container-->
            </div><!--/.top-bar-->

        <div class="container">
            <div class="starting">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/lucy.png" alt="LUCY" class="wow flipInY animated animated">
                    </div>
                    <div class="col-md-6">
                        <div class="banner-text">
                             <h2 class="animation-box wow bounceIn animated"><strong class="strong">One touch for</strong><br>
                            all KNOWs</h2>
                            <p>
                                 This web contains information about employees contacts
                            </p>
                             <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=formlogin" class="btn btn-download wow animated fadeInLeft">
                            <i class="fa fa-lock" style="font-size:17px">&nbsp; &nbsp;<strong>Login as Admin</strong></i>
                             
                            <br/> </a>
                            <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=guest_phone" class="btn btn-download wow animated fadeInRight">
                             <i class="fa fa-user" style="font-size:17px">&nbsp; &nbsp;<strong>Login as Guest</strong></i>
                            <br/> </a>
                        </div> <!-- /.banner-text -->
                    </div>
                </div>
            </div>
            <!-- /.starting -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#header -->



    <!-- HHHHHHHHHHHHHHHHHH        Footer          HHHHHHHHHHHHHHHH -->

    <section id="footer" class="wrapper">
        <div class="container text-center">
            <div class="footer-logo">
                <h1 class="text-center animation-box wow bounceIn animated">OUR WEBSITE</h1>
            </div>
            <ul class="social-icons text-center">
                <li class="wow animated fadeInLeft facebook"><a href="https://www.pupuk-kujang.co.id/"><img src="../login/images/logo.png" style="width:60px;height:60px"></i></a></li>

            </ul>

            <div class="copyright">
                 <div>-Dept.Teknologi Informasi & Komunikasi-</div>
                 <div>©2018</div>
                 <div>All Rights Reserved</div>
            </div>
        </div><!-- container -->
    </section>

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/script.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(){
            $(".hideit").click(function(){
                $(".overlay").hide();
            });
            $("#trigger-overlay").click(function(){
                $(".overlay").show();
            });
        });
    </script>
    <script>
        $(document).ready(function(){

          var kawa = $('.top-bar');
          var back = $('#back-to-top');
          function scroll() {
             if ($(window).scrollTop() > 700) {
                kawa.addClass('fixed');
                back.addClass('show-top');

             } else {
                kawa.removeClass('fixed');
                back.removeClass('show-top');
             }
          }

          document.onscroll = scroll;
        });
    </script>
    <!--HHHHHHHHHHHH        Smooth Scrooling     HHHHHHHHHHHHHHHH-->
    <script>
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
    </script>
</body>
</html>
