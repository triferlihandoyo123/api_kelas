<?php 
    include "../connection.php";

    $sql = "SELECT * FROM panitia";

    $result = $connect->query($sql);
    
    if($result->num_rows > 0){
       $panitia = array();
       while($row = $result->fetch_assoc()){
        $panitia[] = $row;
       }

       echo json_encode(array(
        "success"=> true,
        "panitia"=>$panitia,
       ));
    }else{
    echo json_encode(array(
        "success" => false,
    ));
    }
?>

    
