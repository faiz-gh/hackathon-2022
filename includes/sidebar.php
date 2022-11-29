<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                <a class="nav-link" href="dashboard.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-dashboard"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Birth Certificate Segment</div>
                <a class="nav-link" href="birthRegistrationForm.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Registration Form
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#birthStatus"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Registration Status
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="birthStatus" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="approvedBirthCertificates.php">Approved Applications</a>
                        <a class="nav-link" href="pendingBirthCertificates.php">Pending Applications</a>
                        <a class="nav-link" href="rejectedBirthCertificates.php">Rejected Applications</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Death Certificate Segment</div>
                <a class="nav-link" href="deathRegistrationForm.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Registration Form
                </a>
                <a class="nav-link collapsed" href="birthRegistrationForm" data-bs-toggle="collapse" data-bs-target="#deathStatus"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Registration Status
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="deathStatus" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="approvedDeathCertificates.php">Approved Applications</a>
                        <a class="nav-link" href="pendingDeathCertificates.php">Pending Applications</a>
                        <a class="nav-link" href="rejectedDeathCertificates.php">Rejected Applications</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {Username}
        </div>
    </nav>
</div>