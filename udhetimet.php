<?php
	$title='Udhetimet';
?>

<?php
	include("Include/header.php");
?>

<section id="banner">
	<div class="Slide">
    	<img class="slideshow" src="img/banner1.jpg" alt="banner">
    </div>
</section>



<?php
	include ("Include/abonohu.php");
?>

<section class="icon">
	<div class="container">
    	<div class="radiobox">        	
        	<label>
            <h3>Aeroplan</h3>
            <img src="img/aeroplan.png" alt="Aeroplan_Icon">
            <input class="radiobutton" type="radio" name="Metoda_Udhetimit" value="Aeroplan">  
            </label>          
        </div>
        <div class="radiobox">
        	<label>
        	<h3>Autobus</h3>    
            <img src="img/bus.png" alt="Autobus_Icon">
            <input class="radiobutton" type="radio" name="Metoda_Udhetimit" value="Autobus">           
            </label> 
        </div>
        <div class="radiobox">
        	<label>        	
        	<h3>Anije</h3>
            <img src="img/anije.png" alt="Anije">
            <input class="radiobutton" type="radio" name="Metoda_Udhetimit" value="Anije">
            </label> 
        </div>
        <div class="radiobox">
        	<label>
            	<h3>Tren</h3>
           		<img src="img/treni.png" alt="Plane_Icon">
            	<input class="radiobutton" type="radio" name="Metoda_Udhetimit" value="Treni">
            </label> 
        </div>
    </div>
</section>

<section>
	<div id="kerkimi">
    	<div>
    		<label>Nisja:</label>
    		<input id="txtNisja" type="text" name="Nisja">
        </div>
        <div>
        	<label>Destinacioni:</label>
        	<input id="txtDestinacioni" type="text" name="Destinacioni">
        </div>
        <div>
        	<input id="btnKerko" type="submit" name="Kerkimi" value="Kerko">
        </div>
    </div>	

</section>
<section>
    <div>
        <?php
        include('Include/FillTable.php');
        ?>
    </div>
</section>
<section>
	<div id="rez">
        	
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () {

            $('#btnKerko').click(function () {

				//merren datat nga radio buttonat
				var menyraudhetimi = $(document.getElementsByClassName("radiobutton").val());
				$.post("FillTable.php", { menyra_udhetimit: menyraudhetimi }, function (data)
				{
					$("#rez").html(data);
				})

				//merren datat nga fusha me id txtNisja
                var varshtetiNisjes = $("#txtNisja").val();
                $.post("FillTable.php", { qytet_nisjes: varshtetiNisjes }, function (data)
				{
                    $("#rez").html(data);
                })

				//merren datat nga fusha me id txtDestinacioni
                var destinacioni = $(document.getElementById("txtDestinacioni").val());
                $.post("FillTable.php",{q_destinacionit:destinacioni },function (data)
				{
					$("#rez").html(data);
				})
            });

        });

</script>
<?php
include("Include/footer.php");
?>
