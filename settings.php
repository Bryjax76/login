<?php
session_start();
    $_SESSION;
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if (isset($_POST['update']))
    {
        $user_name = $_POST['user_name'];

        $query = "UPDATE `login_sample_db` SET user_name='$_POST[user_name]', password='$_POST[password]',user_firstName='$_POST[user_firstName]',user_lastName='$_POST[user_lastName]',user_phoneNumber='$_POST[user_phoneNumber]',user_email='$_POST[user_email]' where user_name='$_POST[user_name]'";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script type="text/javascript"> alert("Dane zmienione pomyślnie") </script>)';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Nie można zmienić danych, sprawdź poprawność wprowadzonych zmian" </script>)';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Akcja - Przeprowadzka - ustawienia</title>
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
                    echo '<a href="order.php">Zamówienia</a>';
                }
            ?>
            <a href="galeria.php">Galeria</a>
            <a href="settings.php" class="current">Ustawienia</a>
            <a href="regulamin.php">Regulamin</a>
            <a href="logout.php">Wyloguj się</a>
        </ul>
    </nav>
</div>
<div class="container">
    <div class="indexContainer1">
        <img src="cool-background.png" class="background">
        <h1 class="stayTxt">Akcja - Przeprowadzka</h1><br>
        <p class="InTxt">Ustawienia...</p>
    </div>
    <div id="boxLogOrder">
        <form action="" method="post">
            <label style="color: white;">Nazwa użytkownika: </label>
            <input id="text" type="text" name="user_name" value='<?php echo $user_data['user_name']?>'><br><br>
            <label style="color: white;">Hasło: </label>
            <input id="text" type="password" name="password" value='<?php echo $user_data['password']?>' class="password"><br><br>
            <label style="color: white;">Imię: </label>
            <input id="text" type="text" name="user_firstName" value='<?php echo $user_data['user_firstName']?>'><br><br>
            <label style="color: white;">Nazwisko: </label>
            <input id="text" type="text" name="user_lastName" value='<?php echo $user_data['user_lastName']?>'><br><br>
            <label style="color: white;">Nr telefonu: </label>
            <input id="text" type="tel" name="user_phoneNumber" value='<?php echo $user_data['user_phoneNumber']?>'><br><br>
            <label style="color: white;">Adres email: </label>
            <input id="text" type="text" name="user_email" value='<?php echo $user_data['user_email']?>'><br><br>
            <input id="button" type="submit" name="update" value="Zapisz" class="submitLog"><br><br>
        </form> 
    </div>
    <footer class="footer"><b>Kontakt:</b>
        +48 502-545-591,
        bryjax76@gmail.com
    </footer>
</div>
</body>
</html>

