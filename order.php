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
    <title>Akcja - Przeprowadzka - zamówienia</title>
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
                    echo '<a href="order.php" class="current">Zamówienia</a>';
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
        <p class="InTxt">Zamówienia...</p>
    </div>
    <div id="boxLogOrder">
        <?php
            if ($user_data['id'] == 2){   
                $sql = "SELECT zamowienia.user,zamowienia.imie_odbiorcy,zamowienia.nazwisko_odbiorcy,
                zamowienia.nr_zamowienia,zamowienia.rejon,zamowienia.miejscowosc,zamowienia.ulica,
                zamowienia.kod_pocztowy,zamowienia.nr_mieszkania,zamowienia.nr_telefonu,zamowienia.termin,
                zamowienia.sposob_platnosci,usluga.id,usluga.rejon,usluga.cena from zamowienia INNER JOIN usluga ON zamowienia.rejon = usluga.id";
                $result = $con->query($sql);
                if ($result->num_rows > 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {
                        echo "<b>Imię: </b>";
                        echo $row ["imie_odbiorcy"];
                        echo "<br>";
                        echo "<b>Nazwisko: </b>";
                        echo $row ["nazwisko_odbiorcy"];
                        echo "<br>";
                        echo "<b>Rejon: </b>";
                        echo $row ["rejon"];
                        echo "<br>";
                        echo "<b>Miejscowość: </b>";
                        echo $row ["miejscowosc"];
                        echo "<br>";
                        echo "<b>Ulica: </b>";
                        echo $row ["ulica"];
                        echo "<br>";
                        echo "<b>Kod pocztowy: </b>";
                        echo $row ["kod_pocztowy"];
                        echo "<br>";
                        echo "<b>Nr mieszkania: </b>";
                        echo $row ["nr_mieszkania"];
                        echo "<br>";
                        echo "<b>Nr telefonu: </b>";
                        echo $row ["nr_telefonu"];
                        echo "<br>";
                        echo "<b>Metoda płatności: </b>";
                        echo $row ["sposob_platnosci"];
                        echo "<hr>";
                    }
                }
            }

            if ($user_data['id'] != 2){
            echo    '<form action="" method="post">';
            echo        '<label style="color: white;">Imię</label><br>';
            echo        '<input id="text" type="text" name="imie_odbiorcy"><br>';
            echo        '<label style="color: white;">Nazwisko</label><br>';
            echo        '<input id="text" type="text" name="nazwisko_odbiorcy" class="password"><br>';
            echo        '<label style="color: white;">Wybierz: </label><br>';
            echo        '<select name="rejon">
                            <option value="" disabled selected>Rejon</option>
                            <option value="1">Szczecin - Centrum</option>
                            <option value="2">Szczecin - prawy brzeg</option>
                            <option value="3">Szczecin - Załom</option>
                            <option value="4">Szczecin - Dobra</option>
                            <option value="5">Szczecin - Police</option>
                            <option value="6">Szczecin - Podjuchy</option>
                            <option value="7">Szczecin - Koszalin</option>
                            <option value="8">Szczecin - Goleniów</option>
                            <option value="9">Szczecin - Gorzów Wlkp.</option>
                            <option value="10">Szczecin - Kołobrzeg</option>
                            <option value="11">Szczecin - Świnoujście</option>
                            <option value="12">Szczecin - Stargard</option>
                        </select><br>';
            echo        '<label style="color: white;">Miasto: </label><br>';
            echo        '<input id="text" type="text" name="miejscowosc" ><br>';
            echo        '<label style="color: white;">Ulica: </label><br>';
            echo        '<input id="text" type="tel" name="ulica" ><br>';
            echo        '<label style="color: white;">Nr Mieszkania/domu: </label><br>';
            echo        '<input id="text" type="text" name="kod_pocztowy" ><br>';
            echo        '<label style="color: white;">Kod pocztowy: </label><br>';
            echo        '<input id="text" type="text" name="nr_mieszkania" ><br>';
            echo        '<label style="color: white;">Nr kontaktowy: </label><br>';
            echo        '<input id="text" type="text" name="nr_telefonu" ><br>';
            echo        '<label style="color: white;">Sposób płatności: </label><br>';
            echo        '<select name="sposob_platnosci">
                            <option value="" disabled selected>Wybierz</option>
                            <option value="1">Gotówka</option>
                            <option value="2">Karta</option>
                        </select><br><br>';
            echo        '<input id="button" type="submit" name="update" class="submitLog" value="Wyślij zamówienie!"><br>';
            echo    '</form> ';
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

