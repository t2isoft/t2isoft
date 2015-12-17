<?php include("header.php"); ?>

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
                            <h4 class="text-white">Site web</h4>
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
                                    <input type="text" name="phone" id="phone" value="Téléphone" class="inputtext input_middle required" onblur="if (this.value == '') {this.value = 'Phone number';}" onfocus="if (this.value == 'Numéro de téléphone') {this.value = '';}" >
                                </div>
                                </div>
                                </div>

                                <div class="col col_1_2">
                                <div class="inner">
                                <div class="row field_textarea infieldlabel">
                                    <textarea  cols="30" rows="10" id="message" value="Votre message" name="message" class="textarea textarea_middle required" onblur="if (this.value == '') {this.value = 'Votre message';}" onfocus="if (this.value == 'Votre message') {this.value = '';}">Votre message</textarea>
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
                        <div class="address"><em>Adresse :</em>
                            <p>T2ISOFT Agence web<br /> 8 rue gaston appert <br />Villeneuve la garenne, 92390</p>
                        </div>
                        <div class="phone"><em>Phone:</em> <span>06 59 98 44 86</4span></div>
                        <div class="mail"><em>Email:</em> <a href="mailto:t2isoft.dev@gmail.com">t2isoft.dev@gmail.com</a></div>
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
<?php include("footer.php"); ?>
