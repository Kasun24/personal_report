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

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
    </style>
    <script>
        function printpage() {
            window.print()
        }
    </script>
</head>

<body>

    <div class="container-fluid" style="border: 3px solid black">
        <br>
        <div class="container" style="border: 3px solid black" align="center">
            <div class="container">
                <img class="center" src="../images/header.jpg" height="140">
            </div>
            <div class="item" style="width: 300px;"><b>Tel:(+94) 112418660, 7393220 - 23</b></div>
            <div class="item" style="width: 300px;"><b>Fax:(+94) 112418655</b></div>
            <div class="item" style="width: 300px;"><b>E-mail:info@summithlanka.com</b></div>
        </div>
        <br>

        <div class="container">
            <br>
            <h3 align="center">APPLICATION FORM</h3>
            <br>
            <div class="row">
                <div class="col-md-9">
                    <div class="item" style="width: 150px;">SML No : <?php echo $row['prefNo']; ?></div>&nbsp;&nbsp;
                    <div class="item" style="width: 350px;">Post : <?php echo $row['post1']; ?></div>&nbsp;&nbsp;
                    <div class="item" style="width: 125px;">Gender : <?php echo $row['gender']; ?></div>
                    <br><br>
                    <div class="container">
                        <h4 align="center">PERSONAL DETAILS</h4>
                    </div>
                    <div class="item" style="width: 665px;">Surname : <?php echo $row['surName']; ?></div><br>
                    <div class="item" style="width: 665px;">Other Names : <?php echo $row['otherName']; ?></div><br>
                    <div class="item" style="width: 440px;">Date Of Birth : <?php echo $row['dob']; ?></div>&nbsp;&nbsp;
                    <div class="item" style="width: 208px;">Age : <?php echo $row['age']; ?></div><br>
                    <div class="item" style="width: 324px;">Country : <?php echo $row['country']; ?></div>&nbsp;&nbsp;
                    <div class="item" style="width: 324px;">Nationality : <?php echo $row['nationality']; ?></div><br>
                    <div class="item" style="width: 324px;">Religion : <?php echo $row['religon']; ?></div>&nbsp;&nbsp;
                    <div class="item" style="width: 324px;">Civil Status : <?php echo $row['cStatus']; ?></div>
                </div>
                <div class="col-md-3">
                    <img style="height: 250px; width:220px" src="<?php echo $upload_dir . $row['userImg'] ?>" align="right">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item" style="width: 960px; height:70px">Address : <?php echo $row['addr']; ?></div><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="item" style="width: 465px;">Tel(Home) : <?php echo $row['tel']; ?></div>
                </div>
                <div class="col-md-6">
                    <div class="item" style="width: 465px;">Mobile No: <?php echo $row['mobile']; ?></div>
                </div>
            </div>
            <br>
            <h4 align="center">DETAILS OF PASSPORT</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="item" style="width: 465px;">Passport No : <?php echo $row['pasNo']; ?></div>
                </div>
                <div class="col-md-6">
                    <div class="item" style="width: 465px;">Place Of Birth : <?php echo $row['pasPob']; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item" style="width: 300px;">Date of Issue : <?php echo $row['pasDoi']; ?></div>
                </div>
                <div class="col-md-4">
                    <div class="item" style="width: 300px;">Date of Expiry : <?php echo $row['pasDoe']; ?></div>
                </div>
                <div class="col-md-4">
                    <div class="item" style="width: 300px;">Place Of Issue : <?php echo $row['pasPoi']; ?></div>
                </div>
            </div>
            <br>
            <h4 align="center">QULIFICATION</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="item" style="width: 960px;">Educational Qulification : <?php echo $row['eduQuli']; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item" style="width: 960px;">Professional Qulification : <?php echo $row['profQuli']; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item" style="width: 960px;">Knowledge of Languages : <?php echo $row['languages']; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item" style="width: 300px;">Driving Licence No : <?php echo $row['dlNo']; ?></div>
                </div>
                <div class="col-md-4">
                    <div class="item" style="width: 300px;">Date of Issue : <?php echo $row['dlDoi']; ?></div>
                </div>
                <div class="col-md-4">
                    <div class="item" style="width: 300px;">Type : <?php echo $row['dlType']; ?></div>
                </div>
            </div>
            <br>
            <h4 align="center">Other Details</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="item" style="width: 215px;">Complexion : <?php echo $row['complexion']; ?></div>
                </div>
                <div class="col-md-3">
                    <div class="item" style="width: 215px;">Height : <?php echo $row['height']; ?></div>
                </div>
                <div class="col-md-3">
                    <div class="item" style="width: 215px;">No of Children : <?php echo $row['noofChild']; ?></div>
                </div>
                <div class="col-md-3">
                    <div class="item" style="width: 215px;">Ages : <?php echo $row['childAges']; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item" style="width: 960px;">Father's Name : <?php echo $row['fatherName']; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item" style="width: 960px;">Mother's Name : <?php echo $row['motherName']; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="item" style="width: 960px;">Name of Spouse : <?php echo $row['spouseName']; ?></div>
                </div>
            </div>
            <br>
            <h4 align="center">WORK EXPERIENCE</h4>
            <table style="width:100%">
                <tr>
                    <th width="5%">SN</th>
                    <th width="15%">From</th>
                    <th width="15%">To</th>
                    <th width="45%">Place</th>
                    <th width="20%">Position</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td><?php echo $row['com1From']; ?></td>
                    <td><?php echo $row['com1To']; ?></td>
                    <td><?php echo $row['com1Place']; ?></td>
                    <td><?php echo $row['com1posi']; ?></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td><?php echo $row['com2From']; ?></td>
                    <td><?php echo $row['com2To']; ?></td>
                    <td><?php echo $row['com2Place']; ?></td>
                    <td><?php echo $row['com2posi']; ?></td>
                </tr>
                <tr>
                <td>03</td>
                    <td><?php echo $row['com3From']; ?></td>
                    <td><?php echo $row['com3To']; ?></td>
                    <td><?php echo $row['com3Place']; ?></td>
                    <td><?php echo $row['com3posi']; ?></td>
                </tr>
                <tr>
                <td>04</td>
                    <td><?php echo $row['com4From']; ?></td>
                    <td><?php echo $row['com4To']; ?></td>
                    <td><?php echo $row['com4Place']; ?></td>
                    <td><?php echo $row['com4posi']; ?></td>
                </tr>
            </table>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="item" style="width: 620px;">Last Work Place (if Aborad) : <?php echo $row['lstPlace']; ?></div>
                </div>
                <div class="col-md-4">
                    <div class="item" style="width: 300px;">Returned on : <?php echo $row['returned']; ?></div>
                </div>
            </div>
            <br>
            <h4 align="center">FOR OFFICE USE ONLY</h4>
            <div class="row">
                <div class="col-md-8">
                    <div class="item" style="width: 620px;">Attiude(A/B/C/D) Salary Expected Rs : </div>
                </div>
                <div class="col-md-4">
                    <div class="item" style="width: 300px;">Agreed Rs : </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="item" style="width: 465px;">Applicant : </div>
                </div>
                <div class="col-md-6">
                    <div class="item" style="width: 465px;">Interviewer : </div>
                </div>
            </div>
            <br>
            <h4><i>APPLICATION WILL NOT BE RETURNED FOR ANY REASON</i></h4>

        </div>


    </div>

<br><br><br>
        <input type="button" value="Print page" onclick="printpage()">


    </body>

</html>