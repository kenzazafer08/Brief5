<?php require APPROOT . "/views/inc/header.php"; ?>
<body>
      <!-- top-area Start -->
      <?php require APPROOT . "/views/inc/navbar.php"; ?>
<!--newsletter strat -->
<section id="feature" class="feature">
    <div class="container">
        <div class="section-header">
            <h1 style="color: transparent;">featured products</h1>
        </div><!--/.section-header-->
        <div class="feature-content">
                    <div class="single-feature">
                        <img src="<?php echo URLROOT?>/public/assets/images/features/f1.jpg" alt="designed sofa" style="width: 80%; height: 400px;margin-left: 55px;">
                        <div class="single-feature-txt text-center">
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                <span class="feature-review">(45 review)</span>
                            </p>
                            <h3><a href="#">designed sofa</a></h3>
                            <h5>$160.00</h5>
                        </div>
                    </div>
                    <div class="single-feature">
                        <img src="<?php echo URLROOT?>/public/assets/images/features/f2.jpg" alt="dinning table" style="width: 80%; height: 400px;margin-left: 55px;">
                        <div class="single-feature-txt text-center">
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                <span class="feature-review">(45 review)</span>
                            </p>
                            <h3><a href="#">dinning table </a></h3>
                            <h5>$200.00</h5>
                        </div>
                    </div>
                    <div class="single-feature">
                        <img src="<?php echo URLROOT?>/public/assets/images/features/f3.jpg" alt="chair and table" style="width: 80%; height: 400px;margin-left: 55px;">
                        <div class="single-feature-txt text-center">
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                <span class="feature-review">(45 review)</span>
                            </p>
                            <h3><a href="#">chair and table</a></h3>
                            <h5>$100.00</h5>
                        </div>
                    </div>
                    <div class="single-feature">
                        <img src="<?php echo URLROOT?>/public/assets/images/features/f4.jpg" alt="modern arm chair" style="width: 80%; height: 400px;margin-left: 55px;">
                        <div class="single-feature-txt text-center">
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                <span class="feature-review">(45 review)</span>
                            </p>
                            <h3><a href="#">modern arm chair</a></h3>
                            <h5>$299.00</h5>
                        </div>
                    </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.feature-->
<!--feature end -->
		<!-- clients strat -->
		<section id="clients"  class="clients" style="background-color: white;">
			<div class="container">
				<div class="owl-carousel owl-theme" id="client">
						<div class="item">
							<a href="#">
								<img src="<?php echo URLROOT?>/public/assets/images/clients/c1.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="<?php echo URLROOT?>/public/assets/images/clients/c2.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="<?php echo URLROOT?>/public/assets/images/clients/c3.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="<?php echo URLROOT?>/public/assets/images/clients/c4.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="<?php echo URLROOT?>/public/assets/images/clients/c5.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
					</div><!--/.owl-carousel-->

			</div><!--/.container-->

		</section><!--/.clients-->	
<!--newsletter end -->
<!--contactus-->
<?php require APPROOT . "/views/inc/footer.php"; ?>