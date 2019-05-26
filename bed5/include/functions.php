<?php
function getRoutes($link){
    $sql= "SELECT * FROM routes";
    $output='';
    $result = mysqli_query($link, $sql);
    //$routes = mysqli_fetch_all($result, 1);
    while ($row= mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["RouteID"].'">'.$row["RouteName"].'</option>';
    }
    return $output;
}


function getDates($link, $RouteId){
    $sql= "SELECT Date FROM Trips where `Route ID`=1";
    $result = mysqli_query($link, $sql);
    $dates = mysqli_fetch_all($result, 1);
    return $dates;
}
