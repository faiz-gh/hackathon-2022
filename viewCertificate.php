<!DOCTYPE html>
<html lang="en">

<!-- Header -->

<head>
    <?php include "includes/header.php" ?>
    <title>Birth Certificate Application</title>
    <?php include "includes/dbconnection.php" ?>
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
                    <h3 class="mt-4">Approved Birth Appllications</h3>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Birth Certificates
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Form ID</th>
                                        <th>Review</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Form ID</th>
                                        <th>Review</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $sqlb = "SELECT  `birthformID` FROM `birthform` WHERE `birthStatus` = 1;";
                                    $resultb = $conn->query($sqlb);
                                    if ($resultb->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $resultb->fetch_assoc()) {
                                            $formidb = $row['birthformID'];

                                            echo "<tr>";
                                            echo "<td>$formidb</td>";
                                            echo "<td>";
                                            echo "    <a href='birthCertificate.php?formid=$formidb'><input class='btn btn-primary' type='button' name='review' value='Birth Certificate'></a>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                    <?php
                                    $sqld = "SELECT  `deathFormID` FROM `deathform` WHERE `deathStatus` = 1;";
                                    $resultd = $conn->query($sqld);
                                    if ($resultd->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $resultd->fetch_assoc()) {
                                            $formidd = $row['deathFormID'];

                                            echo "<tr>";
                                            echo "<td>$formidd</td>";
                                            echo "<td>";
                                            echo "    <a href='deathCertificate.php?formid=$formidd'><input class='btn btn-primary' type='button' name='review' value='Death Certificate'></a>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
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