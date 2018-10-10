<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>
<body>

<div id="menu">
    <?php
    echo ('<ul class="topnav" id="myTopnav">');
    echo ('<p style="text-align: center; color: #fff; background-color: #333333; font-weight: bold; width: auto; margin-left: 350px;" ><a href="index.php">Domov</a></p>');
    echo ('<p style="text-align: center; color: #fff; background-color: #333333; font-weight: bold; width: auto; margin-left: 350px;" ><a href="index.php?page=formular">Formular</a></p>');
    echo ('<p style="text-align: center; color: #fff; background-color: #333333; font-weight: bold; width: auto; margin-left: 350px;" ><a href="index.php?page=Klienti">Klienti</a></p>');
    echo ('<li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>');
    echo ('</ul>');
    ?>
</div>

<div style="padding-left:16px">
    <h2 style="font-family: Arial, Helvetica, sans-serif">Vitajte na nasej stranke</h2>
    <p style="font-family: Arial, Helvetica, sans-serif">Prihlaste sa a odobrajte novinky o nasej stranke.</p>
    <a href="index.php?page=formular"><input id="button" type="submit" id="submit" name="send" value="Formular" /></a>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<div id="obsah">
    <?php

    if (isset($_GET['page'])) {
        $subor = $_GET['page'];
        $subor2 = dirname($_SERVER['SCRIPT_FILENAME']) . "/" . $subor . ".php";
        if (file_exists($subor2)) {
            include $subor2;
        }

    }
    ?>
</div>

</body>
</html>
