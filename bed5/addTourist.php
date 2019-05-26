<?php
$link = mysqli_connect ("localhost","Anastasia","123456", "tourists");

if (isset($_POST['email']) and isset($_POST['name']))
{
    if (isset($_POST['hash']) and isset($_POST['age']) and isset($_POST['salt']) and isset($_POST['gender']))
     {
        $email = ($_POST['email']);
        $name = ($_POST['name']);
        $hash = ($_POST['hash']);
        $age = ($_POST['age']);
        $salt = ($_POST['salt']);
        $gender = ($_POST['gender']);

        if(get_magic_quotes_gpc()==1)
        {
        $email=stripslashes(trim($_POST['email']));
        $name=stripslashes(trim($_POST['name']));
        $hash=stripslashes(trim($_POST['hash']));
        $age=stripslashes(trim($_POST['age']));
        $salt=stripslashes(trim($_POST['salt']));
        $gender=stripslashes(trim($_POST['gender']));
        }
        else
        {
        $email=trim($_POST['email']);
        $name=trim($_POST['name']);
        $hash=trim($_POST['hash']);
        $age=trim($_POST['age']);
        $salt=trim($_POST['salt']);
        $gender=trim($_POST['gender']);
        }
        //echo $email;
        $email=mysqli_real_escape_string($link, $email);////////////////
        $name=mysqli_real_escape_string($link, $name);
        $hash=mysqli_real_escape_string($link, $hash);
        $age=mysqli_real_escape_string($link, $age);
        $salt=mysqli_real_escape_string($link, $salt);
        $gender=mysqli_real_escape_string($link, $gender);
        //echo $email;

        if ($gender=="male") $gender = M;
            else $gender = F;
       // echo $gender;
        $hashhash = password_hash($hash, PASSWORD_BCRYPT);
        $addQuery = "INSERT INTO user_base (username, password, gender, age, mail, salt) VALUES ('$name','$hashhash', '$gender', '$age', '$email', '$salt')";
        $result = mysqli_query($link, $addQuery);
        if ($result)
        {
            echo 1;
        } else
        {
             echo 9;
        }

    }
    else
    {
        //get salt
        global $error;
        $error = false;
        $email = ($_POST['email']);
        $name = ($_POST['name']);

        if (empty($name) || (strlen($name) > 30))
         {
            $error = true;
            echo 4;
        } else if (empty($email))
        {
            $error = true;
            echo 5;
        }else
         {
            $emailQuery = "SELECT * FROM user_base WHERE mail='$email'";
            $result = mysqli_query($link, $emailQuery);
            if (mysqli_num_rows($result) > 0)
            {
                $error = true;
                echo 3;
            }
        }

        if ($error==false)
         {

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $salt = '';
            for ($i = 0; $i < 64; $i++)
            {
               $salt .= $characters[rand(0, $charactersLength - 1)];
            }

            echo $salt;
        }
    }
}
?>