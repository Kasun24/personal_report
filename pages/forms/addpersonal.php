<?php
  require_once('../config.php');
  $upload_dir = '../uploads/';

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


    if(empty($prefNo)){
			$errorMsg = 'Please input Ref No';
		}else{

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

			$userPic1 = time().'_'.rand(1000,9999).'.'.$img1Ext;
			$userPic2 = time().'_'.rand(1000,9999).'.'.$img2Ext;
			$userPic3 = time().'_'.rand(1000,9999).'.'.$img3Ext;
			$userPic4 = time().'_'.rand(1000,9999).'.'.$img4Ext;
			$userPic5 = time().'_'.rand(1000,9999).'.'.$img5Ext;
			$userPic6 = time().'_'.rand(1000,9999).'.'.$img6Ext;
			$userPic7 = time().'_'.rand(1000,9999).'.'.$img7Ext;
			$userPic8 = time().'_'.rand(1000,9999).'.'.$img8Ext;
			$userPic9 = time().'_'.rand(1000,9999).'.'.$img9Ext;
			$userPic10 = time().'_'.rand(1000,9999).'.'.$img10Ext;
			$userPic11 = time().'_'.rand(1000,9999).'.'.$img11Ext;
			$userPic12 = time().'_'.rand(1000,9999).'.'.$img12Ext;
			$userPic13 = time().'_'.rand(1000,9999).'.'.$img13Ext;
			$userPic14 = time().'_'.rand(1000,9999).'.'.$img14Ext;


				if($img1Size < 5000000){
					move_uploaded_file($img1Tmp ,$upload_dir.$userPic1);
					move_uploaded_file($img2Tmp ,$upload_dir.$userPic2);
					move_uploaded_file($img3Tmp ,$upload_dir.$userPic3);
					move_uploaded_file($img4Tmp ,$upload_dir.$userPic4);
					move_uploaded_file($img5Tmp ,$upload_dir.$userPic5);
					move_uploaded_file($img6Tmp ,$upload_dir.$userPic6);
					move_uploaded_file($img7Tmp ,$upload_dir.$userPic7);
					move_uploaded_file($img8Tmp ,$upload_dir.$userPic8);
					move_uploaded_file($img9Tmp ,$upload_dir.$userPic9);
					move_uploaded_file($img10Tmp ,$upload_dir.$userPic10);
					move_uploaded_file($img11Tmp ,$upload_dir.$userPic11);
					move_uploaded_file($img12Tmp ,$upload_dir.$userPic12);
					move_uploaded_file($img13Tmp ,$upload_dir.$userPic13);
					move_uploaded_file($img14Tmp ,$upload_dir.$userPic14);


				}else{
					$errorMsg = 'Image too large';
				}

		}	


		if(!isset($errorMsg)){
			$sql = "insert into personal(prefNo, post1, subdirect, subcod, userImg, surName, otherName, gender, dob, age, country, nationality, religon, cStatus, addr, local1, local2, tel, mobile, pasImg1, pasImg2, pasNo, pasPob, pasDoi, pasDoe, pasPoi, eduQuli, profQuli, profQuliImg, languages, dlNo, dlImg1, dlImg2, dlDoi, dlType, complexion, height, weight, noofChild, childAges, fatherName, motherName, spouseName, com1From, com1To, com1Place, com1posi, com2From, com2To, com2Place, com2posi, com3From, com3To, com3Place, com3posi, com4From, com4To, com4Place, com4posi, lstPlace, returned, gut1Name, gut1Addr, gut1Cont, gut1Id, gut1Img1, gut1Img2, gut1gid1, gut1gid2, gut2Name, gut2Addr, gut2Cont, gut2Id, gut2Img1, gut2Img2, gut2pid1, gut2pid2)
					values('".$prefNo."', '".$post1."', '".$subdirect."', '".$subcod."', '".$userPic1."', '".$surName."', '".$otherName."', '".$gender."', '".$dob."', '".$age."', '".$country."', '".$nationality."', '".$religon."', '".$cStatus."', '".$addr."', '".$local1."', '".$local2."', '".$tel."', '".$mobile."', '".$userPic2."', '".$userPic3."', '".$pasNo."', '".$pasPob."', '".$pasDoi."', '".$pasDoe."', '".$pasPoi."', '".$eduQuli."', '".$profQuli."', '".$userPic4."', '".$languages."', '".$dlNo."', '".$userPic5."', '".$userPic6."', '".$dlDoi."', '".$dlType."', '".$complexion."', '".$height."', '".$weight."', '".$noofChild."', '".$childAges."', '".$fatherName."', '".$motherName."', '".$spouseName."', '".$com1From."', '".$com1To."', '".$com1Place."', '".$com1posi."', '".$com2From."', '".$com2To."', '".$com2Place."', '".$com2posi."', '".$com3From."', '".$com3To."', '".$com3Place."', '".$com3posi."', '".$com4From."', '".$com4To."', '".$com4Place."', '".$com4posi."', '".$lstPlace."', '".$returned."', '".$gut1Name."', '".$gut1Addr."', '".$gut1Cont."', '".$gut1Id."', '".$userPic7."', '".$userPic8."', '".$userPic9."', '".$userPic10."', '".$gut2Name."', '".$gut2Addr."', '".$gut2Cont."', '".$gut2Id."', '".$userPic11."', '".$userPic12."', '".$userPic13."', '".$userPic14."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: ../tables/clients.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
