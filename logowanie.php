<?php
$db = new mysqli('localhost', 'root', '', 'forum');
if($db->connect_errno!=0){
    echo "Error:".$db->connect_errno."Opis:".$db->connect_error;
}
else{
    $login = $_POST['email'];
    $haslo = $_POST['haslo'];
    $zapytanie = "SELECT * FROM uzytkownicy WHERE email='$login' AND haslo='$haslo'";
    if($rezultat = @$db->query($zapytanie)){
        $ilu_userow = $rezultat->num_rows;
        if($ilu_userow==1){
            $wiersz=$rezultat->fetch_assoc();
            $user = $wiersz['email'];

            $rezultat->close();
        }else{

        }
    }
    $db->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forum/Logowanie</title>
        <link href="styl.css" type="text/css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1"/>
    </head>
    <body>
        <section id="login">
            <img src="logo.png" alt="logo">
            <div id="form1">
                <form method="POST">
                    <label for="email">E-mail:</label>
                    <br>
                    <input type="text" name="email" id="email">
                    <br>
                    <label for="haslo">Hasło:</label>
                    <br>
                    <input type="password" name="haslo" id="haslo">
                    <br>
                    <input type="submit" name="sub1" id="sub1" value="Zaloguj">
                </form>
            </div>
            <p>Nie masz jeszcze konta?</p>
            <a href="rejestracja.php"><p id="rej">Zarejestruj się!</p></a>
        </section>
    </body>
</html>