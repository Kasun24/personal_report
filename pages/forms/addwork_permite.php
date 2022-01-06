<?php
  require_once('../config.php');
  $upload_dir = '../uploads/';

  if (isset($_POST['Submit'])) {
    $wor_sml = $_POST['wor_sml'];
	$wor_recD = $_POST['wor_recD'];
	$wor_perNo = $_POST['wor_perNo'];
	$wor_type = $_POST['wor_type'];
	$wor_valD = $_POST['wor_valD'];

    if(empty($wor_sml)){
			$errorMsg = 'Please input SML No';
		}

		if(!isset($errorMsg)){
			$sql = "insert into work_permite(wor_sml, wor_recD, wor_perNo, wor_type, wor_valD)
					values('".$wor_sml."', '".$wor_recD."','".$wor_perNo."', '".$wor_type."', '".$wor_valD."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: ../tables/work_permite.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
