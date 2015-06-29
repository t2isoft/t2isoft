<!DOCTYPE html>
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
<title>T2ISOFT Agence-Web</title>


<link href="style.css" media="screen" rel="stylesheet">
<link href="screen.css" media="screen" rel="stylesheet">
<!-- custom CSS -->
<link rel="stylesheet" href="custom.css">
<link href="css/flexslider.css" media="screen" rel="stylesheet" type="text/css">
<!-- favicon.ico and apple-touch-icon.png -->
<link rel="shortcut icon" href="http://www.t2isoft.com/images/logo1.png">
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

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/jquery.gmap.min.js"></script>
<script type="text/javascript">
    $(window).load(function(){
                            $("#map1").gMap({ 
                                markers: [{ 
                                    latitude: 48.9374899, 
                                    longitude: 2.3334794}],
                                    zoom: 17
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
                       <div class="logo"><a href="index.php"><img src="images/logo1.png" alt="" /></a></div>
                    <!--/logo-->
                    <!--Top Menu-->
                       <div id="topmenu">
                        <ul class="dropdown">
                            <li class="menu-level-0"><a href="team.php">Agence <span>Qui sommes-nous ?</span></a></li>            
                            <li class="menu-level-0"><a href="services.php">Services <span>Nos services</span></a></li>
                            <li class="menu-level-0"><a href="realisation.php">Réalisations <span>Nos réalisations</span></a></li>
                            <li class="menu-level-0"><a href="expertise.php">Solutions <span>Notre expertise</span></a>   </li>                        
                          
                        </ul>
                    </div>
                       <!--/top menu-->
                       <!--/top menu-->
                    </div>
                    
                    <!--Let's Do It-->
                   <a href="contacts.php"><div class="header-box box_orange"><h2 class=" text-white text-extrabold"> CONTACTEZ  NOUS...</h2></div></a>
                    <!--/let's do it-->
                    <div class="clear"></div>
                    
                   
                </div>
                 <!--header title-->
                    <div class="header-title box_white">
                        <div class="header-title-content text-left">
                            <h1>Contactez nous</h1>
                        </div>
                        
                        
                    </div>
                    <!--/header title-->
            </div>
                <div class="clear"></div>
        </div>
        <!--/header-->
        
        
        <div class="black-background">
            <div class="container">
                 <!--header slider-->
            <div class="header-slider">
                <div id="map1" class="map" style="width: 100%; height: 350px; overflow: hidden;"> </div>
            </div>
                    <!--/header slider-->
            </div>
        </div>
        <div class="white-background">
            <ul class="middle-menu">
                
                    <li >
                        <a href="team.php">
                            <div class="tf-top-menu"></div>
                            <img src="images/ico_menu/menu1.png" alt="" />
                            <h4 class="text-white ">Agence</h4>
                            <div class="tf-bottom-menu"></div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="site-web.php" >
                            <div class="tf-top-menu"></div>
                            <img src="images/ico_menu/menu2.png" alt="" />
                            <h4 class="text-white">site web</h4>
                            <div class="tf-bottom-menu"></div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="application.php">
                            <div class="tf-top-menu"></div>
                            <img src="images/ico_menu/menu3.png" alt="" />
                            <h4 class="text-white">Application</h4>
                            <div class="tf-bottom-menu"></div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="graphisme.php">
                            <div class="tf-top-menu"></div>
                            <img src="images/ico_menu/menu5.png" alt="" />
                            <h4 class="text-white">Graphisme</h4>
                            <div class="tf-bottom-menu"></div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="referencement.php">
                            <div class="tf-top-menu"></div>
                            <img src="images/ico_menu/menu4.png" alt="" />
                            <h4 class="text-white">Réferencement</h4>
                            <div class="tf-bottom-menu"></div>
                        </a>
                    </li>
                    
                    <li class="active-menu">
                        <a href="maintenance.php">
                            <div class="tf-top-menu"></div>
                            <img src="images/ico_menu/menu6.png" alt="" />
                            <h4 class="text-white">Maintenance</h4>
                            <div class="tf-bottom-menu"></div>
                        </a>
                    </li>
                    
                </ul>
            </div>
<!-- middle -->
<div class="white-background">
    <div class="container ">
        <div id="middle" class="cols2 sidebar_left box_white">
            <!-- content -->
            <div class="content" role="main">
            
                <article class="post-detail">            
                    <div class="entry">
                        <div class="add-comment" id="addcomments">
                            <h3>Contactez nous</h3>
                            
                           
                                <div class="clear"></div>
                                
                            <div class="comment-form">
                            <form action="send_form_email.php" method="post" name="contactform" id="contactForm" class="ajax_form" >
                                <div class="row">
                                <div class="col col_1_2">
                                <div class="inner">
                                <div class="row field_text  infieldlabel">
                                    <input id="nom" name="nom" type="text" value="Nom" class="inputtext input_middle required" onblur="if (this.value == '') {this.value = 'Nom';}" onfocus="if (this.value == 'Nom') {this.value = '';}" />
                                </div>
                                
                                <div class="row field_text omega infieldlabel">
                                    <input id="email" name="email" type="text" value="Email" class="inputtext input_middle required" onblur="if (this.value == '') {this.value = 'Email';}" onfocus="if (this.value == 'Email') {this.value = '';}" >
                                </div>

                                <div class="row field_text  omega infieldlabel">
                                    <input type="text" name="phone" id="phone" value="Phone number" class="inputtext input_middle required" onblur="if (this.value == '') {this.value = 'Phone number';}" onfocus="if (this.value == 'Phone number') {this.value = '';}" >
                                </div>
                                </div>
                                </div>

                                <div class="col col_1_2">
                                <div class="inner">
                                <div class="row field_textarea infieldlabel">
                                    <textarea  cols="30" rows="10" id="message" name="message" class="textarea textarea_middle required"></textarea>
                                </div>

                                <div class="row rowSubmit">
                                <button type="submit" class="btn button_link_medium btn_pink text-semibold alignright">Envoyer</button>

                                </div>
                                </div>
                                </div>

                            </div>
                            </form>
                            </div>
                            
                        </div>
                        <div class="clear"></div>
                    </div>
                </article>
                <script src="js/jqBootstrapValidation.js"></script>
                <script src="js/contact_me.js"></script>
            </div>
            <!--/content-->
            <div class="sidebar">
                <div class=" widget_contact">   
                <h3 class="widget-title">Contact:</h3>
                    <div class="contact-address">
                        <div class="address"><em>Adress :</em>
                            <p>T2ISOFT Agence web<br /> 8 rue gaston appert <br />Villeneuve la garenne, 92390</p>
                        </div>
                        <div class="phone"><em>Phone:</em> <span>06 59 98 44 86 /&nbsp; 07 51 06 22 43</span></div>              
                        <div class="mail"><em>Email:</em> <a href="mailto:t2isoft.dev@gmail.com">T2ISOFT Agence web</a></div>
                    </div>  
            </div>
            </div>
            <div class="clear"></div>
        </div>
         <div class="clear"></div>
    </div>
                <div class="footer-slider">
                <div class="container">
                    <div class="slider-inner">
                        <h2 class="text-bold">Technologies utilisées</h2>
                                    
                            <div class="tf-footer-carousel carousel" >
                              <ul class="slides">
                                <li >
                                        <img src="images/tehnologies/php.png" alt=""  />
                                    </li>
                                    <li >
                                        <img src="images/tehnologies/jquery.png" alt=""  />
                                    </li>
                                    <li>
                                        <img src="images/tehnologies/html5.png" alt=""  />
                                    </li>
                                    <li>
                                        <img src="images/tehnologies/java.png" alt=""  />
                                    </li>
                                    <li>
                                        <img src="images/tehnologies/js.png" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/tehnologies/mysql.png" alt=""  />
                                    </li>
                                    <li >
                                        <img src="images/tehnologies/php.png" alt=""  />
                                    </li>
                                    <li >
                                        <img src="images/tehnologies/jquery.png" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/tehnologies/html5.png" alt=""  />
                                    </li>
                                <!-- items mirrored twice, total of 12 -->
                              </ul>
                            </div>  
                    </div>
                    <div class="clear"></div>
                </div>
                </div>
<div class="clear">            
</div>
<!--/middle-->
<?php include("footer.php"); ?>²

