<?php
function getRoutes($link){
    $sql= "SELECT * FROM routes";
    $result = mysqli_query($link, $sql);
    $routes = mysqli_fetch_all($result, 1);
    return $routes;
}

function getDates($link, $RouteId){
    $sql= "SELECT Date FROM Trips where `Route ID`=1";
    $result = mysqli_query($link, $sql);

    $dates = mysqli_fetch_all($result, 1);
    return $dates;
}
getDates($link, 1);
