<?php 
    include "connection.php";

    $username = $_POST['username'];
    $pass = md5($_POST['pass']);

    $sql = "
        SELECT 
            *
        FROM 
            user
        WHERE
            user.username = '$username' AND user.pass = '$pass'
    ";

    $result = $connect->query($sql);

    if($result->num_rows > 0){
        $user = array();

        while($row = $result->fetch_assoc()){
            $user[] = $row;
        }

        echo json_encode(array(
            "success"=> true,
            "user"=>$user[0],
        ));
    }else{
        echo json_encode(array(
            "success"=>false
        ));
    }

?>