<?php
session_start();
    $_SESSION;
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Akcja - Przeprowadzka - galeria</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="script" href="script.js"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="topnav">
    <nav class="main-nav">
        <ul class="nav-list">
        <a href="index.php">Strona główna</a>
            <?php
                if ($user_data['id'] != 2)
                {
                   echo '<a href="orderLog.php">Moje zamówienia</a>';
                   echo '<a href="order.php">Zamów nowe</a>';
                }            
            ?>
            <a href="informacje.php">Informacje</a>
            <?php
                if ($user_data['id'] == 2)
                {
                    echo '<a href="order.php">Zamówienia</a>';
                }
            ?>
            <a href="galeria.php" class="current">Galeria</a>
            <a href="settings.php">Ustawienia</a>
            <a href="regulamin.php">Regulamin</a>
            <a href="logout.php">Wyloguj się</a>
        </ul>
    </nav>
</div>
<div class="container">
    <div class="indexContainer1">
        <h1 class="firstTxt">Akcja - Przeprowadzka</h1><br>
        <p class="secondTxt">Nasze akcje...</p>
    </div>
    <div id="boxLogGallery">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="przeprowadzka_1.png" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="przeprowadzka_2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="przeprowadzka_3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
</div>

</body>
</html>