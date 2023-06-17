<?php
include "connection.php";

$username = $_POST['username'];
$pass = md5($_POST['pass']);

$sql = "
    INSERT INTO user (username, pass)
    VALUES ('$username', '$pass')
";

if ($connect->query($sql) === TRUE) {
    $user = array(
        "username" => $username,
        "pass" => $pass
    );

    echo json_encode(array(
        "success" => true,
        "user" => $user
    ));
} else {
    echo json_encode(array(
        "success" => false
    ));
}

$connect->close();
?>
