<?php

require_once("DatabaseConfig.php");

$Abonuesit = $_POST['Emaili'];

$ldb = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

$Abonuesit=trim($_POST['email']);
if($Abonuesit=="")
{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Ju lutem shkruani emailin!');\n";
    echo "window.location='rrethnesh.php'";
    echo "</script>";
}
else
{

$sqlquery = "Select * from abonuesit where email like '".$Abonuesit."%'";
$rez= mysqli_query($ldb,$sqlquery);
if(!$rez)
{
    mysqli_query($Lidhja_DB,$sqlquery);
}
if(mysqli_num_rows($rez)>0)
{
    $counter=mysqli_num_rows($rez);

    echo "<table border='1px'><tr><th>Email</th></tr>";
    while ($rreshti = mysqli_fetch_assoc($rez))
    {
        echo "<tr><td>".$rreshti['email']."</td>";
    }
    echo "</table>";
}
else
{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Ky email nuk ekziston ne listen e abonuesve!');\n";
    echo "window.location='rrethnesh.php'";
    echo "</script>";

}
}
mysqli_close($ldb);

?>