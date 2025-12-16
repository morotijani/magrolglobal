<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Real Estate - Magrol Global Ghana';
    $navClass = '<header class="navbar-light header-sticky"><nav class="navbar navbar-expand-xl">';
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';

?>

    <!-- =======================
Main banner START -->
<section class="py-0">
	<div class="container-fluid px-0">
		<!-- Slider START -->
		<div class="tiny-slider arrow-round arrow-blur">
			<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-gutter="0" data-edge="0" data-dots="false" data-items="3" data-items-md="2" data-items-xs="1">
				<!-- Slider item -->
				<div>
					<a class="w-100 h-100" data-glightbox data-gallery="gallery" href="<?= PROOT; ?>assets/media/real-estate/re-1.jpg">
						<div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
							<!-- Image -->
							<img src="<?= PROOT; ?>assets/media/real-estate/re-1.jpg" class=""  style="height: 400px; object-fit: cover;" alt="">
							<!-- Full screen button -->
							<div class="hover-element w-100 h-100">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
							</div>
						</div>
					</a>
				</div>

				<!-- Slider item -->
				<div>
					<a class="w-100 h-100" data-glightbox data-gallery="gallery" href="<?= PROOT; ?>assets/media/real-estate/re-2.jpg">
						<div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
							<!-- Image -->
							<img src="<?= PROOT; ?>assets/media/real-estate/re-2.jpg" class="" style="height: 400px; object-fit: cover;" alt="">
							<!-- Full screen button -->
							<div class="hover-element w-100 h-100">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
							</div>
						</div>
					</a>
				</div>

				<!-- Slider item -->
				<div>
					<a class="w-100 h-100" data-glightbox data-gallery="gallery" href="<?= PROOT; ?>assets/media/real-estate/re-3.jpg">
						<div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
							<!-- Image -->
							<img src="<?= PROOT; ?>assets/media/real-estate/re-3.jpg" class="" style="height: 400px; object-fit: cover;" alt="">
							<!-- Full screen button -->
							<div class="hover-element w-100 h-100">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
							</div>
						</div>
					</a>
				</div>

				<!-- Slider item -->
				<div>
					<a class="w-100 h-100" data-glightbox data-gallery="gallery" href="<?= PROOT; ?>assets/media/real-estate/re-4.jpg">
						<div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
							<!-- Image -->
							<img src="<?= PROOT; ?>assets/media/real-estate/re-4.jpg" class="" style="height: 400px; object-fit: cover;" alt="">
							<!-- Full screen button -->
							<div class="hover-element w-100 h-100">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- Slider START -->
	</div>
</section>
<!-- =======================
Main banner END -->

<!-- =======================
About START -->
<section class="py-0 py-lg-7">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12">
				<h2>Real Estate Business</h2>
				<p class="mb-0">We provide a wide range of real estate services to our clients, including property management, investment opportunities, and property development. Our team of experienced professionals is dedicated to helping you achieve your real estate goals.</p>
			</div>
		</div>

		<!-- Counters and features START -->
		<div class="row g-4">
			<!-- Counter -->
			<div class="col-xl-4">
				<div class="card card-body bg-primary bg-opacity-10 vstack gap-4 justify-content-center h-100 p-4">
					<!-- Counter item -->
					<div class="d-flex justify-content-between align-items-center">
						<h3 class="purecounter text-primary mb-0" data-purecounter-start="0" data-purecounter-end="10"	data-purecounter-delay="200">0</h3>
						<h6 class="fw-normal mb-0">Total Projects</h6>
					</div>

					<!-- Counter item -->
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-center me-3">
							<h3 class="purecounter text-primary mb-0" data-purecounter-start="0" data-purecounter-end="200"	data-purecounter-delay="300">0</h3>
							<span class="h3 text-primary mb-0">+</span>
						</div>
						<h6 class="fw-normal mb-0">Total Staff</h6>
					</div>

					<!-- Counter item -->
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-center me-3">
							<h3 class="purecounter text-primary mb-0" data-purecounter-start="0" data-purecounter-end="50"	data-purecounter-delay="300">0</h3>
							<span class="h3 text-primary mb-0">+</span>
						</div>
						<h6 class="fw-normal mb-0">Amazing Services</h6>
					</div>

				</div>
			</div>

			<!-- Location -->
			<div class="col-md-6 col-xl-4">
				<div class="card  overflow-hidden">
					<!-- Image -->
					<img src="<?= PROOT; ?>assets/media/real-estate/re-2.jpg" class="rounded-3" alt="">
					<!-- Full screen button -->
					<div class="w-100 h-100">
						<button class="btn btn-dark position-absolute top-50 start-50 translate-middle mb-0" data-bs-toggle="modal" data-bs-target="#map360">
							<i class="bi bi-eye me-2"></i>View 360
						</button>
					</div>
				</div>
			</div>

			<!-- Features -->
			<div class="col-md-6 col-xl-4">
				<ul class="list-group list-group-borderless">
					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-cash-coin fa-fw text-info me-2"></i>Best Value for Money
						</h6>
					</li>

					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-credit-card-2-back fa-fw text-warning me-2"></i>Payment Terms
						</h6>
					</li>

					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-wallet fa-fw text-success me-2"></i>Exclusive Services
						</h6>
					</li>

					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-wifi fa-fw text-danger me-2"></i>24/7 Support
						</h6>
					</li>

					<li class="list-group-item pt-3 pb-0">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-tags fa-fw text-orange me-2"></i>No Hidden Changes
						</h6>
					</li>
				</ul>

			</div>
		</div>
		<!-- Counters and features END -->
	</div>
</section>
<!-- =======================
About END -->

<!-- =======================
Action box START -->
<section class="py-0 py-md-5">
	<div class="container">
		<div class="bg-parallax position-relative rounded-3 overflow-hidden p-3 p-sm-5" style="background-image:url(<?= PROOT; ?>assets/media/real-estate/re-6.jpg); background-position: center left; background-size: cover;">
			<div class="row position-relative z-index-9">
				<div class="col-md-7 col-xl-5 ms-auto">
					<div class="card card-body p-sm-5">
						<div class="d-sm-flex justify-content-between align-items-center mb-2">
							<h6 class="text-primary mb-0">Exclusive Offer</h6>
							<!-- Rating -->
							<ul class="list-inline small mb-0">
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item"><i class="fa-solid fa-star text-warning"></i></li>
							</ul>
						</div>
						<!-- Title -->
						<h5>Invest in Dubai Real Estate</h5>
						<p class="mb-3">Invest in Dubai real estate from Ghana. We guide you through the process and manage your international assets.</p>

						<!-- Price -->
						<h6 class="fw-normal mb-1">Investment Opportunity</h6>
						<div class="d-flex align-items-center">
							<h5 class="text-success mb-0 me-1">$0</h5>
						</div>
							<!-- Button -->
							<a href="#" class="btn btn-primary-soft mb-0 mt-3">Request</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

<?php include  __DIR__ . '/system/inc/footer.php'; ?>