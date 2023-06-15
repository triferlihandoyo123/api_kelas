<?php
include "../connection.php";

$mhsNpm = $_POST['mhsNpm'];

$sql = "
        DELETE FROM daftar_lomba
        WHERE
        id = '$id'
        ";
$result = $connect->query($sql);

echo json_encode(array(
    "success" => $result
));

?>