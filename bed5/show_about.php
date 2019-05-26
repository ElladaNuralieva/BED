<?php
    $link = mysqli_connect ("localhost","Anastasia","123456", "tourists");
    $names='';
    $comment='';
    $cost='';
    $period='';
    $country='';
        
    $sql= "SELECT * FROM routes";
    $result = mysqli_query($link, $sql);
    while ($row= mysqli_fetch_array($result)){
        $output.=
        '<div class="show_about_elem"> 
            <div class="show_about_elem name"><h3>'
                .$row["RouteName"].
            '</h3></div>
            <div class="show_about_elem cost"> Цена:' .$row["Cost"]. ' Длительность:' .$row["Period"]. 
            ' дня</div>
            
            <div class="show_about_elem desc">'
                .$row["Comment"].
            '</div>
        </div>'

        ;
            
        }


    echo json_encode(
          array(
           "output"=> $output,
            
          ));
?>
