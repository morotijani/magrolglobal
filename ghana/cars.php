<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Cars - Magrol Global Ghana';
    $navClass = '<header class="navbar-light header-sticky"><nav class="navbar navbar-expand-xl">';
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';

?>
<!-- =======================
Main Banner START -->
<section class="py-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-11 mx-auto">
				<!-- Slider START -->
				<div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
					<div class="tiny-slider-inner" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
						<!-- Card item START -->
						<div class="card overflow-hidden h-400px h-sm-600px rounded-0" style="background-image:url(<?= PROOT ?>assets/media/cars/05.jpg); background-position: center left; background-size: cover;">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-3"></div>
							<!-- Card image overlay -->
							<div class="card-img-overlay d-flex align-items-center"> 
								<div class="container">
									<div class="row">
										<div class="col-11 col-lg-7">
											<h6 class="text-white fw-normal mb-0">Luxury Cars</h6>
											<!-- Title -->
											<h1 class="text-white display-6">Luxury Cars</h1>
											<a href="#" class="btn btn-primary mb-0">Reserve Today</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->

						<!-- Card item START -->
						<div class="card overflow-hidden h-400px h-sm-600px bg-parallax text-center rounded-0" style="background-image:url(<?= PROOT ?>assets/media/cars/04.jpg); background-position: center left; background-size: cover;">
							<!-- Background dark overlay -->
							<div class="bg-overlay bg-dark opacity-3"></div>
							<!-- Card image overlay -->
							<div class="card-img-overlay d-flex align-items-center"> 
								<div class="container w-100 my-auto">
									<div class="row justify-content-center">
										<div class="col-11 col-lg-8">	
											<!-- Title -->
											<h1 class="text-white">Luxury Cars</h1>
											<a href="#" class="btn btn-dark mb-0">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Card item END -->
					</div>
				</div>
				<!-- Slider END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Fleet START -->
<section class="pt-0 pt-md-5">
	<div class="container">

		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2 class="mb-0">Luxury Cars For Import</h2>
			</div>
		</div>

		<div class="row g-4">
			<!-- Fleet item -->
			<div class="col-sm-4 col-xl-2">
				<div class="card shadow text-center align-items-center h-100 p-4">
					<!-- Image -->
					<div class="icon-xxl bg-light rounded-circle">
						<img src="<?= PROOT; ?>assets/media/cars/seadan.svg" class="w-90px" alt="">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="card-title"><a href="#" class="stretched-link">Sedan</a></h5>
						<span>(6 Cars)</span>
					</div>
				</div>
			</div>

			<!-- Fleet item -->
			<div class="col-sm-4 col-xl-2">
				<div class="card shadow text-center align-items-center h-100 p-4">
					<!-- Image -->
					<div class="icon-xxl bg-light rounded-circle">
						<img src="<?= PROOT; ?>assets/media/cars/micro.svg" class="w-90px" alt="">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="card-title"><a href="#" class="stretched-link">Micro</a></h5>
						<span>(8 Cars)</span>
					</div>
				</div>
			</div>

			<!-- Fleet item -->
			<div class="col-sm-4 col-xl-2">
				<div class="card shadow text-center align-items-center h-100 p-4">
					<!-- Image -->
					<div class="icon-xxl bg-light rounded-circle">
						<img src="<?= PROOT; ?>assets/media/cars/suv-2.svg" class="w-90px" alt="">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="card-title"><a href="#" class="stretched-link">CUV</a></h5>
						<span>(4 Cars)</span>
					</div>
				</div>
			</div>

			<!-- Fleet item -->
			<div class="col-sm-4 col-xl-2">
				<div class="card shadow text-center align-items-center h-100 p-4">
					<!-- Image -->
					<div class="icon-xxl bg-light rounded-circle">
						<img src="<?= PROOT; ?>assets/media/cars/suv.svg" class="w-90px" alt="">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="card-title"><a href="#" class="stretched-link">SUV</a></h5>
						<span>(5 Cars)</span>
					</div>
				</div>
			</div>

			<!-- Fleet item -->
			<div class="col-sm-4 col-xl-2">
				<div class="card shadow text-center align-items-center h-100 p-4">
					<!-- Image -->
					<div class="icon-xxl bg-light rounded-circle">
						<img src="<?= PROOT; ?>assets/media/cars/pickup.svg" class="w-90px" alt="">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="card-title"><a href="#" class="stretched-link">Pick up</a></h5>
						<span>(3 Pickup Truck)</span>
					</div>
				</div>
			</div>

			<!-- Fleet item -->
			<div class="col-sm-4 col-xl-2">
				<div class="card shadow text-center align-items-center h-100 p-4">
					<!-- Image -->
					<div class="icon-xxl bg-light rounded-circle">
						<img src="<?= PROOT; ?>assets/media/cars/coupe.svg" class="w-90px" alt="">
					</div>
					<!-- Card body -->
					<div class="card-body px-0 pb-0">
						<h5 class="card-title"><a href="#" class="stretched-link">Coupe</a></h5>
						<span>(9 Cars)</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- =======================
