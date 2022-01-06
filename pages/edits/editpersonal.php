<?php
require_once('../config.php');
$upload_dir = '../uploads/';

if (isset($_GET['prefNo'])) {
  $prefNo = $_GET['prefNo'];
  $sql = "select * from personal where prefNo=" . $prefNo;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    $errorMsg = 'Could not Find Any Record';
  }
}

if (isset($_POST['Submit'])) {
  $prefNo = $_POST['prefNo'];
  $post1 = $_POST['post1'];
  $subdirect = $_POST['subdirect'];
  $subcod = $_POST['subcod'];
  $surName = $_POST['surName'];
  $otherName = $_POST['otherName'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $age = $_POST['age'];
  $country = $_POST['country'];
  $nationality = $_POST['nationality'];
  $religon = $_POST['religon'];
  $cStatus = $_POST['cStatus'];
  $addr = $_POST['addr'];
  $local1 = $_POST['local1'];
	$local2 = $_POST['local2'];
  $tel = $_POST['tel'];
  $mobile = $_POST['mobile'];
  $pasNo = $_POST['pasNo'];
  $pasPob = $_POST['pasPob'];
  $pasDoi = $_POST['pasDoi'];
  $pasDoe = $_POST['pasDoe'];
  $pasPoi = $_POST['pasPoi'];
  $eduQuli = $_POST['eduQuli'];
  $profQuli = $_POST['profQuli'];
  $languages = $_POST['languages'];
  $dlNo = $_POST['dlNo'];
  $dlDoi = $_POST['dlDoi'];
  $dlType = $_POST['dlType'];
  $complexion = $_POST['complexion'];
	$height = str_replace("'", "\'",$height);
  $weight = $_POST['weight'];
  $noofChild = $_POST['noofChild'];
  $childAges = $_POST['childAges'];
  $fatherName = $_POST['fatherName'];
  $motherName = $_POST['motherName'];
  $spouseName = $_POST['spouseName'];
  $com1From = $_POST['com1From'];
  $com1To = $_POST['com1To'];
  $com1Place = $_POST['com1Place'];
  $com1posi = $_POST['com1posi'];
  $com2From = $_POST['com2From'];
  $com2To = $_POST['com2To'];
  $com2Place = $_POST['com2Place'];
  $com2posi = $_POST['com2posi'];
  $com3From = $_POST['com3From'];
  $com3To = $_POST['com3To'];
  $com3Place = $_POST['com3Place'];
  $com3posi = $_POST['com3posi'];
  $com4From = $_POST['com4From'];
  $com4To = $_POST['com4To'];
  $com4Place = $_POST['com4Place'];
  $com4posi = $_POST['com4posi'];
  $lstPlace = $_POST['lstPlace'];
  $returned = $_POST['returned'];
  $gut1Name = $_POST['gut1Name'];
  $gut1Addr = $_POST['gut1Addr'];
  $gut1Cont = $_POST['gut1Cont'];
  $gut1Id = $_POST['gut1Id'];
  $gut2Name = $_POST['gut2Name'];
  $gut2Addr = $_POST['gut2Addr'];
  $gut2Cont = $_POST['gut2Cont'];
  $gut2Id = $_POST['gut2Id'];

  $img1Name = $_FILES['image1']['name'];
  $img1Tmp = $_FILES['image1']['tmp_name'];
  $img1Size = $_FILES['image1']['size'];

  $img2Name = $_FILES['image2']['name'];
  $img2Tmp = $_FILES['image2']['tmp_name'];
  $img2Size = $_FILES['image2']['size'];

  $img3Name = $_FILES['image3']['name'];
  $img3Tmp = $_FILES['image3']['tmp_name'];
  $img3Size = $_FILES['image3']['size'];

  $img4Name = $_FILES['image4']['name'];
  $img4Tmp = $_FILES['image4']['tmp_name'];
  $img4Size = $_FILES['image4']['size'];

  $img5Name = $_FILES['image5']['name'];
  $img5Tmp = $_FILES['image5']['tmp_name'];
  $img5Size = $_FILES['image5']['size'];

  $img6Name = $_FILES['image6']['name'];
  $img6Tmp = $_FILES['image6']['tmp_name'];
  $img6Size = $_FILES['image6']['size'];

  $img7Name = $_FILES['image7']['name'];
  $img7Tmp = $_FILES['image7']['tmp_name'];
  $img7Size = $_FILES['image7']['size'];

  $img8Name = $_FILES['image8']['name'];
  $img8Tmp = $_FILES['image8']['tmp_name'];
  $img8Size = $_FILES['image8']['size'];

  $img9Name = $_FILES['image9']['name'];
  $img9Tmp = $_FILES['image9']['tmp_name'];
  $img9Size = $_FILES['image9']['size'];

  $img10Name = $_FILES['image10']['name'];
  $img10Tmp = $_FILES['image10']['tmp_name'];
  $img10Size = $_FILES['image10']['size'];

  $img11Name = $_FILES['image11']['name'];
  $img11Tmp = $_FILES['image11']['tmp_name'];
  $img11Size = $_FILES['image11']['size'];

  $img12Name = $_FILES['image12']['name'];
  $img12Tmp = $_FILES['image12']['tmp_name'];
  $img12Size = $_FILES['image12']['size'];

  $img13Name = $_FILES['image13']['name'];
  $img13Tmp = $_FILES['image13']['tmp_name'];
  $img13Size = $_FILES['image13']['size'];

  $img14Name = $_FILES['image14']['name'];
  $img14Tmp = $_FILES['image14']['tmp_name'];
  $img14Size = $_FILES['image14']['size'];


  if (empty($prefNo)) {
    $errorMsg = 'Please input Ref No';
  } else {

    //image
    $img1Ext = strtolower(pathinfo($img1Name, PATHINFO_EXTENSION));
    $img2Ext = strtolower(pathinfo($img2Name, PATHINFO_EXTENSION));
    $img3Ext = strtolower(pathinfo($img3Name, PATHINFO_EXTENSION));
    $img4Ext = strtolower(pathinfo($img4Name, PATHINFO_EXTENSION));
    $img5Ext = strtolower(pathinfo($img5Name, PATHINFO_EXTENSION));
    $img6Ext = strtolower(pathinfo($img6Name, PATHINFO_EXTENSION));
    $img7Ext = strtolower(pathinfo($img7Name, PATHINFO_EXTENSION));
    $img8Ext = strtolower(pathinfo($img8Name, PATHINFO_EXTENSION));
    $img9Ext = strtolower(pathinfo($img9Name, PATHINFO_EXTENSION));
    $img10Ext = strtolower(pathinfo($img10Name, PATHINFO_EXTENSION));
    $img11Ext = strtolower(pathinfo($img11Name, PATHINFO_EXTENSION));
    $img12Ext = strtolower(pathinfo($img12Name, PATHINFO_EXTENSION));
    $img13Ext = strtolower(pathinfo($img13Name, PATHINFO_EXTENSION));
    $img14Ext = strtolower(pathinfo($img14Name, PATHINFO_EXTENSION));


    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

    $userPic1 = time() . '_' . rand(1000, 9999) . '.' . $img1Ext;
    $userPic2 = time() . '_' . rand(1000, 9999) . '.' . $img2Ext;
    $userPic3 = time() . '_' . rand(1000, 9999) . '.' . $img3Ext;
    $userPic4 = time() . '_' . rand(1000, 9999) . '.' . $img4Ext;
    $userPic5 = time() . '_' . rand(1000, 9999) . '.' . $img5Ext;
    $userPic6 = time() . '_' . rand(1000, 9999) . '.' . $img6Ext;
    $userPic7 = time() . '_' . rand(1000, 9999) . '.' . $img7Ext;
    $userPic8 = time() . '_' . rand(1000, 9999) . '.' . $img8Ext;
    $userPic9 = time() . '_' . rand(1000, 9999) . '.' . $img9Ext;
    $userPic10 = time() . '_' . rand(1000, 9999) . '.' . $img10Ext;
    $userPic11 = time() . '_' . rand(1000, 9999) . '.' . $img11Ext;
    $userPic12 = time() . '_' . rand(1000, 9999) . '.' . $img12Ext;
    $userPic13 = time() . '_' . rand(1000, 9999) . '.' . $img13Ext;
    $userPic14 = time() . '_' . rand(1000, 9999) . '.' . $img14Ext;


    if ($img1Size < 5000000) {
      move_uploaded_file($img1Tmp, $upload_dir . $userPic1);
      move_uploaded_file($img2Tmp, $upload_dir . $userPic2);
      move_uploaded_file($img3Tmp, $upload_dir . $userPic3);
      move_uploaded_file($img4Tmp, $upload_dir . $userPic4);
      move_uploaded_file($img5Tmp, $upload_dir . $userPic5);
      move_uploaded_file($img6Tmp, $upload_dir . $userPic6);
      move_uploaded_file($img7Tmp, $upload_dir . $userPic7);
      move_uploaded_file($img8Tmp, $upload_dir . $userPic8);
      move_uploaded_file($img9Tmp, $upload_dir . $userPic9);
      move_uploaded_file($img10Tmp, $upload_dir . $userPic10);
      move_uploaded_file($img11Tmp, $upload_dir . $userPic11);
      move_uploaded_file($img12Tmp, $upload_dir . $userPic12);
      move_uploaded_file($img13Tmp, $upload_dir . $userPic13);
      move_uploaded_file($img14Tmp, $upload_dir . $userPic14);
    } else {
      $errorMsg = 'Image too large';
    }
  }

  if (!isset($errorMsg)) {
    $sql = "update personal
									set post1 = '" . $post1 . "',
                  subdirect = '" . $subdirect . "',
                  subcod = '" . $subcod . "',
                  surName = '" . $surName . "',
                  otherName = '" . $otherName . "',
                  gender = '" . $gender . "',
                  dob = '" . $dob . "',
                  age = '" . $age . "',
                  country = '" . $country . "',
                  nationality = '" . $nationality . "',
                  religon = '" . $religon . "',
                  cStatus = '" . $cStatus . "',
                  addr = '" . $addr . "',
                  local1 = '" . $local1 . "',
                  local2 = '" . $local2 . "',
                  tel = '" . $tel . "',
                  mobile = '" . $mobile . "',
                  pasNo = '" . $pasNo . "',
                  pasPob = '" . $pasPob . "',
                  pasDoi = '" . $pasDoi . "',
                  pasDoe = '" . $pasDoe . "',
                  pasPoi = '" . $pasPoi . "',
                  eduQuli = '" . $eduQuli . "',
                  profQuli = '" . $profQuli . "',
                  languages = '" . $languages . "',
                  dlNo = '" . $dlNo . "',
                  dlDoi = '" . $dlDoi . "',
                  dlType = '" . $dlType . "',
                  complexion = '" . $complexion . "',
                  height = '" . $height . "',
                  weight = '" . $weight . "',
                  noofChild = '" . $noofChild . "',
                  childAges = '" . $childAges . "',
                  fatherName = '" . $fatherName . "',
                  motherName = '" . $motherName . "',
                  spouseName = '" . $spouseName . "',
                  com1From = '" . $com1From . "',
                  com1To = '" . $com1To . "',
                  com1Place = '" . $com1Place . "',
                  com1posi = '" . $com1posi . "',
                  com2From = '" . $com2From . "',
                  com2To = '" . $com2To . "',
                  com2Place = '" . $com2Place . "',
                  com2posi = '" . $com2posi . "',
                  com3From = '" . $com3From . "',
                  com3To = '" . $com3To . "',
                  com3Place = '" . $com3Place . "',
                  com3posi = '" . $com3posi . "',
                  com4From = '" . $com4From . "',
                  com4To = '" . $com4To . "',
                  com4Place = '" . $com4Place . "',
                  com4posi = '" . $com4posi . "',
                  lstPlace = '" . $lstPlace . "',
                  returned = '" . $returned . "',
                  gut1Name = '" . $gut1Name . "',
                  gut1Addr = '" . $gut1Addr . "',
                  gut1Cont = '" . $gut1Cont . "',
                  gut1Id = '" . $gut1Id . "',
                  gut2Name = '" . $gut2Name . "',
                  gut2Addr = '" . $gut2Addr . "',
                  gut2Cont = '" . $gut2Cont . "',
                  gut2Id = '" . $gut2Id . "'    
					where prefNo=" . $prefNo;
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $successMsg = 'New record updated successfully';
      header('Location:../tables/clients.php');
    } else {
      $errorMsg = 'Error ' . mysqli_error($conn);
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
                <li class="nav-item"><a class="nav-link" href="../tables/clients.php">Personal Info</a></li>
                <li class="nav-item"><a class="nav-link" href="../tables/police1.php">Area Police<br>Report Info</a></li>
                <li class="nav-item"><a class="nav-link" href="../tables/police2.php">Head Quarters Police<br>Report Info</a></li>
                <li class="nav-item"><a class="nav-link" href="../tables/agreement.php">Agreement Details</a></li>
                <li class="nav-item"><a class="nav-link" href="../tables/medical.php">Medical Details</a></li>
                <li class="nav-item"><a class="nav-link" href="../tables/work_permite.php">Work Premite<br>Details</a></li>
                <li class="nav-item"><a class="nav-link" href="../tables/visa.php">Visa Details</a></li>
                <li class="nav-item"><a class="nav-link" href="../tables/subagent.php">Sub Agent<br>Details</a></li>
              </ul>
            </div>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-description">Edit Form Details</h4>
                  <form class="form-sample" action="" method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">SML No</label>
                          <div class="col-sm-8">
                            <input type="text" value="<?php echo $row['prefNo'] ?>" name="prefNo" class="form-control"  />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Post</label>
                          <div class="col-sm-8">
                            <input type="text" value="<?php echo $row['post1'] ?>" name="post1" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Sub Agent/Direct</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['subdirect']; ?>" name="subdirect"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">If Sub, Sub Code</label>
                          <div class="col-sm-8">
                            <input type="text" value="<?php echo $row['subcod'] ?>" name="subcod" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h3 class="card-title">
                      Personal Details
                    </h3>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Image Of User</label>
                          <div class="col-sm-8">
                          <img src="<?php echo $upload_dir . $row['userImg'] ?>" width="100">
                            <input type="file" name="image1" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Surname</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['surName'] ?>" name="surName" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Other Names</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['otherName'] ?>" name="otherName" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $row['gender'] ?>" name="gender"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" value="<?php echo $row['dob'] ?>" name="dob" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Age</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['age'] ?>" name="age" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['country'] ?>" name="country" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nationality</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['nationality'] ?>" name="nationality" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Religion</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['religon'] ?>" name="religon" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Civil Status</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $row['cStatus'] ?>" name="cStatus"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['addr'] ?>" name="addr" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Locality 1</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['local1'] ?>" name="local1" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Locality 2</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['local2'] ?>" name="local2" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tel(Home)</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['tel'] ?>" name="tel" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['mobile'] ?>" name="mobile" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <h3 class="card-title">
                      Passport Details
                    </h3>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Passport Image Font Side</label>
                          <div class="col-sm-8">
                          <img src="<?php echo $upload_dir . $row['pasImg1'] ?>" width="100">
                            <input type="file" name="image2" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Passport Image Back Side</label>
                          <div class="col-sm-8">
                          <img src="<?php echo $upload_dir . $row['pasImg2'] ?>" width="100">
                            <input type="file" name="image3" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Passport No</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['pasNo'] ?>" name="pasNo" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place Of Birth</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['pasPob'] ?>" name="pasPob" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date Of Issue</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['pasDoi'] ?>" name="pasDoi" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date Of Expiry</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['pasDoe'] ?>" name="pasDoe" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place Of Issue</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['pasPoi'] ?>" name="pasPoi" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h3 class="card-title">
                      Qulification
                    </h3>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Educational Qulification</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $row['eduQuli'] ?>" name="eduQuli" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Professional Qulification</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $row['profQuli'] ?>" name="profQuli" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Professional Qulification Upload</label>
                          <div class="col-sm-8">
                          <img src="<?php echo $upload_dir . $row['profQuliImg'] ?>" width="100">
                            <input type="file" name="image4" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Languages</label>
                          <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['languages'] ?>" name="languages" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Driving Licence No</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['dlNo'] ?>" name="dlNo" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Driving Licence Font Side</label>
                          <div class="col-sm-8">
                          <img src="<?php echo $upload_dir . $row['dlImg1'] ?>" width="100">
                            <input type="file" name="image5" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Driving Licence Back Side</label>
                          <div class="col-sm-8">
                          <img src="<?php echo $upload_dir . $row['dlImg2'] ?>" width="100">
                            <input type="file" name="image6" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date Of Issue</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['dlDoi'] ?>" name="dlDoi" class="form-control"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Licence type</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['dlType'] ?>" name="dlType" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h3 class="card-title">
                      Other Details
                    </h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Complexion</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['complexion'] ?>" name="complexion" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Height</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['height'] ?>" name="height" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Weight</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['weight'] ?>" name="weight" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No of Children</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['noofChild'] ?>" name="noofChild" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ages</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['childAges'] ?>" name="childAges" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Father's Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $row['fatherName'] ?>" name="fatherName" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Mother's Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $row['motherName'] ?>" name="motherName" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Name of Spouse</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $row['spouseName'] ?>" name="spouseName" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h3 class="card-title">
                      Work Experience
                    </h3>
                    <h4 class="card-description">
                      Company 1
                    </h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">From (Year)</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com1From'] ?>" name="com1From" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">To (Year)</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com1To'] ?>" name="com1To" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com1Place'] ?>" name="com1Place" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Position</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com1posi'] ?>" name="com1posi" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4 class="card-description">
                      Company 2
                    </h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">From (Year)</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com2From'] ?>" name="com2From" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">To (Year)</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com2To'] ?>" name="com2To" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com2Place'] ?>" name="com2Place" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Position</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com2posi'] ?>" name="com2posi" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4 class="card-description">
                      Company 3
                    </h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">From (Year)</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com3From'] ?>" name="com3From" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">To (Year)</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com3To'] ?>" name="com3To" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com3Place'] ?>" name="com3Place" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Position</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com3posi'] ?>" name="com3posi" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4 class="card-description">
                      Company 4
                    </h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">From (Year)</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com4From'] ?>" name="com4From" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">To (Year)</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com4To'] ?>" name="com4To" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com4Place'] ?>" name="com4Place" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Position</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?php echo $row['com4posi'] ?>" name="com4posi" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Last Work Place (if Aborad)</label>
                          <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['lstPlace'] ?>" name="lstPlace" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Last Work Place Returned On</label>
                          <div class="col-sm-10">
                            <input type="text" value="<?php echo $row['returned'] ?>" name="returned" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h3 class="card-title">
                      Guarantor Details
                    </h3>
                    <div class="row">
                      <div class="col-md-6">
                        <h4 class="card-description text-center">Guarantor 1 (Government Sector)</h4>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" value="<?php echo $row['gut1Name'] ?>" name="gut1Name" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Address</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $row['gut1Addr'] ?>" name="gut1Addr" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Contact No</label>
                              <div class="col-sm-10">
                                <input type="text" value="<?php echo $row['gut1Cont'] ?>" name="gut1Cont" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ID No</label>
                              <div class="col-sm-10">
                                <input type="text" value="<?php echo $row['gut1Id'] ?>" name="gut1Id" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Id Card Font Side</label>
                              <div class="col-sm-8">
                              <img src="<?php echo $upload_dir . $row['gut1Img1'] ?>" width="100">
                                <input type="file" name="image7" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Id Card Back Side</label>
                              <div class="col-sm-8">
                              <img src="<?php echo $upload_dir . $row['gut1Img2'] ?>" width="100">
                                <input type="file" name="image8" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <h4>Government Officer Id Card</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label"> Font Side</label>
                              <div class="col-sm-8">
                              <img src="<?php echo $upload_dir . $row['gut1gid1'] ?>" width="100">
                                <input type="file" name="image9" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Back Side</label>
                              <div class="col-sm-8">
                              <img src="<?php echo $upload_dir . $row['gut1gid2'] ?>" width="100">
                                <input type="file" name="image10" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h4 class="card-description text-center">Guarantor 2 (Private Sector)</h4>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" value="<?php echo $row['gut2Name'] ?>" name="gut2Name" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Address</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $row['gut2Addr'] ?>" name="gut2Addr" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Contact No</label>
                              <div class="col-sm-10">
                                <input type="text" value="<?php echo $row['gut2Cont'] ?>" name="gut2Cont" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ID No</label>
                              <div class="col-sm-10">
                                <input type="text" value="<?php echo $row['gut2Id'] ?>" name="gut2Id" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Id Card Font Side</label>
                              <div class="col-sm-8">
                              <img src="<?php echo $upload_dir . $row['gut2Img1'] ?>" width="100">
                                <input type="file" name="image11" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Id Card Back Side</label>
                              <div class="col-sm-8">
                              <img src="<?php echo $upload_dir . $row['gut2Img2'] ?>" width="100">
                                <input type="file" name="image12" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <h4>Private Officer Id Card</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Font Side</label>
                              <div class="col-sm-8">
                              <img src="<?php echo $upload_dir . $row['gut2pid1'] ?>" width="100">
                                <input type="file" name="image13" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Back Side</label>
                              <div class="col-sm-8">
                              <img src="<?php echo $upload_dir . $row['gut2pid2'] ?>" width="100">
                                <input type="file" name="image14" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Update">
                  </form>
                </div>
              </div>
            </div>
          </div>
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