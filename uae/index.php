<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Home - Magrol Global UAE';
    $navClass = '<header class="header-transparent"><nav class="navbar navbar-dark navbar-expand-xl">';
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<!-- =======================
Main banner START -->
<section class="position-relative py-8 py-sm-9" style="background-image:url(assets/media/bg-1.jpg); background-position: center left; background-size: cover;">
    <div class="container z-index-9 position-relative">
        <div class="row">
            <div class="col-xl-8 m-auto text-center py-xl-8">
                <h1 class="display-4 text-white mb-3">UAE <br>Magrol Global</h1>
                <h5 class="text-white mb-3">Your Premier Partner in Dubai for Cars, Real Estate, and Building Materials.</h5>
                <a href="#services" class="btn btn-lg btn-warning mb-0">Our Services</a>
            </div>
        </div> 
    </div>
</section>
<!-- =======================
Main banner END -->

<!-- =======================
Services START -->
<section id="services" class="pt-5 pt-md-8 pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2>Our Services</h2>
                <p class="lead">We provide top-tier services directly from our headquarters in Dubai.</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Service 1: Cars -->
            <div class="col-md-4">
                <div class="card card-body shadow p-5 align-items-center text-center h-100">
                    <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4"><i class="fa-solid fa-car"></i></div>
                    <h5>Car Dealership</h5>
                    <p>We import and sell premium cars. Explore our wide range of luxury and utility vehicles available in Dubai.</p>
                </div>
            </div>
            <!-- Service 2: Real Estate -->
            <div class="col-md-4">
                <div class="card card-body shadow p-5 align-items-center text-center h-100">
                    <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-4"><i class="fa-solid fa-building"></i></div>
                    <h5>Real Estate Business</h5>
                    <p>Find your dream property or investment opportunity in the heart of Dubai's thriving real estate market.</p>
                </div>
            </div>
            <!-- Service 3: Building Material -->
            <div class="col-md-4">
                <div class="card card-body shadow p-5 align-items-center text-center h-100">
                    <div class="icon-lg bg-warning bg-opacity-10 text-warning rounded-circle mb-4"><i class="fa-solid fa-trowel-bricks"></i></div>
                    <h5>Building Materials</h5>
                    <p>High-quality building materials for all your construction needs, sourced and sold directly.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Services END -->

<!-- =======================
About START -->
<section class="pb-0 pb-xl-5">
	<div class="container">
		<div class="row g-4 justify-content-between align-items-center">
			<!-- Left side START -->
			<div class="col-lg-5 position-relative">
				<!-- Image -->
				<img src="<?= PROOT; ?>assets/media/bg-2.jpg" class="rounded-3 position-relative" alt="">
			</div>
			<!-- Left side END -->

			<!-- Right side START -->
			<div class="col-lg-6">
				<h2 class="mb-3 mb-lg-5">About Magrol Global</h2>
				<p class="mb-3 mb-lg-5">
					Magrol Global is headquartered in Dubai, the hub of innovation and trade. All our goods (Cars, Building Materials) are stocked here, ensuring quality and readiness for our customers.
					<br>
					<br>
					We also facilitate imports to our branch in Ghana upon request, bridging the gap between quality global goods and local needs.
				</p>
			</div>
			<!-- Right side END -->
		</div>
	</div>
</section>
<!-- =======================
About END -->


<?php include  __DIR__ . '/system/inc/footer.php'; ?>