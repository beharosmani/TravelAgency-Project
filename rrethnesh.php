<?php
session_start();
?>
<?php
include('Include/header.php');
?>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('#btnKerko').click(function () {

                var varAbonohuEmail = $("#txtAbonohu").val();
                $.post("ShfaqAbonuesit.php", { email: varAbonohuEmail }, function (data) {
                    $("#rez").html(data);
                })

            });

        });

    </script>
    <div id="llogo">
			<h1><a href="index.html">
			<?php 
			include('Inheritance.php');
			$txt1=new teksti1();
			$_SESSION['obj']=$txt1;
            ?>
			</a>
			</h1>
        </div>
     <div id="content" class="layoutright" style="padding: 30px">

					
		
	 <h2><span style="color: #333399">
	 <?php
	 $txt2=$_SESSION['obj'];
	 echo $txt2->setStr("Na Kontaktoni");
	 echo $txt2->getStr();
	 ?>
	 </h2>		
			<div class="entry">
				<p>Lidhur me kërkesat e udhëtimit dhe informacione tjera, ju lutem mos ngurroni të na kontaktoni ...</p>
				<p>&nbsp;</p>
				<h3><span style="color: #333399;"><strong>Agjensia e udhëtimit</strong></span><br>
				Divizioni Ndërkombëtar i Udhëtimit</h3>
<?php
$arr = array('Prishtine','rr.Adem Ramadani','Kosove');
				echo "Adresa: ";
				echo implode(", ",$arr);
?>
				<h5>Orari i punes:8:30～17:30 GMT+1<br>
					(mbyllur vetem ne diten e diele)<br>
					TEL:+381-(0)3-6895-8344<br>
					FAX:+381-(0)3-6895-8355</h5>
				<p><a href="___.php"><img src="___.png" alt=""></a> <a href="___.php"><img src="___.png" alt=""></a></p>
			</div>
				
	    <label>
            <?php
	 $txt3=$_SESSION['obj'];
	 echo $txt3->setStr(" Kerko ne listen e abonuesve ");
	 echo $txt3->getStr();
	 ?>
        Kerko ne listen e abonuesve
        </label>
         <input type="text" id="txtAbonohu" placeholder="Shkruani email-in..." name="Emaili"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
         <input type="submit" id="btnKerko" name="Abonimi" value="Kerko">
         <div id="rez" style="width:40%;min-height:100px; font-size:15px;"></div>



		<p>
		        		
		<br>
		<a href="#top">▲TOP</a>
	</p></div>
  <?php 
  session_unset(); 

// destroy the session 
session_destroy();
  ?>
	 
</body>
<footer>
<p>T&euml; gjitha t&euml; drejtat e rezervuara &copy; 2017</p>
</footer>
</html>