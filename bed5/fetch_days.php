<?php
    $link = mysqli_connect ("localhost","Anastasia","123456", "tourists");
    $output='';
    $sql= "SELECT Date FROM Trips where `Route ID`='".$_POST["RouteID"]."'";
    $result = mysqli_query($link, $sql);
    $output .='<option disabled>Выберите дату:</option>';
    while ($row= mysqli_fetch_array($result)){
        $output .= '<option>'.$row["Date"].'</option>';
    }
    echo $output;
?>
