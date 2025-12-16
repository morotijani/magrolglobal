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
					<a class="w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/category/directory/03.jpg">
						<div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
							<!-- Image -->
							<img src="assets/images/category/directory/03.jpg" class="" alt="">
							<!-- Full screen button -->
							<div class="hover-element w-100 h-100">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
							</div>
						</div>
					</a>
				</div>

				<!-- Slider item -->
				<div>
					<a class="w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/category/directory/06.jpg">
						<div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
							<!-- Image -->
							<img src="assets/images/category/directory/06.jpg" class="" alt="">
							<!-- Full screen button -->
							<div class="hover-element w-100 h-100">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
							</div>
						</div>
					</a>
				</div>

				<!-- Slider item -->
				<div>
					<a class="w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/category/directory/05.jpg">
						<div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
							<!-- Image -->
							<img src="assets/images/category/directory/05.jpg" class="" alt="">
							<!-- Full screen button -->
							<div class="hover-element w-100 h-100">
								<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
							</div>
						</div>
					</a>
				</div>

				<!-- Slider item -->
				<div>
					<a class="w-100 h-100" data-glightbox data-gallery="gallery" href="assets/images/category/directory/04.jpg">
						<div class="card card-element-hover card-overlay-hover rounded-0 overflow-hidden">
							<!-- Image -->
							<img src="assets/images/category/directory/04.jpg" class="" alt="">
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
				<h2>We always provide the best for our hotel visitors. We are happy to help you.</h2>
				<p class="mb-0">We focus a great deal on the understanding of behavioral psychology and influence triggers which are crucial for becoming a well-rounded Digital Marketer. We understand that theory is important to build a solid foundation, we understand that theory alone isn't going to get the job done.</p>
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
						<h6 class="fw-normal mb-0">Total Hotels</h6>
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
					<img src="assets/images/about/07.jpg" class="rounded-3" alt="">
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
							<i class="bi bi-cash-coin fa-fw text-info me-2"></i>Best Rate Guaranteed
						</h6>
					</li>

					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-credit-card-2-back fa-fw text-warning me-2"></i>Payment at Hotel
						</h6>
					</li>

					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-wallet fa-fw text-success me-2"></i>Exclusive Members Rewards
						</h6>
					</li>

					<li class="list-group-item py-3">
						<h6 class="mb-0 fw-normal">
							<i class="bi bi-wifi fa-fw text-danger me-2"></i>WIFI Access
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


<?php include  __DIR__ . '/system/inc/footer.php'; ?>
