<?php
session_start();
if (!isset($_SESSION['login']) || empty($_SESSION['login']) || !isset($_SESSION['email']) || empty($_SESSION['email']) || !isset($_SESSION['year']) || empty($_SESSION['year'])) {
    header('Location: index.php');
    exit();
}
$login = $_SESSION['login'];
$email = $_SESSION['email'];
$year = $_SESSION['year'];
?>
<html>
<head>
    <title>Mon compte</title>
    <style>
        body {
            font-family: sans-serif;
        }

        /* Fait moi un beau bouton pour me déconnecter */
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #eee;
            border-radius: 5px;
            text-decoration: none;
            color: #000;
        }

        /* Fait moi un beau bouton pour me déconnecter */
        a:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
<p>
    Bienvenue <?php echo $login; ?> !<br />
    Tu es à l'accueil de ton compte. Tu peux voir tes informations personnelles ici.
</p>

<p>
    Voici tes informations de compte :
    <ul>
        <li>Ton login : <?php echo $login; ?></li>
        <li>Ton email : <?php echo $email; ?></li>
        <li>Ton année de naissance : <?php echo $year; ?></li>
    </ul>
</p>
<a href="logout.php">Se déconnecter</a>
</body>
</html>
