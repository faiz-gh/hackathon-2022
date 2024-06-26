<!DOCTYPE html>
<html lang="en">

<!-- Header -->

<head>
    <?php include "includes/header.php" ?>
    <title>Birth Certificate Application</title>
</head>

<body class="sb-nav-fixed bg-boback">

    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <?php include "includes/navbar.php" ?>
    </nav>

    <div id="layoutSidenav">

        <!-- Sidebar -->
        <?php include "includes/sidebar.php" ?>

        <!-- Main Content Wrapper -->
        <div id="layoutSidenav_content">

            <!-- Main Content -->
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Home Screen</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">Apply for Birth Certificate</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="BirthCertificateForm.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-adon text-white mb-4">
                                <div class="card-body">Apply for Death Certificate</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="DeathCertificateForm.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-ml-6">
                            <div class="card bg-hack text-white mb-4">
                                <div class="card-body">View Certificate</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="viewCertificate.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-ml-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">Birth Certificate status</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="birthStatus.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-adon text-white mb-4">
                                <div class="card-body">Death Certificate status</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="deathStatus.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto  bg-boback">
                <?php include "includes/footer.php" ?>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <?php include "includes/scripts.php" ?>
</body>

</html>