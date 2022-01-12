<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-2">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="keywords" content="egzamin, euklides, parzyste">
    <link rel="stylesheet" href="style.css">
</head>
<body class="format">
    <div id="container">
        <div id="head">
            <img src="logo.png">
            Egzamin E.14
        </div>
        <div id="menu">
            <a href="index.html">Index</a>
            <br><br>
            <a href="nwd.html">NWD</a>
            <br><br>
            <a href="parzyste.php">Liczby parzyste</a>
        </div>
        <div id="main">
        NWD <br>
            <form method="POST" action="parzyste.php">
                <input name="jeden" type="number"> A <br>
                <input name="dwa" type="number"> B <br>
                <input name="add" type="submit" value="Oblicz"> Liczby parzyste :
            </form>
        </div>
    </div>
</body>
</html>