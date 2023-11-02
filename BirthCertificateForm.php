<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<head>
    <?php include "includes/header.php" ?>
    <?php include "includes/dbconnection.php" ?>
    <title>Birth Certificate Application</title>
    <?php
    $name = $fathername = $mothername = $place = $perAdd = $birthAdd = $ward = $zone = "";
    $namerr = $fathernamerr = $mothernamerr =  $placerr = $perAddrr = $birthAddrr = $wardrr = $zonerr = "";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $namerr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
                $namerr = "Only letters and white space allowed";
            }
        }
    }

    if (empty($_POST["fathername"])) {
        $fathernamerr = "Father name is required";
    } else {
        $fathername = test_input($_POST["fathername"]);
        if (!preg_match("/^[a-zA-Z-']*$/", $fathername)) {
            $fathernamerr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["mothername"])) {
        $mothernamerr = "Mother name is required";
    } else {
        $mothername = test_input($_POST["mothername"]);
        if (!preg_match("/^[a-zA-Z-']*$/", $mothername)) {
            $mothernamerr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["perAdd"])) {
        $perAddrr = "Address is required";
    } else {
        $perAdd = test_input($_POST["perAdd"]);
    }

    if (empty($_POST["birthAdd"])) {
        $birthAddrr = "Birth address is required";
    } else {
        $birthAdd = test_input($_POST["birthAdd"]);
    }

    if (empty($_POST["zone"])) {
        $zonerr = "Zone is required";
    } else {
        $zone = test_input($_POST["zone"]);
    }

    if (empty($_POST["place"])) {
        $placerr = "Place of birth is required";
    } else {
        $place = test_input($_POST["place"]);
    }

    if (empty($_POST["ward"])) {
        $wardrr = "Ward is required";
    } else {
        $ward = test_input($_POST["ward"]);
    }

    if (isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $Mname = filter_input(INPUT_POST, 'mothername', FILTER_SANITIZE_SPECIAL_CHARS);
        $Fname = filter_input(INPUT_POST, 'fathername', FILTER_SANITIZE_SPECIAL_CHARS);
        $Pob = filter_input(INPUT_POST, 'place', FILTER_SANITIZE_SPECIAL_CHARS);
        $dob = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_SPECIAL_CHARS);
        $gender = (int)filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
        $address = filter_input(INPUT_POST, 'perAdd', FILTER_SANITIZE_SPECIAL_CHARS);
        $baddress = filter_input(INPUT_POST, 'birthAdd', FILTER_SANITIZE_SPECIAL_CHARS);
        $ward = filter_input(INPUT_POST, 'ward', FILTER_SANITIZE_SPECIAL_CHARS);
        $zone = filter_input(INPUT_POST, 'zone', FILTER_SANITIZE_SPECIAL_CHARS);

        $allowed_ext = array('pdf');
        // $ses = $_SESSION['email'];
        $sql = "SELECT UserID from userlogin WHERE email='$ses';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['userID'];
                $userid = $row['userID'];
                echo $userid;
            }
        }
        $userid=1;
        if (!empty($_FILES['upload1']['name'])) {
            $file_name1 = $_FILES['upload1']['name'];
            $file_size = $_FILES['upload1']['size'];
            $file_tmp = $_FILES['upload1']['tmp_name'];
            $target_dir = "./test/hello/${file_name1}";
            //echo $file_name1,$file_size,$file_tmp,$target_dir;
            $file_ext = explode('.', $file_name1);
            $file_ext = strtolower(end($file_ext));
            if (in_array($file_ext, $allowed_ext)) {
                if ($file_size <= 1000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    rename($file_tmp, "${userid}_${file_name1}");
                    $message = "<p style='color: green';>File Successfully Uploaded</p>";
                } else {
                    $message = "<p style='color: red';>File is too large</p>";
                    echo $message;
                }
            } else {
                $message = "<p style='color: red';>Invalid File type</p>";
                echo $message;
            }
        } else {
            $message = "<p style='color: red';>Please choose a file</p>";
            echo $message;
        }
        if (!empty($_FILES['upload2']['name'])) {
            $file_name2 = $_FILES['upload2']['name'];
            $file_size = $_FILES['upload2']['size'];
            $file_tmp = $_FILES['upload2']['tmp_name'];
            $target_dir = "./test/hello/${file_name2}";
            //echo $file_name2,$file_size,$file_tmp,$target_dir;
            $file_ext = explode('.', $file_name2);
            $file_ext = strtolower(end($file_ext));
            if (in_array($file_ext, $allowed_ext)) {
                if ($file_size <= 1000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    rename($file_tmp, "${userid}_${file_name2}");
                    $message = "<p style='color: green';>File Successfully Uploaded</p>";
                } else {
                    $message = "<p style='color: red';>File is too large</p>";
                    echo $message;
                }
            } else {
                $message = "<p style='color: red';>Invalid File type</p>";
                echo $message;
            }
        } else {
            $message = "<p style='color: red';>Please choose a file</p>";
            echo $message;
        }
        if (!empty($_FILES['upload3']['name'])) {
            $file_name3 = $_FILES['upload3']['name'];
            $file_size = $_FILES['upload3']['size'];
            $file_tmp = $_FILES['upload3']['tmp_name'];
            $target_dir = "./test/hello/${file_name3}";
            //echo $file_name3,$file_size,$file_tmp,$target_dir;
            $file_ext = explode('.', $file_name3);
            $file_ext = strtolower(end($file_ext));
            if (in_array($file_ext, $allowed_ext)) {
                if ($file_size <= 1000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    rename($file_tmp, "${userid}_${file_name3}");
                    $message = "<p style='color: green';>File Successfully Uploaded</p>";
                } else {
                    $message = "<p style='color: red';>File is too large</p>";
                    echo $message;
                }
            } else {
                $message = "<p style='color: red';>Invalid File type</p>";
                echo $message;
            }
        } else {
            $message = "<p style='color: red';>Please choose a file</p>";
            echo $message;
        }
        if (!empty($_FILES['upload4']['name'])) {
            $file_name4 = $_FILES['upload4']['name'];
            $file_size = $_FILES['upload4']['size'];
            $file_tmp = $_FILES['upload4']['tmp_name'];
            $target_dir = "./test/hello/${file_name4}";
            //echo $file_name,$file_size,$file_tmp,$target_dir;
            $file_ext = explode('.', $file_name4);
            $file_ext = strtolower(end($file_ext));
            if (in_array($file_ext, $allowed_ext)) {
                if ($file_size <= 10000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    rename($file_tmp, "${userid}_${file_name4}");
                    $message = "<p style='color: green';>File Successfully Uploaded</p>";
                } else {
                    $message = "<p style='color: red';>File is too large</p>";
                    echo $message;
                }
            } else {
                $message = "<p style='color: red';>Invalid File type</p>";
                echo $message;
            }
        } else {
            $message = "<p style='color: red';>Please choose a file</p>";
            echo $message;
        }
        try {
            $sql1 = "INSERT INTO `birthform` ( `userID`, `regNo`, `regDate`, `ward`, `zone`, `name`, `gender`, `birthDate`, `birthPlace`, `fatherName`, `motherName`, `tempAddress`, `permAddress`, `remarks`, `affiliationCode`, `motherID`, `fatherID`, `marriageCert`, `dischargeSlip`, `birthCertificate`, `birthStatus`) VALUES (2, NULL,CURRENT_TIMESTAMP, '$ward', '$zone', '$name', '$gender', '$dob', '$Pob', '$Fname', '$Mname', '$baddress', '$perAdd', NULL, NULL,'$file_name2','$file_name1','$file_name4','$file_name3', NULL, NULL);";
            if ($conn->query($sql1) === TRUE) {
                echo "<script>console.log('success');</script>";
            } else {
                echo "Error: " . $sql1 . "<br>" . $conn->error;
            }
        } catch (Exception $e) {
            echo "<script>console.log($e)</script>";
        }
    }
    

    // echo "<script>console.log('$name');</script>";
    // echo "<script>console.log('$Mname');</script>";
    // echo "<script>console.log('$Fname');</script>";
    // echo "<script>console.log('$Pob');</script>";
    // echo "<script>console.log('$dob');</script>";
    // echo "<script>console.log('$gender');</script>";
    // echo "<script>console.log('$address');</script>";
    // echo "<script>console.log('$baddress');</script>";
    // echo "<script>console.log('$ward');</script>";
    // echo "<script>console.log('$zone');</script>";
    // echo "<script>console.log('$file_name1');</script>";
    // echo "<script>console.log('$file_name2');</script>";
    // echo "<script>console.log('$file_name3');</script>";
    // echo "<script>console.log('$file_name4');</script>";

    ?>
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
                    <h1 class="mt-4">Birth Certificate</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                    </ol>
                    <div class="w-100 m-auto">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="name">
                                <span class="error"> <?php echo $namerr ?></span>
                                <label for="floatingInput">Full Name</label>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="Fathername">
                                        <span class="error"> <?php echo $fathernamerr ?></span>
                                        <label for="floatingInput">Father's Name</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="mothername">
                                        <span class="error"> <?php echo $mothernamerr ?></span>
                                        <label for="floatingInput">Mother's Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="place">
                                        <span class="error"> <?php echo $placerr ?></span>
                                        <label for="floatingInput">Place of Birth</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingInput" placeholder="Full Name" name="date">
                                        <label for="floatingInput">Date of Birth</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio" value='0' name="gender" aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Male" disabled>
                                    </div>
                                </div>
                                <div class="col-md">
                                <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio" value='1' name="gender" aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Female" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="preAdd" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <span class="error"> <?php echo $perAddrr ?></span>
                                <label for="floatingTextarea">Permanent Address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="birthAdd" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <span class="error"> <?php echo $birthAddrr ?></span>
                                <label for="floatingTextarea">Address at Birth</label>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="ward" class="form-control" id="floatingInput" placeholder="Full Name" name="name">
                                        <span class="error"> <?php echo $wardrr ?></span>
                                        <label for="floatingInput">Ward</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="zone" class="form-control" id="floatingInput" placeholder="Full Name" name="name">
                                        <span class="error"> <?php echo $zonerr ?></span>
                                        <label for="floatingInput">Zone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Father's Aadhar Card</label>
                                        <input class="form-control" type="file" name="upload1" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Mother's Aadhar Card</label>
                                        <input class="form-control" type="file" name="upload2" id="formFile">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Discharge Slip from Hospital</label>
                                        <input class="form-control" type="file" name="upload3" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Marriage Certifiate (Optional)</label>
                                        <input class="form-control" type="file" name="upload4" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <div class="m-auto mb-3">
                                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto  bg-newboback">
                <?php include "includes/footer.php" ?>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <?php include "includes/scripts.php" ?>
</body>

</html>