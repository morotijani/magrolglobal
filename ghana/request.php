<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Request Import - Magrol Global Ghana';
    $navClass = '<header class="navbar-light header-sticky"><nav class="navbar navbar-expand-xl">';
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<section class="pt-8">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 order-md-2">
                 <div class="h-100 p-5 bg-primary bg-opacity-10 rounded-3">
                    <h3><i class="fa-solid fa-ship me-2"></i>Request Import</h3>
                    <p>Request import of goods from Dubai. We handle purchasing, shipping, and clearing.</p>
                 </div>
            </div>
        </div>
    </div>
</section>

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


<?php include  __DIR__ . '/system/inc/footer.php'; ?>
