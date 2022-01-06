<?php
  require_once('../config.php');
  $upload_dir = '../uploads/';

  if (isset($_POST['Submit'])) {
    $agr_sml = $_POST['agr_sml'];
	$agr_comp = $_POST['agr_comp'];
	$agr_country = $_POST['agr_country'];
	$agr_job = $_POST['agr_job'];
	$agr_sal = $_POST['agr_sal'];	
    $agr_allaw = $_POST['agr_allaw'];
	$agr_ot = $_POST['agr_ot'];
	$agr_food = $_POST['agr_food'];
	$agr_acco = $_POST['agr_acco'];
	$agr_signD = $_POST['agr_signD'];

    	$imgName = $_FILES['agr_agrDoc']['name'];
		$imgTmp = $_FILES['agr_agrDoc']['tmp_name'];
		$imgSize = $_FILES['agr_agrDoc']['size'];

    if(empty($agr_sml)){
			$errorMsg = 'Please input SML No';
		}else{

			//image
			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$agr_agrDoc = time().'_'.rand(1000,9999).'.'.$imgExt;

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$agr_agrDoc);

				}else{
					$errorMsg = 'Image too large';
				}
		}	

		if(!isset($errorMsg)){
			$sql = "insert into agreement(agr_sml, agr_comp, agr_country, agr_job, agr_sal, agr_allaw, agr_ot, agr_food, agr_acco, agr_signD, agr_agrDoc)
					values('".$agr_sml."', '".$agr_comp."','".$agr_country."', '".$agr_job."', '".$agr_sal."', '".$agr_allaw."', '".$agr_ot."', '".$agr_food."', '".$agr_acco."', '".$agr_signD."', '".$agr_agrDoc."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: ../tables/agreement.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
