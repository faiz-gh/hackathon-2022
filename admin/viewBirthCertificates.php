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
                    <h3 class="mt-4">Birth Appllications</h3>
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
                                        <th>Accept</th>
                                        <th>Reject</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Form ID</th>
                                        <th>Review</th>
                                        <th>Accept</th>
                                        <th>Reject</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                        $sql = "SELECT  `birthformID` FROM `birthform` WHERE `birthStatus` = 0;";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $formid = $row['birthformID'];

                                                echo "<tr>";
                                                echo "<td>$formid</td>";
                                                echo "<td>";
                                                echo "    <a href='reviewBirth.php?formid=$formid'><input class='btn btn-primary' type='button' name='review' value='Review'></a>";
                                                echo "</td>";
                                                echo "<td>";
                                                echo "    <a href='birthStatusAccept.php?formid=$formid'><input class='btn btn-success' type='button' name='accept' value='Accept'></a>";
                                                echo "</td>";
                                                echo "<td>";
                                                echo "    <a href='birthStatusReject.php?formid=$formid''><input class='btn btn-danger' type='button' name='reject' value='Reject'></a>";
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