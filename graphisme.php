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
<title>T2ISOFT Agence-web</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
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
  <script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>
<body>
    <div class="body-wrapper">
        <div class="white-background">
            <div class="container">
                <div class="header">
                    <div class="header-nav box_white">
                    <!--logo-->
                       <div class="logo"><a href="index.php"><img src="images/logo1.png" alt="T2Isoft" Width="150%" /></a></div>
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
                    </div>
                    
                    <!--Let's Do It-->
                    <a href="contacts.php"><div class="header-box box_orange"><h2 class=" text-white text-extrabold"> CONTACTEZ  NOUS...</h2></div></a>
                    <!--/let's do it-->
                    <div class="clear"></div>
                    
                   
                </div>
                 
                 <!--header title-->
                    <div class="header-title box_white">
                        <div class="header-title-content text-left">
                            <h1>Graphisme & Design </h1>
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
                        <img src="images/img/slide_img_4.jpg">
                    </div>
                    <!--/header slider-->
            </div>
        </div>
        <div class="white-background">
			
                <ul class="middle-menu">
                
                    <li>
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
                            <h4 class="text-white">Site web</h4>
                            <div class="tf-bottom-menu"></div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="application.php">
                            <div class="tf-top-menu"></div>
                            <img src="images/ico_menu/menu3.png" alt="" />
                            <h4 class="text-white">Applications</h4>
                            <div class="tf-bottom-menu"></div>
                        </a>
                    </li>
                    
                    <li class="active-menu">
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
                            <h4 class="text-white">Référencement</h4>
                            <div class="tf-bottom-menu"></div>
                        </a>
                    </li>
                    
                    <li>
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
        <div id="middle" class="full_width box_white">
            <!-- content -->
            <div class="content" role="main">
            
                <article class="post-detail">            
                    <div class="entry">
                        <div class="row">
                            <div class="col col_2_3">
                                <div class="inner">
                                    <div class="title">
                                        <h1>Graphisme & Design</h1>
                                    </div>
                                    <p>Notre équipe compte deux graphistes et infographes expérimentés comptant plus de 3 années d’expériences en infographie de tous genres.</p>

<p>Nous pourrons donc cerner vos besoins afin de donner à votre entreprise une image professionnelle qui vous aidera à vous démarquer!</p>

<p>Nos délais sont très rapides : nous pouvons habituellement faire une première maquette en 48 heures. Par la suite, nous modifierons le design jusqu’à ce que vous soyez 100% satisfaits!</p>

<p>N’hésitez pas à nous contacter pour nous faire part de vos besoins.</p>

