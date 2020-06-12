<?php
require_once("DatabaseConfig.php");

$Lidhja_DB = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

if(!$Lidhja_DB)
{
    die("Lidhja me DB nuk eshte realizuar!!". mysql_errno(). " ".mysql_error());
}

$Username=trim($_POST['uname']);
$Password=trim($_POST['psw']);

if ($Username&&$Password)
{

    $Username = stripslashes($Username);
    $Password = stripslashes($Password);
    $Username = mysqli_real_escape_string($Lidhja_DB,$Username);
    $Password = mysqli_real_escape_string($Lidhja_DB,$Password);


    $sqlquery="Select * from users where email='$Username' and password='$Password'";
    $rez=mysqli_query($Lidhja_DB,$sqlquery);

    $numro_rreshtat=mysqli_num_rows($rez);

    if($numro_rreshtat == 1){
        //session_start();
        //$_SESSION["$Username"]=$Username;
        //$_SESSION["$Password"]=$Password;
        //header("location:LoginSucces.php");
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Ju jeni kycur me sukes!');\n";
        echo "window.location='SignIn.php'";
        echo "</script>";

    }
    else
    {
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Username ose Password gabim!');\n";
        echo "window.location='SignIn.php'";
        echo "</script>";
    }
}
    else
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Ndonje nga fushat eshte e zbrazet!');\n";
    echo "window.location='SignIn.php'";
    echo "</script>";

if(!$rez)
{
    mysqli_query($Lidhja_DB,$sqlquery);
}
if(mysqli_num_rows($rez)>0)
{
    while ($rreshti = mysqli_fetch_assoc($rez))
    {
        if($rreshti['email']==$Username && $rreshti['password']==$Password)
        {
            echo '<script language="javascript">';
            echo 'alert("Jeni kycur me sukses si").$Username';
            echo '</script>';

        }
        else if(!($rreshti['email']==$Username ) && $rreshti['password']==$Password)
        {
            echo '<script language="javascript">';
            echo 'alert("Username ose password-i gabim")';
            echo '</script>';
        }

    }
}
mysqli_close($Lidhja_DB);



?>