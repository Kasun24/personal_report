<?php
include('config.php');
$upload_dir = 'uploads/';

if (isset($_GET['prefNo'])) {
    $id = $_GET['prefNo'];
    $sql = "select * from personal where prefNo = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $errorMsg = 'Could not Find Any Record';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User CV</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />

    <style>
        .solid {
            border-style: solid;
            border-width: 3px;
            padding: 4px;
        }

        .item {
            /*width: 350px;*/
            padding: 6px;
            border: 2px solid black;
            display: inline-block;
            vertical-align: middle;
            margin: 3px;
        }
    </style>
    <script>
        function printpage() {
            window.print()
        }
    </script>
</head>

<body>
    <br>
    <div class="container" align="center">
        <div class="container">
            <img class="center" src="../images/header.jpg" height="140">
        </div>
        <div class="item" style="width: 300px;"><b>Tel:(+94) 112418660, 7393220 - 23</b></div>
        <div class="item" style="width: 300px;"><b>Fax:(+94) 112418655</b></div>
        <div class="item" style="width: 300px;"><b>E-mail:info@summithlanka.com</b></div>
    </div>
    <br>

    <div class="container" style="border: 3px solid black; border-radius: 25px;">
    <br><br>
    <div class="row">
        <div class="col-md-4">
            
                    <div class="form-group">
                        <label>SML Number</label>
                        <input type="text" value = "<?php echo $row['post1']; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" value = "<?php echo $row['surName']; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="text" value = "<?php echo $row['dob']; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Place Of Birth</label>
                        <input type="text" value = "<?php echo $row['pasPob']; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Language / s</label>
                        <input type="text" value = "<?php echo $row['languages']; ?>" class="form-control form-control-sm">
                    </div>
                    
        </div>
        <div class="col-md-4">
            
                    <div class="form-group">
                        <label>Applied Job</label>
                        <input type="text" value = "<?php echo $row['post1']; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Given name</label>
                        <input type="text" value = "<?php echo $row['otherName']; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" value = "<?php echo $row['age']; ?>" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Current Location</label>
                        <input type="text" value = "<?php echo $row['country']; ?>" class="form-control form-control-sm">
                    </div>
                    
        </div>
        <div class="col-md-4">
            <br>
                    <div class="container">
                    <img style="height: 300px; width:250px;" src="<?php echo $upload_dir . $row['userImg'] ?>" align="center">
                    </div>  
                
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
                    <div class="form-group">
                    <h5>Passport issue Details</h4><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Passport ID : &nbsp;<?php echo $row['pasNo']; ?></label><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>PasspDate Of Expiry : &nbsp;<?php echo $row['pasDoe']; ?></label>
                    </div>
                    <div class="form-group">
                    <h5>Personal Information</h4><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Nationaility : &nbsp;<?php echo $row['nationality']; ?></label><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Gender : &nbsp;<?php echo $row['gender']; ?></label>
                    </div>
        </div>
        <div class="col-md-4">
                    <div class="form-group">
                    <h5>&nbsp;</h4><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Date Of Issue : &nbsp;<?php echo $row['pasDoi']; ?></label><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Place Of Issue : &nbsp;<?php echo $row['pasPoi']; ?></label>
                    </div>
                    <div class="form-group">
                    <h5>&nbsp;</h4><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Religion : &nbsp;<?php echo $row['religon']; ?></label><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Profile Sourcing : &nbsp;<?php echo $row['subdirect']; ?></label><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Civil Status : &nbsp;<?php echo $row['cStatus']; ?></label>
                    </div> 
        </div>
        <div class="col-md-4">
                    <h5 style="text-align: center;">Contact Details</h4>
                    <div class="form-group">
                        <br>
                        <label style="text-overflow: ellipsis;" >Address : <?php echo $row['addr']; ?></label><br>
                        <label>Country : &nbsp;<?php echo $row['country']; ?></label><br>
                        <label>Phone No : &nbsp;<?php echo $row['tel']; ?></label><br>
                        <label>Mobile No : &nbsp;<?php echo $row['mobile']; ?></label><br>
                    </div> 
                    <h5 style="text-align: center;">Qulification</h4>
                    <div class="form-group">
                        <br>
                        <label style="text-overflow: ellipsis;" >Education : <?php echo $row['eduQuli']; ?></label><br>
                        <label>Professional<br>Qulification : &nbsp;<?php echo $row['profQuli']; ?></label><br>
                    </div><br><br><br><br><br><br><br>  
        </div>
    </div>
    </div>



    <br><br><br><br><br><br><br><br><br><br>

    <input type="button" value="Print page" onclick="printpage()">


</body>

</html>