<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'About Us - Magrol Global Ghana';
    $navClass = '<header class="navbar-light header-sticky"><nav class="navbar navbar-expand-xl">';
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<!-- =======================
Main banner START -->
<section>
	<div class="container">
		<div class="row mb-5">
			<div class="col-xl-10 mx-auto text-center">
				<!-- Title -->
				<h1>About Us</h1>
				<p class="lead">Bridging the Gap Between Dubai and Ghana.</p>
                <p class="lead">We handle the logistics, Customs, and delivery of your requests from Dubai to your doorstep in Ghana.</p>
				<!-- Meta -->
				<div class="hstack gap-3 flex-wrap justify-content-center">
					<!-- Item -->
					<h6 class="bg-mode shadow rounded-2 fw-normal d-inline-block py-2 px-4">
						<img src="assets/images/element/06.svg" class="h-20px me-2" alt="">
						14K+ Global Customers
					</h6>

					<!-- Item -->
					<h6 class="bg-mode shadow rounded-2 fw-normal d-inline-block py-2 px-4">
						<img src="assets/images/element/07.svg" class="h-20px me-2" alt="">
						10K+ Happy Customers
					</h6>

					<!-- Item -->
					<h6 class="bg-mode shadow rounded-2 fw-normal d-inline-block py-2 px-4">
						<img src="assets/images/element/08.svg" class="h-20px me-2" alt="">
						1M+ Subscribers
					</h6>
				</div>
			</div>
		</div> <!-- Row END -->

		<!-- Image START -->
		<div class="row g-4 align-items-center">
			<!-- Image -->
			<div class="col-md-6">
				<img src="<?= PROOT; ?>assets/media/img-5.jpg" class="rounded-3" alt="">
			</div>

			<div class="col-md-6">
				<div class="row g-4">
					<!-- Image -->
					<div class="col-md-8">
						<img src="<?= PROOT; ?>assets/media/img-6.jpg" class="rounded-3" alt="">
					</div>

					<!-- Image -->
					<div class="col-12">
						<img src="<?= PROOT; ?>assets/media/img-7.jpg" class="rounded-3" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- Image END -->
	</div>
</section>
<!-- =======================
Main banner START -->

<!-- =======================
About content START -->
<section class="pt-0 pt-lg-5">
	<div class="container">
		<!-- Content START -->
		<div class="row mb-4 mb-md-5">
			<div class="col-md-10 mx-auto">
				<h3 class="mb-4">Our Mission</h3>
				<p class="fw-bold">Magrol Global Ghana operates as the official import arm of our main company in Dubai. We were established to provide a seamless and trustworthy channel for businesses and individuals in Ghana to access high-quality goods directly from the UAE.</p>
				<p class="mb-0">By leveraging our headquarters in Dubai, we eliminate middlemen and ensure that every car, real estate investment, or building material shipment is authentic and valued correctly.</p>
			</div>
		</div>
		<!-- Content END -->
	</div>
</section>
<!-- =======================
About content END -->

<?php include  __DIR__ . '/system/inc/footer.php'; ?>
