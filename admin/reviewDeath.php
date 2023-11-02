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
                    <h3 class="mt-4">Death Appllications</h3>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Death Certificates
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Field</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Field</th>
                                        <th>Value</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM `deathform` WHERE `deathFormID` =" . $_GET['formid'];

                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0){
                                            while ($row = $result->fetch_assoc()){
                                                $name = $row['name'];
                                                $fatherName = $row['fatherName'];
                                                $motherName = $row['motherName'];
                                                $deathPlace = $row['deathPlace'];
                                                $deathDate = $row['deathDate'];
                                                $gender = $row['gender'];
                                                $permAddress = $row['permAddress'];
                                                $tempAddress = $row['tempAddress'];
                                                $ward = $row['ward'];
                                                $zone = $row['zone'];
                                                $aadharCard = $row['aadharCard'];
                                                $deathDeclaration = $row['deathDeclaration'];
                                                $noc = $row['noc'];
                                                $rationCard = $row['rationCard'];
                                                $postMortem = $row['postMortem'];
                                                $delayedPerm = $row['delayedPerm'];
                                            }
                                        }
                                    ?>
                                    <tr>
                                        <td>Full Name</td>
                                        <td><?php echo $name ?></td>
                                    </tr>
                                    <tr>
                                        <td>Father's Name</td>
                                        <td><?php echo $fatherName ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mother's Name</td>
                                        <td><?php echo $motherName ?></td>
                                    </tr>
                                    <tr>
                                        <td>Place of Death</td>
                                        <td><?php echo $deathPlace ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of Death</td>
                                        <td><?php echo $deathDate ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                        <?php if ($gender == 0){
                                            echo "Male";
                                        } else{
                                            echo "Female";
                                        }
                                        ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Permanent Address</td>
                                        <td><?php echo $permAddress ?></td>
                                    </tr>
                                    <tr>
                                        <td>Address at Death</td>
                                        <td><?php echo $tempAddress ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ward</td>
                                        <td><?php echo $ward ?></td>
                                    </tr>
                                    <tr>
                                        <td>Zone</td>
                                        <td><?php echo $zone ?></td>
                                    </tr>
                                    <tr>
                                        <td>Aadhar Card</td>
                                        <td><?php echo $aadharCard ?></td>
                                    </tr>
                                    <tr>
                                        <td>Death Declaration Certificate</td>
                                        <td><?php echo $deathDeclaration ?></td>
                                    </tr>
                                    <tr>
                                        <td>NOC</td>
                                        <td><?php echo $noc ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ration Card</td>
                                        <td><?php echo $rationCard ?></td>
                                    </tr>
                                    <tr>
                                        <td>Post Mortem Report</td>
                                        <td><?php echo $postMortem ?></td>
                                    </tr>
                                    <tr>
                                        <td>Delayed Death Permission</td>
                                        <td><?php echo $delayedPerm ?></td>
                                    </tr>
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