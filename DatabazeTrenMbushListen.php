<?php
require_once("DatabaseConfig.php");
//if(isset($_POST['ShtetiNisjes']))
//{
$shtetiNisjes=$_POST['shteti'];


$Lidhja_DB = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
if(!$Lidhja_DB)
{
    die("Lidhja me DB nuk eshte realizuar!!". mysqli_errno(). " ".mysqli_error());
}
$shNisjes=$_POST['ShtetiNisjes'];

$shtetiNisjes = trim($_POST['ShtetiNisjes']);
$shtetiDestinacionit=trim($_POST['ShtetiDestinacionit']);

if($shtetiNisjes=="" || $shtetiDestinacionit=="")
{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Njera nga fushat eshte e zbrazet!');\n";
    echo "window.location='Tren.php'";
    echo "</script>";
}
else{

// $destinacioni=trim($_POST['shteti']);



$sqlquery = "SELECT * from linjat where menyra_udhetimit='Tren' and shteti_nisja like '".$shtetiNisjes."' and sh_destinacioni='".$shtetiDestinacionit."'";

$rez = mysqli_query($Lidhja_DB,$sqlquery);

if(!$rez)
{
    mysqli_query($Lidhja_DB,$sqlquery);
}
if(mysqli_num_rows($rez)>0)
{
    $counter=mysqli_num_rows($rez);
    echo "<table border='1px'><tr><th>Menyra Udhetimit</th><th>Shteti i nisjes</th><th>Qyteti i nisjes</th><th>Shteti i destinacionit</th><th>Qyteti i destinacionit</th><th>Cmimi biletes</th></tr>";
    while ($rreshti = mysqli_fetch_assoc($rez))
    {
        echo "<tr><td>".$rreshti['menyra_udhetimit']."</td><td>".$rreshti['shteti_nisja']."</td><td>".$rreshti['qytetet_nisjes']."</td><td>".$rreshti['sh_destinacioni']."</td><td>".$rreshti['q_destinacionit']."</td><td>".$rreshti['cmimi_biletave']."</td></tr>";
    }

    echo "</table>";
}
else
{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Nuk u gjet ndonje linje!');\n";
    echo "window.location='Tren.php'";
    echo "</script>";
}
}
mysqli_close($Lidhja_DB);
//}
?>