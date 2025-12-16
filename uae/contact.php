<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Contact Us - Magrol Global UAE';
    $navClass = "navbar-dark";
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<section class="pt-8">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1>Contact Us</h1>
                <p class="lead">Get in touch with our Dubai Headquarters.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <!-- Contact info -->
                <div class="card card-body shadow h-100">
                    <h5>Headquarters</h5>
                    <address>
                        Magrol Global UAE<br>
                        Business Bay, Dubai<br>
                        United Arab Emirates
                    </address>
                    <p><strong>Email:</strong> info@magrolglobal.ae</p>
                    <p><strong>Phone:</strong> +971 4 123 4567</p>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Form -->
                 <div class="card card-body shadow h-100">
                    <h5>Send us a message</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button class="btn btn-dark">Send Message</button>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</section>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>
