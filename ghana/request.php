<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Request Import - Magrol Global Ghana';
    $navClass = '<header class="navbar-light header-sticky"><nav class="navbar navbar-expand-xl">';
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';

    if ($_POST) {
        $name = sanitize($_POST['name']);
        $phone = sanitize($_POST['phone']);
        $service = sanitize($_POST['service']);
        $description = sanitize($_POST['description']);

        $to = 'info@ghana.magrolglobal.com';
        $subject = 'New Import Request from ' . $name;
        $body = "Name: " . $name . "\nPhone: " . $phone . "\nService: " . $service . "\nDescription: " . $description;

        mail($to, $subject, $body, 'From: ' . $name . '<' . $phone . '>');
    }
?>

<!-- =======================
Main Banner START -->
<section class="position-relative">

	<!-- Svg decoration -->
	<div class="position-absolute top-50 start-0 translate-middle-y d-none d-md-block">
		<img src="<?= PROOT; ?>assets/media/decoration.svg" alt="">
	</div>

	<div class="container">
		<!-- Content and Image START -->
		<div class="row g-4 g-lg-5 align-items-center">
			<!-- Content -->
			<div class="col-lg-6 position-relative">
                <h6 class="text-uppercase">🤩 Easy Way To Import</h6>
				<!-- Title -->
				<h1 class="mb-2">Make an Import Request</h1>
				<!-- Info -->
				<p class="mb-4">Tell us what you need, and we will handle the logistics from Dubai to Ghana.</p>
                
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Your Name" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone" id="phone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Service Type</label>
                        <select class="form-select" name="service" id="service">
                            <option>Import Car</option>
                            <option>Real Estate Inquiry</option>
                            <option>Building Materials</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description of Request</label>
                        <textarea class="form-control" rows="4" placeholder="Describe the item or service you are looking for..." name="description" id="description"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark btn-lg">Submit Request</button>
                    </div>
                </form>
            </div>
            <!-- Image -->
			<div class="col-lg-6 position-relative">
				<img src="assets/media/bg-1.jpg" class="rounded" alt="">
			</div>
        </div>
    </div>
</section>


<?php include  __DIR__ . '/system/inc/footer.php'; ?>
