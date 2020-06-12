<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="I sigurt dhe konfort">
    <title><?php echo "$title"?> - Agjensioni Turistik</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/CSSudhetimet.css">
    <link rel="stylesheet" href="./css/cssdrop.css">
    <link rel="stylesheet" href="./css/tableCss.css">
    <!--<link rel="stylesheet" href="./css/signIn-Up.css">-->
</head>

<body>
    <header>
        <h1><a href="index.php">Agjensioni Turistik</a></h1>
        <div class="containerMenu">
            <a href="SignIn.php">Login</a>
            <a href="SignUp.php">Sign Up</a>
            <div class="dropdown">
                <button class="dropbtn" onclick="dropdown()">Udh&euml;timet</button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="Aeroplani.php">Aeroplan</a>
                    <a href="Autobus.php">Autobus</a>
                    <a href="Anije.php">Anije</a>
                    <a href="Tren.php">Tren</a>                    
                </div>
            </div>
            <a href="rrethnesh.php">Rreth Nesh</a>
            <a href="index.php">Ballina</a>
        </div>
    </header>
