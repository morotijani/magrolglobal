<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Contact Us - Magrol Global Ghana';
    $navClass = '<header class="navbar-light header-sticky"><nav class="navbar navbar-expand-xl">';
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';

    if ($_POST) {
        $name = sanitize($_POST['name']);
        $email = sanitize($_POST['email']);
        $title = sanitize($_POST['title']);
        $message = sanitize($_POST['message']);

        // $to = 'info@ghana.magrolglobal.com';
        $subject = 'New Message from ' . $name;
        $body = "Name: " . $name . "\nEmail: " . $email . "\nTitle: " . $title . "\nMessage: " . $message;

        // mail($to, $subject, $body, 'From: ' . $email);
		send_mail_to_server($subject, $body);
		echo '<script>alert("Message sent successfully !")</script>';
    }
?>

<!-- =======================
Main banner START -->
<section class="pt-4 pt-md-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-xl-10">
				<!-- Title -->
				<h1>Contact Us</h1>
				<p class="lead mb-0">Visit our local office to discuss your import needs.</p>
			</div>
		</div>

		<!-- Contact info -->
		<div class="row g-4">

			<!-- Contact item START -->
			<div class="col-md-6 col-xl-4">
				<div class="card card-body shadow text-center align-items-center h-100">
					<!-- Icon -->
					<div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mb-2"><i class="bi bi-headset fs-5"></i></div>
					<!-- Title -->
					<h5>Call us</h5>
					<p>Imprudence attachment him his for sympathize. Large above be to means.</p>
					<!-- Buttons -->
					<div class="d-grid gap-3 d-sm-block">
						<button class="btn btn-sm btn-primary-soft"><i class="bi bi-phone me-2"></i>+971-55-6319772</button>
						<button class="btn btn-sm btn-light"><i class="bi bi-telephone me-2"></i>+233 54 111 3697</button>
					</div>
				</div>
			</div>
			<!-- Contact item END -->

			<!-- Contact item START -->
			<div class="col-md-6 col-xl-4">
				<div class="card card-body shadow text-center align-items-center h-100">
					<!-- Icon -->
					<div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-2"><i class="bi bi-inboxes-fill fs-5"></i></div>
					<!-- Title -->
					<h5>Email us</h5>
					<p>Large above be to means. Him his for sympathize.</p>
					<!-- Buttons -->
					<a href="#" class="btn btn-link text-decoration-underline p-0 mb-0"><i class="bi bi-envelope me-1"></i>info@ghana.magrolglobal.com</a>
				</div>
			</div>
			<!-- Contact item END -->

			<!-- Contact item START -->
			<div class="col-xl-4 position-relative">

				<div class="card card-body shadow text-center align-items-center h-100">
					<!-- Icon -->
					<div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle mb-2"><i class="bi bi-globe2 fs-5"></i></div>
					<h5>Ghana Office</h5>
                    <address>
                        Magrol Global Ghana<br>
                        Konongo, Ashanti<br>
                        West Africa
                    </address>
				</div>
			</div>
			<!-- Contact item END -->
		</div>
	</div>
</section>
<!-- =======================
Main banner START -->

