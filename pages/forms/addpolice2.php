<?php
  require_once('../config.php');
  $upload_dir = '../uploads/';

  if (isset($_POST['Submit'])) {
    $hqSMLNo = $_POST['hqSMLNo'];
	$hqApplyD = $_POST['hqApplyD'];
	$hqRefNo = $_POST['hqRefNo'];
	$hqProb = $_POST['hqProb'];
	$hqRecD = $_POST['hqRecD'];

    	$imgName = $_FILES['hqDoc']['name'];
		$imgTmp = $_FILES['hqDoc']['tmp_name'];
		$imgSize = $_FILES['hqDoc']['size'];

    if(empty($hqSMLNo)){
			$errorMsg = 'Please input SML No';
		}else{

			//image
			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$hqDoc = time().'_'.rand(1000,9999).'.'.$imgExt;

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$hqDoc);

				}else{
					$errorMsg = 'Image too large';
				}
		}	

		if(!isset($errorMsg)){
			$sql = "insert into head_police(hqSMLNo, hqApplyD, hqRefNo, hqProb, hqRecD, hqDoc)
					values('".$hqSMLNo."', '".$hqApplyD."', '".$hqRefNo."', '".$hqProb."', '".$hqRecD."', '".$hqDoc."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: ../../police2.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
