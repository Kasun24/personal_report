<?php
include('config.php');
$upload_dir = 'uploads/';

if (isset($_GET['prefNo'])) {
    $id = $_GET['prefNo'];
    $sql = "select * from personal where prefNo = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $errorMsg = 'Could not Find Any Record';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User CV</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />

    <style>

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }
        

    </style>
    <script>
        function printpage() {
            window.print()
        }
    </script>
</head>

<body>
    <br><br>
    <div class="container" align="center">
        <h2>CURRICULUM VITAE</h2>
    </div>
    <br><br>
    <div class="container">
       
            <ol style="font-size: 20px;">
                <li style="line-height: 33px;">Surname/Nume : &nbsp;&nbsp;<?php echo $row['surName']; ?></li>
                <li style="line-height: 33px;">Name/Prenume : &nbsp;&nbsp;<?php echo $row['otherName']; ?></li>
                <li style="line-height: 33px;">Previos Surname/Nume Anterior: </li>
                <li style="line-height: 33px;">Place of Birth/Locul nasterii: SRI LANKA</li>
                <li style="line-height: 33px;">Locality/Localitatea: &nbsp;&nbsp;<?php echo $row['local1']; ?></li>
                <li style="line-height: 33px;">Date of Birth/Data Nasterii: &nbsp;&nbsp;<?php echo $row['dob']; ?></li>
            
                <li style="line-height: 33px;">Parents/Parinti: Father/Tata: &nbsp;&nbsp;<?php echo $row['fatherName']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                    Mother/Mama: &nbsp;&nbsp;<?php echo $row['motherName']; ?><br></li>
                <li style="line-height: 33px;">Citisenship/Cetatenia: &nbsp;&nbsp;<?php echo $row['country']; ?></li>
                <li style="line-height: 33px;">Nationality/Nationalitatea: &nbsp;&nbsp;<?php echo $row['country']; ?></li>
                <li style="line-height: 33px;">Border crossing document/Documentul de trecere a frontierei: &nbsp;&nbsp;PASSPORT(<?php echo $row['pasNo']; ?>)</li>
                <li style="line-height: 33px;">Home/Domiciliul:Country/Tara: &nbsp;&nbsp;<?php echo $row['country']; ?>&nbsp;&nbsp;&nbsp;&nbsp;Locality/Localitatea: &nbsp;&nbsp;<?php echo $row['local2']; ?></li>
                <li style="line-height: 33px;">Address/Adresa : &nbsp;&nbsp;<?php echo $row['addr']; ?></li>
                <li style="line-height: 33px;">Marital status/Stare civila: &nbsp;&nbsp;<?php echo $row['cStatus']; ?>&nbsp;&nbsp;&nbsp;&nbsp;Husband`s surname ans name/Numele si prenumele sotiei: &nbsp;&nbsp;<?php echo $row['surName']; ?></li>
                    Dependent children/Copii aflati in intretinere: &nbsp;&nbsp;<?php echo $row['noofChild']; ?>
                <li style="line-height: 33px;">Professional qualifications/Calificari profesionale : &nbsp;&nbsp;<?php echo $row['profQuli']; ?></li>
                <li style="line-height: 33px;">Professional route/Traseul Profesional (previous employers with the identification data of the same positions held/angajatori anteriori cu datele de identificare ale acestorasi functii detinute):</li>
                    <table style="width:100%">
                        <tr>
                            <th width="10%">Nr.Crt.<br>Sr.No.</th>
                            <th width="40%">Angajator/date de identificare<br>Employer/identification data</th>
                            <th width="25%">Perioada/Period</th>
                            <th width="25%">Functia/Function</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><?php echo $row['com1Place']; ?></td>
                            <td><?php echo $row['com1From']; ?> - <?php echo $row['com1To']; ?></td>
                            <td><?php echo $row['com1posi']; ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><?php echo $row['com2Place']; ?></td>
                            <td><?php echo $row['com2From']; ?> - <?php echo $row['com2To']; ?></td>
                            <td><?php echo $row['com2posi']; ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><?php echo $row['com3Place']; ?></td>
                            <td><?php echo $row['com3From']; ?> - <?php echo $row['com3To']; ?></td>
                            <td><?php echo $row['com3posi']; ?></td>
                        </tr>
                    </table>
                <li style="line-height: 33px;">Basic profession/Profesia de baza: &nbsp;&nbsp;<?php echo $row['post1']; ?></li>
                <li style="line-height: 33px;">Foreign languages/Limbi straine cunoscute: &nbsp;&nbsp;  ENGLISH</li>
                <li style="line-height: 33px;">Other mentions/Alte mentiuni:I declare on my own responsibility that I have no criminal record, that I am medically fit to work and that I have knowledge of English./ Declar pe propria raspundere ca nu am antecedente penale, ca sunt apt de munca din punct de vedere medical si ca detin cunostinte de limba engleza.</li>
            </ol>
            <br><br><br>
                <div class ="row">
                 <div class="column" style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date/Data : .......................................</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <div class="column" style="font-size: 20px;">Signature/Semnatu : .......................................</div>            
                </div>
            
    </div>


    <br><br><br><br><br><br><br><br><br>


    <input type="button" value="Print page" onclick="printpage()">


</body>

</html>