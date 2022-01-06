<?php
  require_once('../config.php');
  $upload_dir = '../uploads/';

  if (isset($_POST['Submit'])) {
    $sub_sml = $_POST['sub_sml'];
	$sub_code = $_POST['sub_code'];
	$sub_name = $_POST['sub_name'];
	$sub_addr = $_POST['sub_addr'];
	$sub_cont1 = $_POST['sub_cont1'];
	$sub_cont2 = $_POST['sub_cont2'];
	$sub_id = $_POST['sub_id'];

    if(empty($sub_sml)){
			$errorMsg = 'Please input sub_sml	';
		}

		if(!isset($errorMsg)){
			$sql = "insert into sub_agent(sub_sml, sub_code, sub_name, sub_addr, sub_cont1, sub_cont2, sub_id)
					values('".$sub_sml."', '".$sub_code."','".$sub_name."', '".$sub_addr."', '".$sub_cont1."', '".$sub_cont2."', '".$sub_id."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: ../tables/subagent.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
