<?php
  require_once('../config.php');
  $upload_dir = '../uploads/';

  if (isset($_POST['Submit'])) {
    $vis_sml = $_POST['vis_sml'];
	$vis_issD = $_POST['vis_issD'];
	$vis_type = $_POST['vis_type'];
	$vis_cntr = $_POST['vis_cntr'];
	$vis_exD = $_POST['vis_exD'];	

    	$imgName = $_FILES['vis_doc']['name'];
		$imgTmp = $_FILES['vis_doc']['tmp_name'];
		$imgSize = $_FILES['vis_doc']['size'];

    if(empty($vis_sml)){
			$errorMsg = 'Please input SML No';
		}else{

			//image
			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$vis_doc = time().'_'.rand(1000,9999).'.'.$imgExt;

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$vis_doc);

				}else{
					$errorMsg = 'Image too large';
				}
		}	

		if(!isset($errorMsg)){
			$sql = "insert into visa(vis_sml, vis_issD, vis_type, vis_cntr, vis_exD, vis_doc)
					values('".$vis_sml."', '".$vis_issD."','".$vis_type."', '".$vis_cntr."', '".$vis_exD."', '".$vis_doc."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: ../tables/visa.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
