<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //SOMETHING WAS POSTED
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $user_firstName = $_POST['user_firstName'];
        $user_lastName = $_POST['user_lastName'];
        $user_phoneNumber = $_POST['user_phoneNumber'];
        $user_email = $_POST['user_email'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            $user_id = random_num(20);

            $query = "insert into login_sample_db (user_id,user_name,password,user_firstName,user_lastName,user_phoneNumber,user_email) values ('$user_id','$user_name','$password','$user_firstName','$user_lastName','$user_phoneNumber','$user_email')";
            mysqli_query($con, $query);
            header("Location: login.php");
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
    <title>Akcja - Przeprowadzka - rejestracja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav">
        <nav class="main-nav">
            <ul class="nav-list">
                <a href="regulamin.php">Regulamin</a>
                <a href="login.php">Zaloguj się</a>
                <a href="signup.php" class="current">Rejestracja</a>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="indexContainer">
            <img src="cool-background.png" class="background">
            <h1 class="firstTxt">Rejestracja</h1><br>
            <p class="secondTxt">Dołącz już teraz!</p>
        </div>
        <div id="boxLog" style="min-width: 15em;">
            <div style="font-size: 25px; margin: 5px; color: white;">Podaj dane</div><hr style="width: 8vw; color: white;">
            <form method="post" class="login_form">
                <input id="text" type="text" name="user_name" placeholder='Podaj login'><br><br>
                <input id="text" type="password" name="password" placeholder='Podaj hasło'><br><br>
                <input id="text" type="text" name="user_firstName" placeholder='Podaj imię'><br><br>
                <input id="text" type="text" name="user_lastName" placeholder='Podaj nazwisko'><br><br>
                <input id="text" type="tel" name="user_phoneNumber" placeholder='Podaj nr telefonu'><br><br>
                <input id="text" type="text" name="user_email" placeholder='Podaj adres email'><br><br>
                <input id="button" type="submit" value="Zarejestruj się" class="submitLog"><br><br>
            </form>   
        </div>
        <footer class="footer"><b>Kontakt:</b>
        +48 502-545-591,
        bryjax76@gmail.com
    </footer>
    </div>   
</body>
</html>