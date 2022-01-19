<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //SOMETHING WAS POSTED
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            $user_id = random_num(20);
            $query = "select * from login_sample_db where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                } 
            }
        }
        else
        {
            echo "Zły login lub hasło!";
        }
    } 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Akcja - Przeprowadzka - logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav">
        <nav class="main-nav">
            <ul class="nav-list">
                <a href="regulamin.php">Regulamin</a>
                <a href="login.php" class="current">Zaloguj się</a>
                <a href="signup.php">Rejestracja</a>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="indexContainer">
            <img src="cool-background.png" class="background">
            <h1 class="firstTxt" style="top: 1.5em">Logowanie</h1><br>
        </div>
        <div id="boxLog">
            <form method="post" class="login_form">
                <div style="font-size: 25px; margin: 5px; color: white; ">Login</div>
                <hr style="width: 8vw; color: white;">
                <input type="text" name="user_name" placeholder='Podaj login'><br><br>
                <input type="password" name="password" placeholder='Podaj hasło'><br><br>
                <input type="submit" value="Zaloguj się" class="submitLog"><br><br>
            </form>
            <img src="logo.jpg" alt="socialMedia" style="width: 30vw; height: 55vh; position: absolute; top: 0; bottom:0; left:0; right:0; opacity: .3;">
        </div>
        <footer class="footer"><b>Kontakt:</b>
        +48 502-545-591,
        bryjax76@gmail.com
        </footer>
    </div>
</body>
</html>