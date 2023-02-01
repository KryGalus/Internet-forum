<?php
$db = new mysqli('localhost', 'root', '', 'forum');
$msg = '';
if(!$db->connect_error){
    if(isset($_POST['sub2'])){
        if(!empty($_POST['pseudonim']) && !empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['email2']) && !empty($_POST['pass'])){
            $haslo = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $db->query("INSERT INTO uzytkownicy(id_u, pseudonim, imie, nazwisko, email, haslo) VALUES ('','{$_POST['pseudonim']}', '{$_POST['imie']}','{$_POST['nazwisko']}','{$_POST['email2']}','$haslo')"); 
        }else{
            $msg = 'Wypełnij wszystkie pola';
        }
    }
}else{
    die("Błąd połczenie z bazą: ".$db->connect_error);
}
$db->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forum/Rejestracja</title>
        <link href="styl.css" type="text/css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1"/>
    </head>
    <body>
        <section id="register">
            <img src="logo.png" alt="logo">
            <div id="dane">
                <form method="POST" onsubmit="sprawdzpola()">
                    <label for="email2">E-mail:</label>
                    <br>
                    <input type="email" name="email2" id="email2">
                    <br>
                    <label for="imie">Imię:</label>
                    <br>
                    <input type="text" name="imie" id="imie">
                    <br>
                    <label for="nazwisko">Nazwisko:</label>
                    <br>
                    <input type="text" name="nazwisko" id="nazwisko">
                    <br>
                    <label for="pseudonim">Pseudonim:<br>(Twoja nazwa na forum)</label>
                    <br>
                    <input type="text" name="pseudonim" id="pseudonim">
            </div>
            <div id="dane2">
                    <label for="pass">Hasło:</label>
                    <br>
                    <input type="password" name="pass" id="pass">
                    <br>
                    <input onclick="pokazhaslo1()" type="checkbox" id="pokaz">
                    <span class="lpokaz">Pokaż hasło</span>
                    <br>
                    <label for="powpass">Powtórz hasło:</label>
                    <br>
                    <input type="password" name="powpass" id="powpass">
                    <br>
                    <input onclick="pokazhaslo2()" type="checkbox" id="pokaz2">
                    <span class="lpokaz">Pokaż hasło</span>
                    <br>
                    <input type="submit" name="sub2" id="sub2">
                </form>
            </div>
        </section>
        <a href="logowanie.php"><p id="wracaj">Wróc do logowania</p></a>
        <script src="skrypt.js"></script>
    </body>
</html>