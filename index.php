<!DOCTYPE html>
<html>
    <head>
        <title>Forum</title>
        <link href="styl.css" type="text/css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1"/>
    </head>
    <body>
        <header id="h1">
            <?php
            ?>
        </header>
        <header id="h2">
            <div id="h2zaw">
                <img src="logo.png" alt="logo">
                <div id="searchbar">
                    <input type="text" name="search" placeholder="Wyszukaj...">
                </div>
            </div>
        </header>
        <header id="h3">
            <img src="bell.svg" alt="notifications" id="bell" onclick="rozwin2()">
            <div id="ntf">
                <?php
                ?>
            </div>
            <script src="skrypt.js"></script>
                <img src="menu.svg" alt="menu" id="men" onclick="rozwin()">
                <div id="menu">
                    <table>
                        <tr>
                            <th class="m1">Profil</th>
                        </tr>
                        <tr>
                            <th class="m1">Polubione</th>
                        </tr>
                        <tr>
                            <th class="m1">Twoje posty</th>
                        </tr>
                        <tr>
                            <th class="m1">Bezpieczeństwo</th>
                        </tr>
                        <tr>
                            <th class="m1">Ustawienia</th>
                        </tr>
                    </table>
                </div>
        </header>
        <section id="left">
            <div id="utworz">
                <span id="utw">Utwórz post</span>
            </div>
            <?php
            ?>
        </section>
        <section id="main">
            <div id="post"></div>
            <?php
            ?>
        </section>
        <footer id="f1"></footer>
        <footer id="f2">
            <table>
                <tr>
                    <th class="m2">Regulamin</th>
                    <th class="m2">O nas</th>
                    <th class="m2">Kontakt</th>
                    <th class="m2">Bezpieczeństwo</th>
                </tr>
            </table>
        </footer>
    </body>
</html>