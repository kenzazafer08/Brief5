<?php require APPROOT . "/views/inc/header.php"; ?>
<body>
<?php require APPROOT . "/views/inc/navbar.php"; ?>
    <div style="height: 15vh;width : 100%; justify-content:center; background-color: #F8F9FD; "></div>
    <div class="acceuil">
        <div class="child">
            <h1>new-arrivals</h1>
            <br/>
            <p style="color: #787674;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </p>
            <a href="#new-arrivals" class="discover" >Discover
            </a>
         </div>
    </div>
    <section id="new-arrivals" class="new-arrivals">
        <div class="container">
            <div class="section-header">
            </div><!--/.section-header-->
            <div class="new-arrivals-content">
                <div class="row">
                <?php foreach ($data['products'] as $product) : ?>
                    <?php if (strtolower($product->name_cat) == 'new arrivals') : ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="<?= $product->image ?>" alt="wooden chair " style="width: 300px;height:300px">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="sale bg-1">
                                    <p>sale</p>
                                </div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">add <span>to </span> cart</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                            <h4><a href="#"><?= $product->name ?></a></h4>
                            <p class="arrival-product-price">$<?=number_format($product->price , 2)?></p>
                        </div>
                    </div>
                    <?php endif; ?>
            <?php endforeach; ?>
                </div>
            </div>
        </div><!--/.container-->
    
    </section><!--/.new-arrivals-->
    <!--new-arrivals end -->

    <!--sofa-collection start -->
    <section id="sofa-collection">
        <div class="owl-carousel owl-theme" id="collection-carousel">
            <div class="sofa-collection collectionbg1">
                <div class="container">
                    <div class="sofa-collection-txt">
                        <h2>unlimited sofa collection</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        </p>
                        <div class="sofa-collection-price">
                            <h4>strting from <span>$ 199</span></h4>
                        </div>
                        <button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
                            view more
                        </button>
                    </div>
                </div>	
            </div><!--/.sofa-collection-->
            <div class="sofa-collection collectionbg2">
                <div class="container">
                    <div class="sofa-collection-txt">
                        <h2>unlimited dainning table collection</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        </p>
                        <div class="sofa-collection-price">
                            <h4>strting from <span>$ 299</span></h4>
                        </div>
                        <button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
                            view more
                        </button>
                    </div>
                </div>
            </div><!--/.sofa-collection-->
        </div><!--/.collection-carousel-->

    </section><!--/.sofa-collection-->
    <!--sofa-collection end -->
    <?php require APPROOT . "/views/inc/footer.php"; ?>
