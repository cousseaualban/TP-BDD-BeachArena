<?php
    require_once('./getuser.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>Beach Company</title>
</head>
<body>
    <header>
        <nav>
            <img src="./assets/logo.png" alt="Ceci est la photo du logo">
            <ul>
                <li><a href="" class="green">Discover</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">How it works</a></li>
            </ul>
            <button>Login</button>
        </nav>
    </header>

    <section id="hero">
        <img src="./assets/right.png" alt="Ceci est la photo du hero">
        <div class="Box">
            <p>Make new Friends over</p>
            <h1>Beach Football</h1>
            <p>Challenge your friends and play together a game of Beach Football at your nearest beach</p>
                <form>
                    <select name="arenas" onchange="showUser(this.value)">
                        <option value="">Search beach arenas:</option>
                        <option value="1">Costa del Sol, El Salvador</option>
                        <option value="2">Nazaré, Portugal</option>
                        <option value="3">Figueira da Foz, Portugal</option>
                        <option value="4">Alajuela, Costa Rica</option>
                        <option value="5">Saly, Senegal</option>
                        <option value="6">Virginia Beach, USA</option>
                        <option value="7">Rio de Janeiro, Brazil</option>
                        <option value="8">Chisinau, Moldova</option>
                        <option value="9">Dubai, UAE</option>
                    </select>
                </form>
                <div id="txtHint"><b>beach info will be listed here.</b></div>
            <p>Popular Beach Arenas : Virginia, California, Texas</p>
        </div>
    </section>
        <img src="./assets/tree.png" alt="Ceci est la photo de l'arbre">
        <script src="./script.js"></script>
    </body>
</html>