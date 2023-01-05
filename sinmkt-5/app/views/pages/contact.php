<?php require APPROOT . '/views/inc/header.php'; ?>
<body>
<?php require APPROOT . "/views/inc/navbar.php"; ?>
    <div style="height: 15vh;width : 100%; justify-content:center; background-color: #F8F9FD; "></div>
    <div class="contact">
     <div class="text">
        <div class="child">
        <h1>Contact Us</h1>
        <br/>
        <p>Vous souhaitez nous contacter ? Remplissez le formulaire avec votre demande ou contactez-nous sur nos <a href="#footer" style="color: #e99c2e;">réseaux sociaux.</a> </p>
     </div></div>
     <div class="form"> 
        <form >
            <div class="name">
              <input type="text" placeholder="Nom" /> 
              <input type="text" placeholder="Prenom" /> 
            </div>
            <br>
            <div class="mail">
                <input type="mail" placeholder="Email" style="width: 380px;" /> 
              </div>
              <br>
              <div >
                <textarea rows="5" cols="45" placeholder="Pouvons-nous vous aider ? " ></textarea>
              </div>
              <button class="send" >Send
            </button>
        </form>
     </div>
    </div>
<!--newsletter strat -->
<section id="newsletter"  class="newsletter">
    <div class="container">
        <div class="hm-footer-details">
            <div class="row">
                <div class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="hm-footer-widget">
                        <div class="hm-foot-title">
                            <h4>information</h4>
                        </div><!--/.hm-foot-title-->
                        <div class="hm-foot-menu">
                            <ul>
                                <li><a href="#">about us</a></li><!--/li-->
                                <li><a href="#">contact us</a></li><!--/li-->
                                <li><a href="#">news</a></li><!--/li-->
                                <li><a href="#">store</a></li><!--/li-->
                            </ul><!--/ul-->
                        </div><!--/.hm-foot-menu-->
                    </div><!--/.hm-footer-widget-->
                </div><!--/.col-->
                <div class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="hm-footer-widget">
                        <div class="hm-foot-title">
                            <h4>collections</h4>
                        </div><!--/.hm-foot-title-->
                        <div class="hm-foot-menu">
                            <ul>
                                <li><a href="#">wooden chair</a></li><!--/li-->
                                <li><a href="#">royal cloth sofa</a></li><!--/li-->
                                <li><a href="#">accent chair</a></li><!--/li-->
                                <li><a href="#">bed</a></li><!--/li-->
                                <li><a href="#">hanging lamp</a></li><!--/li-->
                            </ul><!--/ul-->
                        </div><!--/.hm-foot-menu-->
                    </div><!--/.hm-footer-widget-->
                </div><!--/.col-->
                <div class=" col-md-3 col-sm-6 col-xs-12">
                    <div class="hm-footer-widget">
                        <div class="hm-foot-title">
                            <h4>my accounts</h4>
                        </div><!--/.hm-foot-title-->
                        <div class="hm-foot-menu">
                            <ul>
                                <li><a href="#">my account</a></li><!--/li-->
                                <li><a href="#">wishlist</a></li><!--/li-->
                                <li><a href="#">Community</a></li><!--/li-->
                                <li><a href="#">order history</a></li><!--/li-->
                                <li><a href="#">my cart</a></li><!--/li-->
                            </ul><!--/ul-->
                        </div><!--/.hm-foot-menu-->
                    </div><!--/.hm-footer-widget-->
                </div><!--/.col-->
                <div class=" col-md-3 col-sm-6  col-xs-12">
                    <div class="hm-footer-widget">
                        <div class="hm-foot-title">
                            <h4>newsletter</h4>
                        </div><!--/.hm-foot-title-->
                        <div class="hm-foot-para">
                            <p>
                                Subscribe  to get latest news,update and information.
                            </p>
                        </div><!--/.hm-foot-para-->
                        <div class="hm-foot-email">
                            <div class="foot-email-box">
                                <input type="text" class="form-control" placeholder="Enter Email Here....">
                            </div><!--/.foot-email-box-->
                            <div class="foot-email-subscribe">
                                <span><i class="fa fa-location-arrow"></i></span>
                            </div><!--/.foot-email-icon-->
                        </div><!--/.hm-foot-email-->
                    </div><!--/.hm-footer-widget-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.hm-footer-details-->

    </div><!--/.container-->

</section><!--/newsletter-->	
<!--newsletter end -->
<!--contactus-->

<?php require APPROOT . '/views/inc/footer.php'; ?>