<?php
include "../connection.php";

    $mhsNpm       = $_POST['mhsNpm'];
    $mhsNama   = $_POST['mhsNama'];
    $mhsAlamat       = $_POST['mhsAlamat'];
    $mhsFakultas       = $_POST['mhsFakultas'];
    $MhsProdi       = $_POST['MhsProdi'];
    $Pj_lomba       = $_POST['Pj_lomba'];


$sql = "
        UPDATE panitia
        SET 
        mhsNama = '$mhsNama'
        ,mhsAlamat = '$mhsAlamat'
        ,mhsFakultas = '$mhsFakultas'
        ,MhsProdi = '$MhsProdi',
        Pj_lomba = '$Pj_lomba'
        WHERE
        mhsNpm = '$mhsNpm'
        ";

$result = $connect->query($sql);
echo json_encode(array(
    "success" => $result
));