Fleet END -->

<section class="pt-0 pt-xl-5">
	<div class="container">
		<!-- Cab item START -->
        <div class="card border p-4">
            <!-- Card body START -->
            <div class="card-body p-0">
                <div class="row g-2 g-sm-4 mb-4">
                    <!-- Card image -->
                    <div class="col-md-4 col-xl-3">
                        <div class="bg-light rounded-3 px-4 py-5">
                            <img src="<?= PROOT; ?>assets/media/cars/06.jpg" class="w-100" alt="">
                        </div>
                    </div>

                    <!-- Card title and rating -->
                    <div class="col-sm-6 col-md-4 col-xl-6">
                        <h4 class="card-title mb-2"><a href="#" class="stretched-link">Camry, Audi</a></h4>
                        <!-- Nav divider -->
                        <ul class="nav nav-divider h6 fw-normal mb-2">
                            <li class="nav-item">SEDAN</li>
                            <li class="nav-item">AC</li>
                            <li class="nav-item">4 Seats</li>
                        </ul> 
                        
                        <!-- Rating Star -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item h6 fw-normal me-1 mb-0">4.5</li>
                            <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                            <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                            <li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                        </ul>
                    </div>

                    <!-- Button -->
                    <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                        <!-- Discount -->
                        <p class="text-danger mb-0">4% Off</p>
                        <!-- Price -->
                        <ul class="list-inline mb-1">
                            <li class="list-inline-item text-decoration-line-through me-1">$0</li>
                            <li class="list-inline-item h5 mb-0">$0</li>
                        </ul>
                        <a href="#" class="btn btn-dark mb-0">Request a Quote</a>
                    </div>
                </div> <!-- Row END -->
            </div>
            <!-- Card body END -->
             <!-- Card footer START -->
            <div class="card-footer border-top p-0 pt-3">
                <div class="row">
                    <!-- List -->
                    <div class="col-md-6">
                        <ul class="list-group list-group-borderless mb-0">
                            <li class="list-group-item d-flex pb-0 mb-0">
                                <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>600Kms included. After that $15/Kms</span>
                            </li>
                            <li class="list-group-item d-flex pb-0 mb-0">
                                <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>2 luggage bags </span>
                            </li>
                            <li class="list-group-item d-flex pb-0 mb-0">
                                <span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>Diesel Car</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Info -->
                    <div class="col-md-6">
                        <ul class="list-group list-group-borderless mb-0">
                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                Free Cancellation, till 1 hour of Pick up
                            </li>
                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                Free Waiting up to 45 minutes
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- card footer END -->
        </div>
	</div>
</section>

<!-- =======================
Why Choose Us START -->
<section class="pt-0 pt-xl-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-3 mb-sm-4">
			<div class="col-12 text-center">
				<h2>Why Choose Us</h2>
			</div>
		</div>

		<div class="row g-4">
			<!-- Category item -->
			<div class="col-sm-6 col-lg-4">
				<!-- Card START -->
				<div class="card card-body shadow p-4 h-100">
					<!-- Icon -->
					<div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4"><i class="bi bi-shield-check fs-5"></i></div>
					<h5>Quality Assurance</h5>
					<p class="mb-0">Each car undergoes thorough inspections and quality checks to meet high standards, providing customers with confidence in their purchase.</p>
				</div>
				<!-- Card END -->
			</div>

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4">
				<!-- Card START -->
				<div class="card card-body shadow p-4 h-100">
					<!-- Icon -->
					<div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-4"><i class="fa-solid fa-handshake fs-5"></i></div>
					<h5>Competitive Pricing</h5>
					<p class="mb-0">We understands the importance of offering value for money, making quality vehicles accessible to a wide range of customers.</p>
				</div>
				<!-- Card END -->
			</div>

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4">
				<!-- Card START -->
				<div class="card card-body shadow p-4 h-100">
					<!-- Icon -->
					<div class="icon-lg bg-warning bg-opacity-15 text-warning rounded-circle mb-4"><i class="bi bi-person fs-5"></i></div>
					<h5>Best Customer Service</h5>
					<p class="mb-0">Our dedicated customer service team is ready to assist you with any inquiries, service needs, or concerns promptly and professionally.</p>
				</div>
				<!-- Card END -->
			</div>
            </div>
		</div>
	</div>
</section>
<!-- =======================
Why Choose Us END -->

<?php include  __DIR__ . '/system/inc/footer.php'; ?>