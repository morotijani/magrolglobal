<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Our Services - Magrol Global UAE';
    $navClass = '<header class="navbar-light header-sticky"><nav class="navbar navbar-expand-xl">';
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<section class="pt-8">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1>Our Services</h1>
                <p class="lead">Excellence in every sector we operate.</p>
            </div>
        </div>

        <!-- Car Dealership -->
        <div class="row g-4 mb-5 align-items-center">
            <div class="col-md-6 order-md-2">
                 <div class="h-100 p-5 bg-primary bg-opacity-10 rounded-3">
                    <h3><i class="fa-solid fa-car me-2"></i>Car Dealership</h3>
                    <p>We offer a curated selection of vehicles ranging from luxury sedans to powerful SUVs. All our cars are inspected for quality and performance, ready for the Dubai roads or for export.</p>
                 </div>
            </div>
            <div class="col-md-6 order-md-1">
                 <h3>Automotive Excellence</h3>
                 <p>Whether you are looking for a brand new vehicle or a certified pre-owned car, Magrol Global is your reliable partner.</p>
            </div>
        </div>

        <!-- Real Estate -->
        <div class="row g-4 mb-5 align-items-center">
             <div class="col-md-6">
                 <div class="h-100 p-5 bg-success bg-opacity-10 rounded-3">
                    <h3><i class="fa-solid fa-building me-2"></i>Real Estate</h3>
                    <p>Unlock the potential of Dubai's property market. We assist in buying, selling, and leasing residential and commercial properties.</p>
                 </div>
            </div>
            <div class="col-md-6">
                 <h3>Prime Properties</h3>
                 <p>From downtown apartments to seaside villas, we have access to the best listings in the UAE.</p>
            </div>
        </div>

        <!-- Building Materials -->
        <div class="row g-4 align-items-center">
            <div class="col-md-6 order-md-2">
                 <div class="h-100 p-5 bg-warning bg-opacity-10 rounded-3">
                    <h3><i class="fa-solid fa-trowel-bricks me-2"></i>Building Materials</h3>
                    <p>Supplying the construction industry with top-grade materials including cement, steel, and timber sourced globally.</p>
                 </div>
            </div>
            <div class="col-md-6 order-md-1">
                 <h3>Construction Support</h3>
                 <p>We ensure your projects are built on a solid foundation with our reliable supply chain of materials.</p>
            </div>
        </div>

    </div>
</section>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>
