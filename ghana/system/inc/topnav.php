        <?= $navClass; ?>
            <div class="container-fluid px-md-5">
                <!-- Logo START -->
                <a class="navbar-brand" href="index">
                    <img class="navbar-brand-item" src="<?= PROOT . $appLogo; ?>" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto me-3 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll mx-auto">
                        <li class="nav-item"> <a class="nav-link" href="index">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="about">About</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="services">Import Services</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="contact">Contact</a> </li>
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Book button -->
                <div class="nav flex-row ms-xl-auto">
                    <a class="btn btn-sm btn-primary mb-0" href="<?= PROOT; ?>../uae/"><i class="bi bi-globe me-2"></i>Main Dubai Site</a>
                </div>

            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>