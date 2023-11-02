<!DOCTYPE html>
<html lang="en">

<!-- Header -->

<head>
    <?php include "includes/header.php" ?>
    <title>death Certificate Application</title>
    <?php
   //include('piyush/test/database.php');
   $name = $father = $mother = $place = $peradd = $deathadd = $ward = $zone = "";
   $nameErr = $fatherErr = $motherErr = $placeErr = $peraddErr = $deathaddErr = $wardErr = $zoneErr = "";
   include "includes/dbconnection.php";
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 if(empty($_POST["name"]))
 {
   $nameErr = "Name is required";
 }
 else
 {
   $name = test_input($_POST["name"]);
   if(!preg_match("/^[a-zA-Z-']*$/",$name))
   {
     $nameErr = "Only letters and white space allowed";
   }
 }
}

if(empty($_POST["fathernamedeath"]))
 {
   $fatherErr = "Father name is required";
 }
 else
 {
   $father = test_input($_POST["fathernamedeath"]);
   if(!preg_match("/^[a-zA-Z-']*$/",$father))
   {
     $fatherErr = "Only letters and white space allowed";
   }
 }

 if(empty($_POST["mothernamedeath"]))
 {
   $motherErr = "Mother name is required";
 }
 else
 {
   $mother = test_input($_POST["mothernamedeath"]);
   if(!preg_match("/^[a-zA-Z-']*$/",$mother))
   {
     $motherErr = "Only letters and white space allowed";
   }
 }

 if(empty($_POST["placedeath"]))
 {
   $placeErr = "Death address is required";
 }
 else
 {
   $place = test_input($_POST["placedeath"]);
 }

 if(empty($_POST["ward"]))
 {
   $wardErr = "Ward is required";
 }
 else
 {
   $ward = test_input($_POST["ward"]);
 }

 if(empty($_POST["zone"]))
 {
   $zoneErr = "Zone is required";
 }
 else
 {
   $zone = test_input($_POST["zone"]);
 }

 if(empty($_POST["perAdddeath"]))
 {
   $peraddErr = "Address is required";
 }
 else
 {
   $peradd = test_input($_POST["perAdddeath"]);
 }

 if(empty($_POST["deathadd"]))
 {
   $deathaddErr = "Death address is required";
 }
 else
 {
   $deathadd = test_input($_POST["deathadd"]);
 }
 if (isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $Mname = filter_input(INPUT_POST, 'mothernamedeath', FILTER_SANITIZE_SPECIAL_CHARS);
  $Fname = filter_input(INPUT_POST, 'fathernamedeath', FILTER_SANITIZE_SPECIAL_CHARS);
  $tod = filter_input(INPUT_POST, 'timedeath', FILTER_SANITIZE_SPECIAL_CHARS);
  $pod = filter_input(INPUT_POST, 'placedeath', FILTER_SANITIZE_SPECIAL_CHARS);
  $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
  $address = filter_input(INPUT_POST, 'perAdddeath', FILTER_SANITIZE_SPECIAL_CHARS);
  $daddress = filter_input(INPUT_POST, 'deathadd', FILTER_SANITIZE_SPECIAL_CHARS);
  $ward = filter_input(INPUT_POST, 'ward', FILTER_SANITIZE_SPECIAL_CHARS);
  $zone = filter_input(INPUT_POST, 'zone', FILTER_SANITIZE_SPECIAL_CHARS);

  $allowed_ext = array('pdf');
  // $ses = $_SESSION['email'];
  //   $sql = "SELECT UserID from userlogin WHERE email='$ses';";
  //   $result = mysqli_query($conn, $sql);
  //   if (mysqli_num_rows($result) > 0) {
  //     while ($row = mysqli_fetch_assoc($result)) {
  //       echo $row['userID'];
  //       $userid = $row['userID'];
  //       echo $userid;
  //     }
  //   }
  $userid = 1;
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
      if ($file_size <= 1000000) {
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
  if (!empty($_FILES['upload5']['name'])) {
    $file_name5 = $_FILES['upload5']['name'];
    $file_size = $_FILES['upload5']['size'];
    $file_tmp = $_FILES['upload5']['tmp_name'];
    $target_dir = "./test/hello/${file_name5}";
    //echo $file_name,$file_size,$file_tmp,$target_dir;
    $file_ext = explode('.', $file_name5);
    $file_ext = strtolower(end($file_ext));
    if (in_array($file_ext, $allowed_ext)) {
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp, $target_dir);
        rename($file_tmp, "${userid}_${file_name5}");
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
  if (!empty($_FILES['upload6']['name'])) {
    $file_name6 = $_FILES['upload6']['name'];
    $file_size = $_FILES['upload6']['size'];
    $file_tmp = $_FILES['upload6']['tmp_name'];
    $target_dir = "./test/hello/${file_name6}";
    //echo $file_name,$file_size,$file_tmp,$target_dir;
    $file_ext = explode('.', $file_name6);
    $file_ext = strtolower(end($file_ext));
    if (in_array($file_ext, $allowed_ext)) {
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp, $target_dir);
        rename($file_tmp, "${userid}_${file_name6}");
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
     $sql1="INSERT INTO `deathform` ( `userID`, `regNo`, `regDate`, `ward`, `zone`, `name`, `gender`, `deathDate`, `deathPlace`, `motherName`, `fatherName`, `tempAddress`, `permAddress`, `remarks`, `aadharCard`, `noc`, `rationCard`, `delayedPerm`, `postMortem`, `deathDeclaration`, `deathCertificate`, `deathStatus`) 
     VALUES ( 2, NULL, CURRENT_TIMESTAMP, '$ward', '$zone', '$name',$gender,'$tod', '$pod', '$Mname','$Fname' , '$daddress','$address' , NULL,'$file_name1', '$file_name2', '$file_name3','$file_name4', '$file_name5', '$file_name6', NULL, NULL);";    
     if ($conn->query($sql1) === TRUE) {
       echo "<script>console.log('success');</script>";
     } else {
       echo "Error: " . $sql1 . "<br>" . $conn->error;
     }
   } catch (Exception $e) {
     echo "<script>console.log($e)</script>";
   }
    echo "<script>console.log('$name');</script>";
    echo "<script>console.log('$Mname');</script>";
    echo "<script>console.log('$Fname');</script>";
    echo "<script>console.log('$tod');</script>";
    echo "<script>console.log('$pod');</script>";
    //echo "<script>console.log('$gender');</script>";
    echo "<script>console.log('$address');</script>";
    echo "<script>console.log('$daddress');</script>";
    echo "<script>console.log('$ward');</script>";
    echo "<script>console.log('$zone');</script>";
    echo "<script>console.log('$file_name1');</script>";
    echo "<script>console.log('$file_name2');</script>";
    echo "<script>console.log('$file_name3');</script>";
    echo "<script>console.log('$file_name4');</script>";
    echo "<script>console.log('$file_name5');</script>";
    echo "<script>console.log('$file_name6');</script>";  
}

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
                    <h1 class="mt-4">Death Certificate</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                    </ol>
                    <div class="w-100 m-auto">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  enctype="multipart/form-data">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="name">
                                <span class="error"> <?php echo $nameErr?></span>
                                <label for="floatingInput">Full Name of the Deceased</label>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="fathernamedeath">
                                        <span class="error"> <?php echo $fatherErr?></span>
                                        <label for="floatingInput">Father's Name</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="mothernamedeath">
                                        <span class="error"> <?php echo $motherErr?></span>
                                        <label for="floatingInput">Mother's Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="placedeath">
                                        <span class="error"> <?php echo $placeErr?></span>
                                        <label for="floatingInput">Place of Death</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingInput" placeholder="Full Name" name="timedeath">
                                        <label for="floatingInput">Date of Death</label>
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
                                <textarea class="form-control" name="perAdddeath" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <span class="error"> <?php echo $peraddErr?></span>
                                <label for="floatingTextarea">Permanent Address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="=deathadd" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <span class="error"> <?php echo $deathaddErr?></span>
                                <label for="floatingTextarea">Address at Death</label>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="ward" class="form-control" id="floatingInput" placeholder="Full Name" name="name">
                                        <span class="error"> <?php echo $wardErr?></span>
                                        <label for="floatingInput">Ward</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="zone" class="form-control" id="floatingInput" placeholder="Full Name" name="name">
                                        <span class="error"> <?php echo $zoneErr?></span>
                                        <label for="floatingInput">Zone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Aadhar Card</label>
                                        <input class="form-control" name="upload1" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Death Declaration Certficate</label>
                                        <input class="form-control" name="upload2" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">NOC (Optional)</label>
                                        <input class="form-control" name="upload3" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Ration Card (Optional)</label>
                                        <input class="form-control" name="upload4" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Post Mortem Report (If Applicable)</label>
                                        <input class="form-control" name="upload5" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Delayed Death Permission (If Applicable)</label>
                                        <input class="form-control" name="upload6" type="file" id="formFile">
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
            <footer class="py-4 bg-light mt-auto  bg-boback">
                <?php include "includes/footer.php" ?>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <?php include "includes/scripts.php" ?>
</body>

</html>