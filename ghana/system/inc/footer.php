    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
    Footer START -->
    <footer class="bg-dark py-7">

        <div class="container">
            <div class="row mx-auto">
                <div class="col-lg-6 mx-auto text-center">
                    <!-- Logo -->
                    <img class="mx-auto h-60px" src="<?= PROOT . $appLogo; ?>" alt="logo">
                    <p class="mt-3 text-white">Magrol Global Ghana - Your Reliable Import Partner.</p>
                    <!-- Links -->
                    <ul class="nav justify-content-between text-primary-hover mt-3 mt-md-0">
                        <li class="nav-item"><a class="nav-link p-2 text-white" href="about">About</a></li>
                        <li class="nav-item"><a class="nav-link p-2 text-white" href="services">Import Services</a></li>
                        <li class="nav-item"><a class="nav-link p-2 text-white" href="contact">Contact</a></li>
                    </ul>
                    <!-- Social media button -->
                    <ul class="list-inline mt-3 mb-0">
                        <li class="list-inline-item"> 
                            <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#">
                                <i class="fab fa-fw fa-facebook-f"></i>
                            </a> 
                        </li>
                        <li class="list-inline-item"> 
                            <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#">
                                <i class="fab fa-fw fa-instagram"></i>
                            </a> 
                        </li>
                        <li class="list-inline-item"> 
                            <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#">
                                <i class="fab fa-fw fa-twitter"></i>
                            </a> 
                        </li>
                        <li class="list-inline-item"> 
                            <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#">
                                <i class="fab fa-fw fa-linkedin-in"></i>
                            </a> 
                        </li>
                    </ul>
                    <!-- copyright text -->
                    <div class="text-body-secondary text-primary-hover mt-3"> Copyrights &copy; <?= date('Y'); ?> Magrol Global. </div>
                </div>
            </div>
            
        </div>
    </footer>
    <!-- =======================
    Footer END -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="<?= PROOT; ?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="<?= PROOT; ?>assets/js/choices.min.js"></script>
    <script src="<?= PROOT; ?>assets/js/tiny-slider.js"></script>
    <script src="<?= PROOT; ?>assets/js/flatpickr.min.js"></script>
    <script src="<?= PROOT; ?>assets/js/glightbox.js"></script>

    <!-- ThemeFunctions -->
    <script src="<?= PROOT; ?>assets/js/functions.js"></script>

</body>
</html>
