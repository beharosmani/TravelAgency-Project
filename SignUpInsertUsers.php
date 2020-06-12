<?php
require_once("DatabaseConfig.php");

if(isset($_POST['email']))


    $DBConnection = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

    if(!$DBConnection)
    {
        die("Lidhja me DB nuk eshte realizuar!!". mysqli_errno(). " ".mysqli_error());
    }

    $Email = trim($_POST['email']);
    $Password = trim($_POST['psw']);
    $RPassword=trim($_POST['psw-repeat']);
    if(!($Password==$RPassword))
    {
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Password-at nuk perputhen!');\n";
        echo "window.location='SignUp.php'";
        echo "</script>";
        die("1");

    }

      $query = "SELECT * FROM users WHERE email='$Email'";
      $result=mysqli_query($DBConnection,$query);
       if(mysqli_num_rows($result) != 0)
        {
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Ky email ekziston!');\n";
            echo "window.location='SignUp.php'";
            echo "</script>";
        }
       else
        {

        $hash = password_hash($Password, PASSWORD_BCRYPT);
        if (password_verify($Password, $hash))
        {
           $sqlquery="Insert into users  values ('".$Email."','".$hash."')";
           $rez=mysqli_query($DBConnection,$sqlquery);

       // $sqlquery = "Insert into users values ('".$Email."','".$Password."')";
        //$rez = mysqli_query($DBConnection,$sqlquery);
        }
    }



    if(!$rez)
    {
        die("Ju nuk mund te regjistroheni!Kontrolloni te dhenat edhe nje here!" . " " . mysqli_error());
    }
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Ju u regjistruat me sukses!');\n";
    echo "window.location='SignUp.php'";
    echo "</script>";



?>