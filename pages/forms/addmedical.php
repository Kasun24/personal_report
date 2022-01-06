<?php
  require_once('../config.php');
  $upload_dir = '../uploads/';

  if (isset($_POST['Submit'])) {
    $med_sml = $_POST['med_sml'];
	$med_issD = $_POST['med_issD'];
	$med_prob = $_POST['med_prob'];
	$med_pasGar = $_POST['med_pasGar'];
	$med_comGar = $_POST['med_comGar'];	
    $med_recD = $_POST['med_recD'];

    	$img1Name = $_FILES['med_pasAtt']['name'];
		$img1Tmp = $_FILES['med_pasAtt']['tmp_name'];
		$img1Size = $_FILES['med_pasAtt']['size'];

        $img2Name = $_FILES['med_comAtt']['name'];
		$img2Tmp = $_FILES['med_comAtt']['tmp_name'];
		$img2Size = $_FILES['med_comAtt']['size'];

        $img3Name = $_FILES['med_doc']['name'];
		$img3Tmp = $_FILES['med_doc']['tmp_name'];
		$img3Size = $_FILES['med_doc']['size'];

    if(empty($med_sml)){
			$errorMsg = 'Please input SML No';
		}else{

			//image
			$img1Ext = strtolower(pathinfo($img1Name, PATHINFO_EXTENSION));
            $img2Ext = strtolower(pathinfo($img2Name, PATHINFO_EXTENSION));
            $img3Ext = strtolower(pathinfo($img3Name, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$med_pasAtt = time().'_'.rand(1000,9999).'.'.$img1Ext;
            $med_comAtt = time().'_'.rand(1000,9999).'.'.$img2Ext;
            $med_doc = time().'_'.rand(1000,9999).'.'.$img3Ext;

				if($imgSize < 5000000){
					move_uploaded_file($img1Tmp ,$upload_dir.$med_pasAtt);
                    move_uploaded_file($img2Tmp ,$upload_dir.$med_comAtt);
                    move_uploaded_file($img3Tmp ,$upload_dir.$med_doc);

				}else{
					$errorMsg = 'Image too large';
				}
		}	

		if(!isset($errorMsg)){
			$sql = "insert into medical(med_sml, med_issD, med_prob, med_pasGar, med_pasAtt, med_comGar, med_comAtt, med_recD, med_doc)
					values('".$med_sml."', '".$med_issD."','".$med_prob."', '".$med_pasGar."', '".$med_pasAtt."', '".$med_comGar."', '".$med_comAtt."', '".$med_recD."', '".$med_doc."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: ../tables/medical.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
