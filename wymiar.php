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
    <title>Akcja - Przeprowadzka - informacje</title>
    <link rel="stylesheet" href="style.css">
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
            <a href="informacje.php" class="current">Informacje</a>
            <?php
                if ($user_data['id'] == 2)
                {
                    echo '<a href="order.php" >Zamówienia</a>';
                }
            ?>
            <a href="galeria.php">Galeria</a>
            <a href="settings.php">Ustawienia</a>
            <a href="regulamin.php">Regulamin</a>
            <a href="logout.php">Wyloguj się</a>
        </ul>
    </nav>
</div>
<div class="container">
    <div class="indexContainer1">
        <img src="cool-background.png" class="background">
        <h1 class="stayTxt">Akcja - Przeprowadzka</h1><br>
        <p class="BackTxt">Witaj, <?php echo $user_data['user_firstName']?></p>
        <p class="InTxt">O nas...</p>
    </div>
    <div id="boxLog" style="min-width: 40vw;">     
        <img src="image1016.png" alt="wymiary" style="max-height: 60vh; max width: 80vw; min-width: 40vw; min-height: 30vh;">
        <a href="informacje.php" class="wymiar">Powrót</a>
    </div>
    <footer class="footer"><b>Kontakt:</b>
        +48 502-545-591,
        bryjax76@gmail.com
    </footer>
</div>
</body>
</html>

