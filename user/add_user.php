<?php 
    include "../connection.php";

    $name       = $_POST['name'];
    $username   = $_POST['username'];
    $pass       = md5($_POST['pass']);
    $role       = $_POST['role'];
    
    $sql1 = "SELECT * FROM user WHERE username = '$username'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;

    if($check->num_rows > 0){
        $success = false;
        $reason = "username sudah ada";
    }else{
        $sql2 = "
        INSERT INTO user SET 
            id_user = NULL,
            name = '$name',
            username = '$username',
            pass = '$pass',
            role = '$role'
        ";
        
        $result = $connect->query($sql2);

        if(!$result){
            $success = false;
            $reason = "Gagal add user";
        }
    }

    echo json_encode(array(
        "success" => $success,
        "reason" =>$reason,
    ));
