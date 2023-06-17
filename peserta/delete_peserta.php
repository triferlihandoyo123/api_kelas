<?php
include "../connection.php";

$nama = $_POST['nama'];

$sql = "
        DELETE FROM peserta
        WHERE
        nama = '$nama'
        ";
$result = $connect->query($sql);

echo json_encode(array(
    "success" => $result
));

?>