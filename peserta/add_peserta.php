<?php 
    include "../connection.php";

    $nama       = $_POST['nama'];
    $email   = $_POST['email'];
    $asal_sekolah       = $_POST['asal_sekolah'];
    $daftar_lomba       = $_POST['daftar_lomba'];
    $gender       = $_POST['gender'];
    
    $sql1 = "SELECT * FROM peserta WHERE email = '$email'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;

    if($check->num_rows > 0){
        $success = false;
        $reason = "Email sudah ada";
    }else{
        $sql2 = "
        INSERT INTO peserta (id_peserta, nama, email, asal_sekolah, daftar_lomba, gender)
        VALUES (NULL, '$nama', '$email', '$asal_sekolah', '$daftar_lomba', '$gender')
        ";
        
        $result = $connect->query($sql2);
    
        if(!$result){
            $success = false;
            $reason = "Gagal menambahkan peserta";
        }
    }
    

    echo json_encode(array(
        "success" => $success,
        "reason" =>$reason,
    ));
?>