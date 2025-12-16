<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Home - Magrol Global Ghana';
    $navClass = "transparent navbar-transparent navbar-dark";
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<!-- =======================
Main banner START -->
<section class="position-relative py-8 py-sm-9" style="background-color: #1a1a1a;">
    <div class="container z-index-9 position-relative">
        <div class="row">
            <div class="col-xl-8 m-auto text-center py-xl-8">
                <h1 class="display-4 text-white mb-3">Magrol Global Ghana</h1>
                <h5 class="text-white mb-3">Import Quality Goods Directly from Dubai.</h5>
                <p class="text-white-50 lead">Cars, Real Estate & Building Materials - Sourced from our Dubai Headquarters.</p>
                <a href="#request-import" class="btn btn-lg btn-warning mb-0">Request an Import</a>
            </div>
        </div> 
    </div>
</section>
<!-- =======================
Main banner END -->

<!-- =======================
Services (Import) START -->
<section class="pt-5 pt-md-8 pb-0">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2>Import Services</h2>
                <p class="lead">We facilitate the import of premium goods available at our main Dubai branch.</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Service 1: Cars -->
            <div class="col-md-4">
                <div class="card card-body shadow p-5 align-items-center text-center h-100">
                    <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4"><i class="fa-solid fa-ship"></i></div>
                    <h5>Import Cars</h5>
                    <p>Looking for a specific vehicle? We import cars directly from our Dubai showroom to Ghana upon your request.</p>
                </div>
            </div>
            <!-- Service 2: Real Estate -->
            <div class="col-md-4">
                <div class="card card-body shadow p-5 align-items-center text-center h-100">
                    <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-4"><i class="fa-solid fa-home"></i></div>
                    <h5>Real Estate Investments</h5>
                    <p>Invest in Dubai real estate from Ghana. We guide you through the process and manage your international assets.</p>
                </div>
            </div>
            <!-- Service 3: Building Materials -->
            <div class="col-md-4">
                <div class="card card-body shadow p-5 align-items-center text-center h-100">
                    <div class="icon-lg bg-warning bg-opacity-10 text-warning rounded-circle mb-4"><i class="fa-solid fa-truck-loading"></i></div>
                    <h5>Import Building Materials</h5>
                    <p>Source high-grade building materials from Dubai for your construction projects in Ghana.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Services END -->

<!-- =======================
Request Form START -->
<section id="request-import" class="pt-5 pt-md-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <h2>Make an Import Request</h2>
                <p class="lead">Tell us what you need, and we will handle the logistics from Dubai to Ghana.</p>
                
                <div class="card card-body shadow-lg p-5 mt-4 text-start">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Service Type</label>
                            <select class="form-select">
                                <option>Import Car</option>
                                <option>Real Estate Inquiry</option>
                                <option>Building Materials</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description of Request</label>
                            <textarea class="form-control" rows="4" placeholder="Describe the item or service you are looking for..."></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark btn-lg">Submit Request</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- =======================
Request Form END -->

<?php include  __DIR__ . '/system/inc/footer.php'; ?>