<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'About Us - Magrol Global UAE';
    $navClass = "navbar-dark";
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';
?>

<section class="pt-8">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h1>About Magrol Global UAE</h1>
                <p class="lead">Your Trusted Partner in Global Trade and Services.</p>
            </div>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <h2>Our Story</h2>
                <p>Magrol Global was established in Dubai with a vision to connect the world to premium quality goods. Situated in the heart of the UAE, we specialize in the dealership of luxury and utility automobiles, prime real estate investments, and high-quality building materials.</p>
                <p>Our headquarters in Dubai serves as the central hub for our operations, ensuring that every product we source and sell meets the highest international standards.</p>
            </div>
            <div class="col-lg-6">
                <div class="p-5 bg-light rounded-3 text-center">
                     <h4><i class="bi bi-geo-alt me-2"></i>Headquarters</h4>
                     <p>Dubai, United Arab Emirates</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>
