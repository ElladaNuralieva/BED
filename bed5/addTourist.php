<?php
$link = mysqli_connect ("localhost","Anastasia","123456", "tourists");
echo 'ffff';
if (isset($_POST['name']) and isset($_POST['lastname']) and isset($_POST['middlename']) and isset($_POST['bdate'])and isset($_POST['tel'])
and isset($_POST['docType'])and isset($_POST['seria'])and isset($_POST['number'])and isset($_POST['given'])and isset($_POST['giveDate']))
{
echo 'ffff';

        $name = ($_POST['name']);
        $lastname = ($_POST['lastname']);
        $middlename = ($_POST['middlename']);
        $bdate = ($_POST['bdate']);
        $tel = ($_POST['tel']);
        $docType = ($_POST['docType']);
        $seria = ($_POST['seria']);
        $number = ($_POST['number']);
        $given = ($_POST['given']);
        $giveData = ($_POST['giveDate']);
        $hasPass = ($_POST['hasPass']);


        foreach( $name as $key => $n ){

        /*if(get_magic_quotes_gpc()==1)
        {
         $name = stripslashes(trim($_POST['name']));
         $lastname = stripslashes(trim($_POST['lastname']));
         $middlename = stripslashes(trim($_POST['middlename']));
         $bdate = stripslashes(trim($_POST['bdate']));
         $tel = stripslashes(trim($_POST['tel']));
         $docType = stripslashes(trim($_POST['docType']));
         $seria = stripslashes(trim($_POST['seria']));
         $number = stripslashes(trim($_POST['number']));
         $given = stripslashes(trim($_POST['given']));
         $giveData = stripslashes(trim($_POST['giveDate']));
         $hasPass = stripslashes(trim($_POST['hasPass']));
        }
        else
        {
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $middlename = trim($_POST['middlename']);
        $bdate = trim($_POST['bdate']);
        $tel = trim($_POST['tel']);
        $docType = trim($_POST['docType']);
        $seria = trim($_POST['seria']);
        $number = trim($_POST['number']);
        $given = trim($_POST['given']);
        $giveData = trim($_POST['giveDate']);
        $hasPass = trim($_POST['hasPass']);
        }*/
        //echo $email;

         $name1 = mysqli_real_escape_string($link, $name[$key]);
         $lastname1 = mysqli_real_escape_string($link, $lastname[$key]);
         $middlename1 = mysqli_real_escape_string($link, $middlename[$key]);
         $bdate1 = mysqli_real_escape_string($link, $bdate[$key]);
         $tel1 = mysqli_real_escape_string($link, $tel[$key]);
         $docType1 = mysqli_real_escape_string($link, $docType[$key]);
         $seria1 = mysqli_real_escape_string($link, $seria[$key]);
         $number1 = mysqli_real_escape_string($link, $number[$key]);
         $given1 = mysqli_real_escape_string($link, $given[$key]);
         $giveData1 = mysqli_real_escape_string($link, $giveData[$key]);
         $hasPass1 = mysqli_real_escape_string($link, $hasPass[$key]);
        //echo $email;

        if ($hasPass1=='') $hasPass1 = 0;
            else $hasPass1 = 1;
       // echo $gender;
        $addQuery = "INSERT INTO tourists_info (LastName, FirstName, Patronymic, Document, Serial, Number, Date, Region, Born, Pasport) VALUES ('$lastname1','$name1', '$middlename1', '$docType1', '$seria1', '$number1','$giveData1','$given1','$bdate1','$hasPass1')";
        $result = mysqli_query($link, $addQuery);
        }
}

?>