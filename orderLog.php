<?php
session_start();
    $_SESSION;
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //SOMETHING WAS POSTED
        $imie_odbiorcy = $_POST['imie_odbiorcy'];
        $nazwisko_odbiorcy = $_POST['nazwisko_odbiorcy'];
        $rejon = $_POST['rejon'];
        $miejscowosc = $_POST['miejscowosc'];
        $ulica = $_POST['ulica'];
        $kod_pocztowy = $_POST['kod_pocztowy'];
        $nr_mieszkania = $_POST['nr_mieszkania'];
        $nr_telefonu = $_POST['nr_telefonu'];
        $sposob_platnosci = $_POST['sposob_platnosci'];
        if(!empty($imie_odbiorcy))
        {
            $user = $user_data['id'];
            $nr_zamowienia = random_num(20);

            $query = "insert into zamowienia (user,imie_odbiorcy,nazwisko_odbiorcy,nr_zamowienia,rejon,miejscowosc,ulica,kod_pocztowy,nr_mieszkania,nr_telefonu,sposob_platnosci) values ('$user','$imie_odbiorcy','$nazwisko_odbiorcy','$nr_zamowienia','$rejon','$miejscowosc','$ulica','$kod_pocztowy','$nr_mieszkania','$nr_telefonu','$sposob_platnosci')";
            mysqli_query($con, $query);
            header("Location: index.php");
            die;
        }
        else
        {
            echo "Proszę, podaj prawidłowe wartości!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Akcja - Przeprowadzka - moje zamówienia</title>
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
            <a href="informacje.php">Informacje</a>
            <?php
                if ($user_data['id'] == 2)
                {
                    echo '<a href="order.php" class="current">Zamówienie</a>';
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
        <p class="InTxt">Moje zamówienia</p>
    </div>
    <div id="boxLogOrder">
        <?php

            if ($user_data['id'] != 2){
                $user = $user_data['id'];
                $sql = "SELECT zamowienia.user,zamowienia.imie_odbiorcy,zamowienia.nazwisko_odbiorcy,
                zamowienia.nr_zamowienia,zamowienia.rejon,zamowienia.miejscowosc,zamowienia.ulica,
                zamowienia.kod_pocztowy,zamowienia.nr_mieszkania,zamowienia.nr_telefonu,zamowienia.termin,
                zamowienia.sposob_platnosci,usluga.id,usluga.rejon,usluga.cena from zamowienia INNER JOIN usluga ON zamowienia.rejon = usluga.id WHERE zamowienia.user = ".$user;
                $result = $con->query($sql);
                
                if ($result->num_rows > 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {
                        echo "Imię: ";
                        echo $row ["imie_odbiorcy"];
                        echo "<br>";
                        echo "Nazwisko: ";
                        echo $row ["nazwisko_odbiorcy"];
                        echo "<br>";
                        echo "Rejon: ";
                        echo $row ["rejon"];
                        echo "<br>";
                        echo "Miejscowość: ";
                        echo $row ["miejscowosc"];
                        echo "<br>";
                        echo "Ulica: ";
                        echo $row ["ulica"];
                        echo "<br>";
                        echo "Kod pocztowy: ";
                        echo $row ["kod_pocztowy"];
                        echo "<br>";
                        echo "Nr mieszkania: ";
                        echo $row ["nr_mieszkania"];
                        echo "<br>";
                        echo "Nr telefonu: ";
                        echo $row ["nr_telefonu"];
                        echo "<br>";
                        echo "Metoda płatności: ";
                        echo $row ["sposob_platnosci"];
                        echo "<hr>";
                    }
                }
            }
        ?>
    </div>
    <footer class="footer"><b>Kontakt:</b>
        +48 502-545-591,
        bryjax76@gmail.com
    </footer>
</div>
</body>
</html>

