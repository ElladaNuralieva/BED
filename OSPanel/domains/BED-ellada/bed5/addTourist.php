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

        if(get_magic_quotes_gpc()==1)
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
        }
        //echo $email;
         $name = mysqli_real_escape_string($link, $name);
         $lastname = mysqli_real_escape_string($link, $lastname);
         $middlename = mysqli_real_escape_string($link, $middlename);
         $bdate = mysqli_real_escape_string($link, $bdate);
         $tel = mysqli_real_escape_string($link, $tel);
         $docType = mysqli_real_escape_string($link, $docType);
         $seria = mysqli_real_escape_string($link, $seria);
         $number = mysqli_real_escape_string($link, $number);
         $given = mysqli_real_escape_string($link, $given);
         $giveData = mysqli_real_escape_string($link, $giveData);
         $hasPass = mysqli_real_escape_string($link, $hasPass);
        //echo $email;

        if ($hasPass=='') $hasPass = 0;
            else $hasPass = 1;
       // echo $gender;
        $addQuery = "INSERT INTO tourists_info (LastName, FirstName, Patronymic, Document, Serial, Number, Date, Region, Born, Pasport) VALUES ('$lastname','$name', '$middlename', '$docType', '$seria', '$number','$giveData','$given','$bdate','$hasPass')";
        $result = mysqli_query($link, $addQuery);
        if ($result)
        {

            echo 1;
        } else
        {
             echo 9;
        }
}

?>