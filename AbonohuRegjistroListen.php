<?php

require_once("DatabaseConfig.php");

if(isset($_POST['Emaili']))
{


$ldb = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
 if(!$ldb)
    {
        die("Lidhja me Databaze nuk eshte realizuar!!". mysqli_errno(). " ".mysqli_error());
    }



 $Email=trim($_POST['Emaili']);
 if($Email=="")
 {
     echo "<script language=\"JavaScript\">\n";
     echo "alert('Email-i eshte i zbrazet!');\n";
     echo "window.location='index.php'";
     echo "</script>";
 }
 else{


     $SqlQuery="Select * from abonuesit where email='$Email'";

     $result=mysqli_query($ldb,$SqlQuery);

     if(mysqli_num_rows($result) != 0)
     {
         echo "<script language=\"JavaScript\">\n";
         echo "alert('Ky email ekziston!');\n";
         echo "window.location='index.php'";
         echo "</script>";
     }
     else
     {
         $query = "Insert into abonuesit values ('".$Email."')";

         $rez= mysqli_query($ldb,$query);

     }
     if(!$rez)
     {
         die("Ju nuk mund te regjistroheni!Kontrolloni te dhenat edhe nje here!" . " " . mysqli_error());
     }
     else{
         echo "<script language=\"JavaScript\">\n";
         echo "alert('Ju u regjistruat me sukses!');\n";
         echo "window.location='index.php'";
         echo "</script>";
     }
 }
}
mysqli_close($ldb);

?>