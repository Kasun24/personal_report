<?php
  require_once('../config.php');
  $upload_dir = '../uploads/';

  if (isset($_POST['Submit'])) {
    $apSMLNo = $_POST['apSMLNo'];
	$apName = $_POST['apName'];
	$apDID = $_POST['apDID'];
	$apProb = $_POST['apProb'];
	$apRecD = $_POST['apRecD'];	

    	$imgName = $_FILES['apDoc']['name'];
		$imgTmp = $_FILES['apDoc']['tmp_name'];
		$imgSize = $_FILES['apDoc']['size'];

    if(empty($apSMLNo)){
			$errorMsg = 'Please input SML No';
		}else{

			//image
			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$apDoc = time().'_'.rand(1000,9999).'.'.$imgExt;

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$apDoc);

				}else{
					$errorMsg = 'Image too large';
				}
		}	

		if(!isset($errorMsg)){
			$sql = "insert into area_police(apSMLNo, apName, apDID, apProb, apRecD, apDoc)
					values('".$apSMLNo."', '".$apName."','".$apDID."', '".$apProb."', '".$apRecD."', '".$apDoc."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: ../tables/clients.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
