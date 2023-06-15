<?php 
    include "../connection.php";

    $mhsNpm       = $_POST['mhsNpm'];
    $mhsNama   = $_POST['mhsNama'];
    $mhsAlamat       = $_POST['mhsAlamat'];
    $mhsFakultas       = $_POST['mhsFakultas'];
    $MhsProdi       = $_POST['MhsProdi'];
    $Pj_lomba       = $_POST['Pj_lomba'];
    
    $sql1 = "SELECT * FROM panitia WHERE mhsNpm = '$mhsNpm'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;

    if($check->num_rows > 0){
        $success = false;
        $reason = "npm sudah ada";
    }else{
        $sql2 = "
        INSERT INTO panitia SET 
            mhsNpm = '$mhsNpm',
            mhsNama = '$mhsNama',
            mhsAlamat = '$mhsAlamat',
            mhsFakultas = '$mhsFakultas',
            MhsProdi = '$MhsProdi',
	    Pj_lomba = '$Pj_lomba'
        ";
        
        $result = $connect->query($sql2);

        if(!$result){
            $success = false;
            $reason = "Gagal add Panitia";
        }
    }

    echo json_encode(array(
        "success" => $success,
        "reason" =>$reason,
    ));
