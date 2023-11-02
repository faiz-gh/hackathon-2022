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
                    <h1 class="mt-4">Rejected Appllications.</h1>
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">Rejected Birth Certificate Appllications</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="rejectedBirthApplications.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card bg-adon text-white mb-4">
                                <div class="card-body">Rejected Death Certificate Appllications</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="rejectedDeathApplications.php">View Details</a>
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