<p>Vous n’avez donc rien à perdre! Appelez-nous ou envoyez-nous un courriel pour profiter de cette offre avantageuse dès maintenant… </p>
                                </div>
                            </div>
                            <div class="col col_1_3">
                                <div class="inner">
                                    <img src="images/tuts/graphisme.png" class="graphisme"  /><br>
                                </div>
                            </div>
                        </div>
						
                        <div class="divider"></div>
                        <div class="toggles">
                        <div class="widget-content widget-toggle">
									<div class="showed">
										<h2 class="text-bold">Création de Logos Professionnels </h2>
                                        <a href="#" class="btn btn_gray button_link_small toggle-close alignright margin-right-15">Close</a>
										<a href="#" class="btn btn_gray button_link_small  toggle-details alignright margin-right-15">Details</a>
									</div>
										<div class="clear"></div>
                                        
									<div class="hidde">
                                    <div class="clear"></div>
                                    <div class="row">
                                        <div class="col col_1_3">
                                            <div class="inner">
                                                <h2 class="text-bold">Un Logo efficace</h2>
                                                <p>D’abord, qu’est-ce qu’un LOGO EFFICACE? Un logo efficace rend une compagnie MÉMORABLE. Il transmet convenablement l’identité d’une compagnie. Il est à la fois attrayant et utile. Il doit suffisamment marquer les gens avec qui votre entreprise est en contact pour qu’ils ne l’oublient pas.</p>
                                            </div>
                                        </div>
                                    
                                        <div class="col col_1_3">
                                            <div class="inner">
                                                <h2 class="text-bold">L'Importance d'un logo</h2>
                                                <p>UN LOGO, C’EST L’IDENTITÉ D’UNE COMPAGNIE Les logos sont un aspect critique de la mise en marché. En tant que représentation graphique principale d’une compagnie, un logo est la clé de voûte d’une marque et demeure son aspect le plus visible dans le marché ciblé….</p>
                                            </div>
                                        </div>
                                    
                                        <div class="col col_1_3">
                                            <div class="inner">
                                                <h2 class="text-bold">Satisfaction garantie  </h2>
                                                <p>Si vous n’êtes pas totalement en amour avec votre nouveau logo, nous en redessinerons un nouveau pour vous sans frais supplémentaire. Votre satisfaction est garantie, vous n’avez donc rien à perdre. Essayez notre service de création de logo et vous verrez pourquoi <span id="char">T2ISOFT</span> est la solution par excellence pour le logo </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                        
                                    <div class="clear"></div>
									</div>
						</div>
								   
  <!----2eme partie----->    <!--     <div class="widget-content widget-toggle">
									<div class="showed">
										<h2 class="text-bold">Conception, design et impression de cartes d’affaire</h2>
                                        <a href="#" class="btn btn_gray button_link_small toggle-close alignright margin-right-15">Close</a>
										<a href="#" class="btn btn_gray button_link_small  toggle-details alignright margin-right-15">Details</a>
									</div>
										<div class="clear"></div>
                                        
									<div class="hidde">
                                    <div class="clear"></div>
                                    <div class="row">
                                        <div class="col col_1_3">
                                            <div class="inner">
                                                <h2 class="text-bold">design de cartes d’affaire</h2>
                                                <p>Notre service de conception et design de carte d’affaire professionnelle est personnalisé. Chaque carte est créée sur mesure pour vous, et chacun de nos designs est unique. Nous ne manquons pas de créativité pour dessiner une carte à votre image!

Un expert en design vous fournit 2 maquettes de carte selon vos recommandations, idées, concepts et images. Nous pouvons ensuite faire des modifications pour nous assurer que votre carte soit telle que vous l’aviez imaginée.</p>
                                            </div>
                                        </div>
                                    
                                        <div class="col col_1_3">
                                            <div class="inner">
                                                <h2 class="text-bold">Qu’est-ce qui est inclus ?</h2>
                                                <p></p>
                                            </div>
                                        </div>
                                    
                                        <div class="col col_1_3">
                                            <div class="inner">
                                                <h2 class="text-bold">Satisfaction garantie  </h2>
                                                <p>Si vous n’êtes pas totalement en amour avec votre nouveau logo, nous en redessinerons un nouveau pour vous sans frais supplémentaire. Votre satisfaction est garantie, vous n’avez donc rien à perdre. Essayez notre service de création de logo et vous verrez pourquoi <span id="char">T2ISOFT</span> est la solution par excellence pour le logo </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                        
                                    <div class="clear"></div>
									</div>
						</div>--->
								   
  <!----3eme partie----->         <div class="widget-content widget-toggle">
									<div class="showed">
										<h2 class="text-bold">Conception, design et impression de cartes d’affaire </h2>
                                        <a href="#" class="btn btn_gray button_link_small toggle-close alignright margin-right-15">Close</a>
										<a href="#" class="btn btn_gray button_link_small  toggle-details alignright margin-right-15">Details</a>
									</div>
										<div class="clear"></div>
                                        
									<div class="hidde">
                                    <div class="clear"></div>
                                     <div class="row">
                            <div class="col col_2_3">
                                <div class="inner">
                                  <!--  <div class="title">
                                        <h1>Graphisme & Design</h1>
                                    </div>-->
                                    <p>Notre service de conception et design de carte d’affaire professionnelle est personnalisé. Chaque carte est créée sur mesure pour vous, et chacun de nos designs est unique.
									Nous ne manquons pas de créativité pour dessiner une carte à votre image!
									Un expert en design vous fournit 2 maquettes de carte selon vos recommandations, 
									idées, concepts et images. Nous pouvons ensuite faire des modifications pour nous assurer
									que votre carte soit telle que vous l’aviez imaginée.
									<h4>Qu’est-ce qui est inclus dans notre design de carte d’affaire?</h4>
