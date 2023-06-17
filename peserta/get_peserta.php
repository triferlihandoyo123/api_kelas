<?php 
    include "../connection.php";

    $sql = "SELECT * FROM peserta";

    $result = $connect->query($sql);
    
    if($result->num_rows > 0){
       $peserta = array();
       while($row = $result->fetch_assoc()){
        $peserta[] = $row;
       }

       echo json_encode(array(
        "success"=> true,
        "peserta"=>$peserta,
       ));
    }else{
    echo json_encode(array(
        "success" => false,
    ));
    }
?>

    
