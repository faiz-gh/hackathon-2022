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
            $sql = "SELECT * FROM `deathform` WHERE `deathFormID` =" . $_GET['formid'];

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
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
                }
            }
            ?>

                <!-- Main Content -->
                <div class="container-fluid">
                    <h1 style="align-items: center;"> Digital Death Certificate</h1><br><br>
                    <label> Full Name : <?php echo $name ?></label><br><br>
                    <label> Sex : <?php if($gender == 0){echo "Male";} else { echo "Female";} ?></label><br><br>
                    <label> Full Name of Father : <?php echo $fatherName ?></label><br><br>
                    <label> Full Name of Mother : <?php echo $motherName ?></label><br><br>
                    <label> Date Of Death : <?php echo $deathDate ?></label><br><br>
                    <label> Place of Death : <?php echo $deathPlace ?></label><br><br>
                    <label> Permenant Address: <?php echo $permAddress ?></label><br><br>
                    <label> Address at Place of Death: <?php echo $tempAddress ?></label><br><br>
                    <label> Zone : <?php echo $zone ?></label><br><br>
                    <label> Ward : <?php echo $ward ?></label><br><br>
                    <label> Registration No : <?php echo "CFHG2846891" ?></label><br><br>
                </div>
               
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