<!-- =======================
Contact form and vector START -->
<section class="pt-0 pt-lg-5">
	<div class="container">
		<div class="row g-4 g-lg-5 align-items-center">
			<!-- Vector image START -->
			<div class="col-lg-6 text-center">
				<img src="<?= PROOT; ?>assets/media/sign-here.svg" alt="">
			</div>
			<!-- Vector image END -->

			<!-- Contact form START -->
			<div class="col-lg-6">
				<div class="card bg-light p-4">
					<!-- Svg decoration -->
					<figure class="position-absolute end-0 bottom-0 mb-n4 me-n2">
						<svg class="fill-orange" width="104.2px" height="95.2px">
							<circle cx="2.6" cy="92.6" r="2.6"/>
							<circle cx="2.6" cy="77.6" r="2.6"/>
							<circle cx="2.6" cy="62.6" r="2.6"/>
							<circle cx="2.6" cy="47.6" r="2.6"/>
							<circle cx="2.6" cy="32.6" r="2.6"/>
							<circle cx="2.6" cy="17.6" r="2.6"/>
							<circle cx="2.6" cy="2.6" r="2.6"/>
							<circle cx="22.4" cy="92.6" r="2.6"/>
							<circle cx="22.4" cy="77.6" r="2.6"/>
							<circle cx="22.4" cy="62.6" r="2.6"/>
							<circle cx="22.4" cy="47.6" r="2.6"/>
							<circle cx="22.4" cy="32.6" r="2.6"/>
							<circle cx="22.4" cy="17.6" r="2.6"/>
							<circle cx="22.4" cy="2.6" r="2.6"/>
							<circle cx="42.2" cy="92.6" r="2.6"/>
							<circle cx="42.2" cy="77.6" r="2.6"/>
							<circle cx="42.2" cy="62.6" r="2.6"/>
							<circle cx="42.2" cy="47.6" r="2.6"/>
							<circle cx="42.2" cy="32.6" r="2.6"/>
							<circle cx="42.2" cy="17.6" r="2.6"/>
							<circle cx="42.2" cy="2.6" r="2.6"/>
							<circle cx="62" cy="92.6" r="2.6"/>
							<circle cx="62" cy="77.6" r="2.6"/>
							<circle cx="62" cy="62.6" r="2.6"/>
							<circle cx="62" cy="47.6" r="2.6"/>
							<circle cx="62" cy="32.6" r="2.6"/>
							<circle cx="62" cy="17.6" r="2.6"/>
							<circle cx="62" cy="2.6" r="2.6"/>
							<circle cx="81.8" cy="92.6" r="2.6"/>
							<circle cx="81.8" cy="77.6" r="2.6"/>
							<circle cx="81.8" cy="62.6" r="2.6"/>
							<circle cx="81.8" cy="47.6" r="2.6"/>
							<circle cx="81.8" cy="32.6" r="2.6"/>
							<circle cx="81.8" cy="17.6" r="2.6"/>
							<circle cx="81.8" cy="2.6" r="2.6"/>
							<circle cx="101.7" cy="92.6" r="2.6"/>
							<circle cx="101.7" cy="77.6" r="2.6"/>
							<circle cx="101.7" cy="62.6" r="2.6"/>
							<circle cx="101.7" cy="47.6" r="2.6"/>
							<circle cx="101.7" cy="32.6" r="2.6"/>
							<circle cx="101.7" cy="17.6" r="2.6"/>
							<circle cx="101.7" cy="2.6" r="2.6"/>
						</svg>
					</figure>

					<!-- Card header -->
					<div class="card-header bg-light p-0 pb-3">
						<h3 class="mb-0">Send us message</h3>
					</div>

					<!-- Card body START -->
					<div class="card-body p-0">
						<form class="row g-4" method="post">
							<!-- Name -->
							<div class="col-md-6">
								<label class="form-label">Your name *</label>
								<input type="text" class="form-control" name="name" id="name">
							</div>
							<!-- Email -->
							<div class="col-md-6">
								<label class="form-label">Email address *</label>
								<input type="email" class="form-control" name="email" id="email">
							</div>
							<!-- Mobile number -->
							<div class="col-12">
								<label class="form-label">Mobile number *</label>
								<input type="text" class="form-control" name="mobile" id="mobile">
							</div>
                            <div class="col-12">
                                <label class="form-label">Service of Interest</label>
                                <select class="form-select" name="service" id="service">
                                    <option>General Inquiry</option>
                                    <option>Car Import</option>
                                    <option>Real Estate</option>
                                    <option>Building Materials</option>
                                </select>
                            </div>
                            <div class="col-12">
								<label class="form-label">Title *</label>
								<input type="text" class="form-control" name="title" id="title">
							</div>
							<!-- Message -->
							<div class="col-12">
								<label class="form-label">Message *</label>
								<textarea class="form-control" rows="3" name="message" id="message"></textarea>
							</div>
							<!-- Checkbox -->
							<div class="col-12 form-check ms-2">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									By submitting this form you agree to our terms and conditions.
								</label>
							</div>
							<!-- Button -->
							<div class="col-12">
								<button class="btn btn-dark mb-0" type="submit">Send Message</button>
							</div>	
						</form>
					</div>
					<!-- Card body END -->
				</div>
			</div>
			<!-- Contact form END -->
		</div>
	</div>
</section>
<!-- =======================
Contact form and vector END -->

<!-- =======================
Map START -->
<section class="pt-0 pt-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<iframe class="w-100 h-300px grayscale rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin" height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>	
			</div>
		</div>
	</div>
</section>
<!-- =======================
Map END -->


<?php include  __DIR__ . '/system/inc/footer.php'; ?>
