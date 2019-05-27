<?php
    $link = mysqli_connect ("localhost","Anastasia","123456", "tourists");
    $output='';
    $comment='';
    $period='';
    $price='';
    $worker='';
    $post=$_POST["RouteID"];
    $sql= "SELECT Date FROM Trips where `Route ID`='".$post."'";
    $result = mysqli_query($link, $sql);
    $output .='<option disabled>Выберите дату:</option>';
    while ($row= mysqli_fetch_array($result)){
        $output .= '<option>'.$row["Date"].'</option>';
    }

    $sql2= "SELECT * FROM routes where RouteID='".$post."'";
    $result2 = mysqli_query($link, $sql2);
    //$row2= mysqli_fetch_all($result2,1);
    while ($row2= mysqli_fetch_array($result2)){
            $comment .= $row2["Comment"];
            $period .='<h3>Длительность</h3><p>'. $row2["Period"].' дней </p>';
            $price .= '<h3>Цена</h3><p>'.$row2["Cost"].' рублей </p>';
            $worker .= '<h3>Представитель на маршруте</h3><p>'.$row2["Worker"].'</p>';
        }


    echo json_encode(
          array("ms" => $output,
          "period" => $period,
          "comm" => $comment,
          "worker" => $worker,
          "price" => $price));
?>
