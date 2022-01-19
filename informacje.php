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
        <p style="color: white; font-size: 1.2em; float: top; text-align: center;">
            Jesteśmy małą firma usługową która zajmuje się pomocą w 
            ramach przeprowadzki na terenie Szczecina.
            Nasze usługi obejmują całe miasto Szczecin jak i niedalekie okolice zachodniopomorskiego.
        </p>
        <p style="color: white; font-size: 1.2em; float: top; text-align: center;">
            Cennik 
        </p>
<table class="GeneratedTable">
  <thead>
    <tr>
      <th>Trasa</th>
      <th>Cena</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Szczecin - Centrum</td>
      <td>od 40 zł</td>
    </tr>
    <tr>
      <td>Szczecin - prawy brzeg</td>
      <td>60 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Załom</td>
      <td>70 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Dobra</td>
      <td>70 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Police</td>
      <td>70 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Podjuchy</td>
      <td>55 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Koszalin</td>
      <td>400 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Goleniów</td>
      <td>150 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Gorzów Wlkp.</td>
      <td>300 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Kołobrzeg</td>
      <td>350 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Świnoujście</td>
      <td>250 zł</td>
    </tr>
    <tr>
      <td>Szczecin - Stargard</td>
      <td>150zł</td>
    </tr>
    <tr>
      <td>Cena za <b>godzinę</b> postoju (np. korek)</td>
      <td>45 zł</td>
    </tr>
  </tbody>
</table>
<a href="wymiar.php" class="wymiar">Sprawdź wymiary samochodu...</a>

    </div>
    <footer class="footer"><b>Kontakt:</b>
        +48 502-545-591,
        bryjax76@gmail.com
    </footer>
</div>
</body>
</html>

