<?php
include "../connection.php";

$nama       = $_POST['nama'];
$email   = $_POST['email'];
$asal_sekolah       = $_POST['asal_sekolah'];
$daftar_lomba       = $_POST['daftar_lomba'];
$gender       = $_POST['gender'];


$sql = "
        UPDATE peserta
        SET 
            email = '$email',
            asal_sekolah = '$asal_sekolah',
            daftar_lomba = '$daftar_lomba',
            gender = '$gender',
        WHERE
        nama = '$nama',
        ";

$result = $connect->query($sql);
echo json_encode(array(
    "success" => $result
));
