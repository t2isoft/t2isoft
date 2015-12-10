<!DOCTYPE html>    <!----------test  local----->
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="fr" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">


<meta name="author" content="T2ISOFT">
<meta name="keywords" content="">
<title> T2ISOFT Agence web</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
<link href="style.css" media="screen" rel="stylesheet">
<link href="screen.css" media="screen" rel="stylesheet">

<!-- custom CSS -->
<link rel="stylesheet" href="custom.css">
<link href="css/flexslider.css" media="screen" rel="stylesheet" type="text/css">
<!-- favicon.ico and apple-touch-icon.png -->
<link rel="shortcut icon" href="http://www.t2isoft.com/images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57-iphone.php">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72-ipad.php">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114-iphone4.php">
<!-- Mobile optimized -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/respond.min.js"></script>
<script src="js/libs/jquery.min.js"></script>

<!-- scripts -->
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/general.js"></script>

<!-- carousel -->
<script src="js/jquery.carouFredSel.packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<!-- lightbox prettyPhoto -->
<link rel="stylesheet" href="css/prettyPhoto.css">
<script src="js/jquery.prettyPhoto.js"></script>
<!-- top slider -->
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/search-input.js"></script>

    <script type="text/javascript" charset="utf-8">

    $(window).load(function() {
      $('.tf-header-slider').flexslider({
        animation: "fade",
        maxItems: 11,
        controlNav: true
      });
    });

    $(window).load(function() {
      $('.tf-work-carousel').flexslider({
        animation: "slade",
        animationLoop: false,
        itemWidth: 280,
        itemMargin: 30,
        move: 1,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });

    $(window).load(function() {
      $('.tf-footer-carousel').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 140,
        itemMargin: 15,
        minItems: 1,
        maxItems: 6,
        move:1
      });
    });

    jQuery(document).ready(function($) {
        $('#work-carousel').carouFredSel({
          next : "#work-carousel-next",
          prev : "#work-carousel-prev",
          auto: false,
          circular: false,
          infinite: true,
          width: '100%',
          scroll: {
            items : 1
          }
        });
      });
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64610279-1', 'auto');
  ga('send', 'pageview');

</script>
  <script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>
<body>
    <div class="body-wrapper">
        <div class="white-background">
            <div class="container">
                <div class="header">
                    <div class="header-nav box_white">
                    <!--logo-->
                       <div class="logo"><a href="index.php"><img src="images/logo.png" alt="T2Isoft" margin-top: 2cm;  /></a></div>
                    <!--/logo-->
                    <!--Top Menu-->
                       <div id="topmenu">
                        <ul class="dropdown">
                            <li class="menu-level-0"><a href="team.php">Agence <span>Qui sommes-nous ?</span></a></li>
                            <li class="menu-level-0"><a href="services.php">Services <span>Nos services</span></a></li>
                            <li class="menu-level-0"><a href="realisation.php">Réalisations <span>Nos réalisations</span></a></li>
                            <li class="menu-level-0"><a href="devis.php">Tarifs <span>Nos Tarifs</span></a></li>
                            <!--<li class="menu-level-0"><a href="expertise.php">Solutions <span>Notre expertise</span></a>   </li>-->

                        </ul>
                    </div>
                       <!--/top menu-->
                    </div>

                    <!--Let's Do It-->
                    <a href="contacts.php"><div class="header-box box_orange"><h2 class=" text-white text-extrabold"> CONTACTEZ  NOUS...</h2></div></a>
                    <!--/let's do it-->
                    <div class="clear"></div>


                </div>
