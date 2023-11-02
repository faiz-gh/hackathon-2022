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

            <?php
            $sql = "SELECT * FROM `birthform` WHERE `birthformID` =" . $_GET['formid'];

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $fatherName = $row['fatherName'];
                    $motherName = $row['motherName'];
                    $birthPlace = $row['birthPlace'];
                    $birthDate = $row['birthDate'];
                    $gender = $row['gender'];
                    $permAddress = $row['permAddress'];
                    $tempAddress = $row['tempAddress'];
                    $ward = $row['ward'];
                    $zone = $row['zone'];
                    $fatherID = $row['fatherID'];
                    $motherID = $row['motherID'];
                    $dischargeSlip = $row['dischargeSlip'];
                    $marriageCert = $row['marriageCert'];
                }
            }
            ?>
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
                                        <td>Place of Birth</td>
                                        <td><?php echo $birthPlace ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><?php echo $birthDate ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                            <?php if ($gender == 0) {
                                                echo "Male";
                                            } else {
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
                                        <td>Address at Birth</td>
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
                                        <td>Father's Aadhar Card</td>
                                        <td><?php echo $fatherID ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mother's Aadhar Card</td>
                                        <td><?php echo $motherID ?></td>
                                    </tr>
                                    <tr>
                                        <td>Discharge Slip from Hospital</td>
                                        <td><?php echo $dischargeSlip ?></td>
                                    </tr>
                                    <tr>
                                        <td>Marriage Certificate</td>
                                        <td><?php echo $marriageCert ?></td>
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