<ul><li><span id="char"> 1 </span> Création et design d’une carte professionnelle recto-verso</li>
<li><span id="char"> 2 </span> Maquette de carte incluant vos photos, logo, idées, recommandations et concepts</li>
<li><span id="char"> 3 </span> Modifications suite au choix de la maquette finale</li><ul>
									</p>
                                </div>
                            </div>
                            <div class="col col_1_3">
                                <div class="inner">
                                    <img src="images/tuts/carte.png" class="graphisme"  /><br>
                                </div>
                            </div>
                        </div>
                                    <div class="clear"></div>
                                        
                                    <div class="clear"></div>
									</div>
						</div>
                        </div>
									
                        <div class="clear"></div>
                    </div>
                </article>
                
            </div>
            <!--/content-->
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
<div class="clear">            </div>

<!--/middle-->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-content">
                <div class="f_col f_col_1">

                    <div class="widget-container footer_social">
                        <h3 class="widget-title">Suivez-nous</h3>
                        <ul>
                            <li><a href="#" class="fb"></a></li>
                            <li><a href="#" class="tw"></a></li>
                            <li><a href="#" class="in"></a></li>
                            <li><a href="#" class="ball"></a></li>
                            <li><a href="#" class="c"></a></li>
                            <li><a href="#" class="v"></a></li>
                            <li><a href="#" class="a"></a></li>
                        </ul>
                    </div>
      
                </div>

                <div class="f_col f_col_2">
                    <div class="widget-container widget_categories">
                        <h3 class="widget-title">Plan de site</h3>
                        <ul>
                            <li><a href="team.php"> Agence</a></li>
                            <li><a href="services.php"> Services</a></li>
                            <li><a href="realisation.php"> Réalisations</a></li>
                            <li><a href="expertise.php"> Solutions</a></li>
                            <li><a href="contacts.php"> Contactez-nous</a></li>
                            
                        </ul>
                    </div>
                </div>

                <div class="f_col f_col_3">
                    <div class="widget-container widget-testimonials">
                        <h3 class="widget-title">Informations</h3>
                        <p><a href="team.php">Qui sommes-nous ?</a></p>
                        <p><a href="montion.php">Montion légale</a></p>
                        <p><a href="services.php">Nos services</a></p>
                        <p><a href="contacts.php">Contactez-nous</p>
                    </div>
                </div>
                

                
                <div class="f_col f_col_5">
                    <div class="widget-container widget-send-feedback">
                        <h3 class="widget-title">Contactez-nous</h3>
                        <img src="images/tuts/fb.png" alt="facebook" width ="140" height="60px"/>
                        <table border="0" width ="">
                            <tr><td>Adresse:</td>  <td> &nbsp; &nbsp; 8 Rue Gaston Appert 92390 VILLENEUVE LA GARENNE</td></tr>
                            <tr><td>Tél :</td>   <td> (+)33659984489</td></tr>
                            <tr><td>E-mail : </td>  <td> t2isoft.dev@gmail.com</td></tr>
                        </table>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        
        
        <div class="clear"></div>
    </div>
   <div class="footer-bottom">
        <div class="container">
            <div class="copyright"><center>Copyright © 2015 tous Droits Réservés<br>Réalisé par : <span class="text-orange">T2Isoft</span></center>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</footer>
</div>
   
       
  <script type="text/javascript">
   
   
                                jQuery(document).on('click','.toggle-details',function(){
                               
                               
                                jQuery(this).hide();
                                jQuery(this).siblings('.toggle-close').show();
                                jQuery(this).closest('.widget-toggle').find('.hidde').stop(true,true).slideDown(1000);
                                
                                return false;
                                });
                                
                                jQuery(document).on('click','.toggle-close',function(){
                                jQuery(this).hide();
                                jQuery(this).siblings('.toggle-details').show();                               
                                jQuery(this).closest('.widget-toggle').find('.hidde').stop(true,true).slideUp(1000);
                                return false;
                                });
                                
  </script>
         </div>                 
</body>
</html>