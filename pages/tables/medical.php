<?php
include('../config.php');
$upload_dir = '../uploads/';

if (isset($_GET['delete'])) {
    $med_sml = $_GET['delete'];
    $sql = "select * from medical where med_sml = " . $med_sml;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $med_pasAtt = $row['med_pasAtt'];
        unlink($upload_dir . $med_pasAtt);
        $med_comAtt = $row['med_comAtt'];
        unlink($upload_dir . $med_comAtt);
        $med_doc = $row['med_doc'];
        unlink($upload_dir . $med_doc);

        $sql = "delete from medical where med_sml=" . $med_sml;
        if (mysqli_query($conn, $sql)) {
            header('location:medical.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Summith Lanka (PVT) LTD</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />

</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="../../homepage.php"><img src="../../images/logo2.jpg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="../../homepage.php"><img src="../../images/logo.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <!-- <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="../../images/samples/logo.png" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li> -->
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->

            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../homepage.php">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Forms</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="../forms/personalform.php">Personal Detail</a></li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link">Police Report</a></li>
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="../forms/police1.php">Area Police Report</a></li>
                                    <li class="list-group-item"><a href="../forms/police2.php">Head Quarters Police Report</a></li>
                                </ul>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="../forms/agreement.php">Agreement Details</a></li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="../forms/medical.php">Medical Details</a></li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="../forms/work_permite.php">Work Permite<br>Details</a></li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="../forms/visa.php">Visa Details</a></li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="../forms/subagent.php">Sub Agent<br>Details</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Tables</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="clients.php">Personal Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="police1.php">Area Police<br>Report Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="police2.php">Head Quarters Police<br>Report Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="agreement.php">Agreement Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="medical.php">Medical Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="work_permite.php">Work Premite<br>Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="visa.php">Visa Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="subagent.php">Sub Agent<br>Details</a></li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">

                <div class="content-wrapper">
                    <h4 align="center">Medical Details Table</h4>
                    <br>
                    <table id="example" class="table table-fixed table-bordered table-responsive table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th width="5%" style="padding:10px">SML No</th>
                                <th width="15%" style="padding:10px">Medical<br> Issued Date</th>
                                <th width="10%" style="padding:10px">Medical<br>Problem</th>
                                <th width="10%" style="padding:10px">Passenger<br>Guarantee</th>
                                <th width="5%" style="padding:10px">Passenger<br>Attachment</th>
                                <th width="5%" style="padding:10px">Company<br>Guarantee</th>
                                <th width="5%" style="padding:10px">Company<br>Attachment</th>
                                <th width="15%" style="padding:10px">Medical<br>Recieved Date</th>
                                <th width="15%" style="padding:10px">Medical<Br>Document</th>
                                <th width="5%" style="padding:10px">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $sql = "select * from medical";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td width="5%" style="padding:10px"><?php echo $row['med_sml'] ?></td>
                                        <td width="15%" style="padding:10px"><?php echo $row['med_issD'] ?></td>
                                        <td width="10%" style="padding:10px"><?php echo $row['med_prob'] ?></td>
                                        <td width="10%" style="padding:10px"><?php echo $row['med_pasGar'] ?></td> 
                                        <td width="5%"><a href="<?php echo $upload_dir . $row['med_pasAtt'] ?>"><img src="<?php echo $upload_dir . $row['med_pasAtt'] ?>" style="border-radius: 0%;"></a></td>
                                        <td width="5%" style="padding:10px"><?php echo $row['med_comGar'] ?></td>
                                        <td width="5%"><a href="<?php echo $upload_dir . $row['med_comAtt'] ?>"><img src="<?php echo $upload_dir . $row['med_comAtt'] ?>" style="border-radius: 0%;"></a></td>
                                        <td width="15%" style="padding:10px"><?php echo $row['med_recD'] ?></td> 
                                        <td width="5%"><a href="<?php echo $upload_dir . $row['med_doc'] ?>"><img src="<?php echo $upload_dir . $row['med_doc'] ?>" style="border-radius: 0%;"></a></td>
                                        <td width="5%" style="padding:10px">                                  
                                            <a href="medical.php?delete=<?php echo $row['med_sml'] ?>" class="btn btn-danger" style="padding: 5px 10px;" onclick="return confirm('Are you sure to delete this record?')">Delete</a><br>
                                            <a href="../edits/editmedical.php?med_sml=<?php echo $row['med_sml'] ?>" style="padding: 5px 10px;"   class="btn btn-warning">Edit</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. <a href="http://www.globalems.com.au/" target="_blank">Global EMS</a>. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
    <!-- End custom js for this page-->
</body>

</html>