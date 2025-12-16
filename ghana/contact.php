<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Contact Us - Magrol Global Ghana';
    $navClass = "navbar-dark";
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<section class="pt-8">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1>Contact Us</h1>
                <p class="lead">Visit our local office to discuss your import needs.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <!-- Contact info -->
                <div class="card card-body shadow h-100">
                    <h5>Ghana Office</h5>
                    <address>
                        Magrol Global Ghana<br>
                        Accra, Ghana<br>
                        West Africa
                    </address>
                    <p><strong>Email:</strong> ghana@magrolglobal.com</p>
                    <p><strong>Phone:</strong> +233 20 123 4567</p>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Form -->
                 <div class="card card-body shadow h-100">
                    <h5>Make an Inquiry</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Service of Interest</label>
                            <select class="form-select">
                                <option>General Inquiry</option>
                                <option>Car Import</option>
                                <option>Real Estate</option>
                                <option>Building Materials</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button class="btn btn-dark">Send Inquiry</button>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</section>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>
