<?php
include("Include/header.php");
?>

<style>
    @charset "utf-8";
    /* CSS Document */

    body {
        font-family: Arial, Helvetica, sans-sarif;
        font-size: 15px;
        line-height: 1.5;
        padding: 0;
        margin: 0;
        background-color: #F4F4F4;
    }

    /*Global container*/
    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    /*header*/
    header {
        background: #35424a;
        color: #ffffff;
        padding-top: 30px;
        min-height: 70px;
        border-bottom: #e8491d 3px solid;
    }

        /*Linqet*/

        /*header #llogo a
{
	text-decoration:none;
	color:#FFFFFF;
}
*/

        header nav a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header li {
            float: left;
            display: inline;
            padding: 0 10px 0 10px;
        }

        /*
 hearder #llogo
{
	float:left;
}

header #llogo h1
{
	margin:0;
}
*/
        header nav {
            float: right;
        }

        header .container .current a {
            color: #E8451D;
            font-weight: bold;
        }

        header a:hover {
            color: #cccccc;
            font-weight: bold;
        }

        header .container a {
            text-decoration: none;
            color: #FFFFFF;
            text-transform: uppercase;
        }
    /*Presentation*/

    #presentation {
        min-height: 450px;
        background: url(img/Bus1.jpg) no-repeat 0;
        text-align: center;
        color: #ffffff;
    }

        #presentation h1 {
            margin-top: 100px;
            font-size: 55px;
            margin-bottom: 10px;
        }

        #presentation p {
            font-size: 20px;
        }

    /*Abonimi*/

    #Abonimi {
        background: #FA6B2A;
        color: #ffffff;
        padding: 0;
        margin: 0;
    }

        #Abonimi h1 {
            float: left;
        }

        #Abonimi form {
            float: right;
            margin-top: 25px;
        }

        #Abonimi input[type='email'] {
            padding: 4px;
            height: 25px;
            width: 250px;
        }

        #Abonimi input[type='submit'] {
            margin-left: 20px;
            height: 40px;
            border: none;
            padding: 0 20px 0 20px;
            cursor: pointer;
        }

            #Abonimi input[type='submit']:hover {
                font-weight: bold;
                color: #ffffff;
                background: #FA6B2A;
            }

    /*boxes*/

    #boxes {
        margin-top: 20px;
    }

        #boxes .box {
            float: left;
            /*background:#35424a;
	border-radius: 15px 15px 15px 15px;*/
            padding: 15px;
            margin: 5px;
            text-align: center;
            width: 20%;
            min-width: 150px;
        }

            #boxes .box img {
                width: 150px;
                height: 150px;
            }

            #boxes .box a {
                text-decoration: none;
                color: #FA6B2A;
            }
    /*Footer*/

    footer {
        border-top: #FA6B2A 2px solid;
        text-align: center;
        font-style: italic;
        font-weight: 100;
    }
</style>


    <section id="presentation">
        <div class="container">
            <h1>Udh&euml;tim i juaji, detyra jon&euml;</h1>
        </div>
    </section>
    <section>
        <div class="container">
            <div id="choice">
                <form method="post" action="DatabazeAutobusMbushListenphp.php">

                    <label>Shteti i nisjes :</label>
                    <input type="text" id="txtShtetiNisjes" name="ShtetiNisjes" onkeyup="kerkoUdhetimet(this.value)" placeholder="Shteti i nisjes" />
                    <label>Shteti i destinacionit:</label>

                    <input type="text" id="txtShtetiDestinacionit" name="ShtetiDestinacionit" placeholder="Shteti i destinacionit" />

                    <button id="btnKerko">Kerko</button>
                 
            </div>
        </div>
        <div id="form">
            </form>
        </div>
    </section>

  <?php
  include('Include/ikonat.php');
  include("Include/footer.php");
?>



