<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'About Us - Magrol Global Ghana';
    $navClass = "navbar-dark";
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<section class="pt-8">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h1>About Magrol Global Ghana</h1>
                <p class="lead">Bridging the Gap Between Dubai and Ghana.</p>
            </div>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <h2>Our Mission</h2>
                <p>Magrol Global Ghana operates as the official import arm of our main company in Dubai. We were established to provide a seamless and trustworthy channel for businesses and individuals in Ghana to access high-quality goods directly from the UAE.</p>
                <p>By leveraging our headquarters in Dubai, we eliminate middlemen and ensure that every car, real estate investment, or building material shipment is authentic and valued correctly.</p>
            </div>
            <div class="col-lg-6">
                <div class="p-5 bg-light rounded-3 text-center">
                     <h4><i class="bi bi-geo-alt me-2"></i>Our Role</h4>
                     <p>We handle the logistics, Customs, and delivery of your requests from Dubai to your doorstep in Ghana.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>
