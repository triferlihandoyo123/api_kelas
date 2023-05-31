<?php
include "../connection.php";

$id_user    = $_POST['id'];
$name       = $_POST['name'];
$username   = $_POST['username'];
$pass       = $_POST['pass'];
$role       = $_POST['role'];


$sql = "
        UPDATE user 
        SET 
        name = '$name'
        ,username = '$username'
        ,pass = '$pass'
        ,role = '$role'
        WHERE
        id_user = '$id_user'
        ";

$result = $connect->query($sql);
echo json_encode(array(
    "success" => $result
));
