<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Import Services - Magrol Global Ghana';
    $navClass = "navbar-dark";
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<section class="pt-8">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1>Import Services</h1>
                <p class="lead">Your direct link to Dubai's market.</p>
            </div>
        </div>

        <!-- Car Import -->
        <div class="row g-4 mb-5 align-items-center">
            <div class="col-md-6 order-md-2">
                 <div class="h-100 p-5 bg-primary bg-opacity-10 rounded-3">
                    <h3><i class="fa-solid fa-ship me-2"></i>Car Import</h3>
                    <p>Select your desired vehicle from our Dubai inventory or request a specific make and model. We handle purchasing, shipping, and clearing.</p>
                 </div>
            </div>
            <div class="col-md-6 order-md-1">
                 <h3>Drive Your Dream</h3>
                 <p>Get access to luxury cars, SUVs, and commercial vehicles that are often hard to find locally.</p>
            </div>
        </div>

        <!-- Real Estate Investment -->
        <div class="row g-4 mb-5 align-items-center">
             <div class="col-md-6">
                 <div class="h-100 p-5 bg-success bg-opacity-10 rounded-3">
                    <h3><i class="fa-solid fa-home me-2"></i>Dubai Real Estate</h3>
                    <p>Invest in one of the world's most dynamic property markets. We provide consultation and manage the purchase process for you from Ghana.</p>
                 </div>
            </div>
            <div class="col-md-6">
                 <h3>Secure Investments</h3>
                 <p>Own property in Dubai with the confidence of having a trusted local partner in Ghana.</p>
            </div>
        </div>

        <!-- Building Materials Supply -->
        <div class="row g-4 align-items-center">
            <div class="col-md-6 order-md-2">
                 <div class="h-100 p-5 bg-warning bg-opacity-10 rounded-3">
                    <h3><i class="fa-solid fa-truck-loading me-2"></i>Material Supply</h3>
                    <p>Bulk import of construction materials. We source directly from manufacturers and distributors in the UAE to offer you the best rates.</p>
                 </div>
            </div>
            <div class="col-md-6 order-md-1">
                 <h3>Build Better</h3>
                 <p>Ensure your construction projects in Ghana use the highest quality materials available on the global market.</p>
            </div>
        </div>

    </div>
</section>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>
