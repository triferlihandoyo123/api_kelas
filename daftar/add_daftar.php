<?php 
    include "../connection.php";
    $id      = $_POST['id'];
    $nama      = $_POST['nama'];
    $email   = $_POST['email'];
    $asal_sekolah       = $_POST['asal_sekolah'];
    $daftar_lomba       = $_POST['daftar_lomba'];
    $gender       = $_POST['gender'];

    
    $sql1 = "SELECT * FROM daftar_lomba WHERE id = '$id'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;

    if($check->num_rows > 0){
        $success = false;
        $reason = "id sudah ada";
    }else{
        $sql2 = "
        INSERT INTO panitia SET 
            id = '$id',
            nama = '$nama',
            email = '$email',
            asal_sekolah = '$asal_sekolah',
            daftar_lomba = '$daftar_lomba',
	    gender = '$gender'
        ";
        
        $result = $connect->query($sql2);

        if(!$result){
            $success = false;
            $reason = "Gagal add Peserta";
        }
    }

    echo json_encode(array(
        "success" => $success,
        "reason" =>$reason,
    ));
