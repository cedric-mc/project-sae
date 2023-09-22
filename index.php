<html>
    <head>
        <meta charset="utf-8">
        <title>Création d'un compte pour le joueur ou connexion</title>
    </head>

    <body>
        <header>
            <h1>Création d'un compte pour le joueur ou connexion</h1>
        </header>
        <main>
            <h2>Création d'un compte</h2>
            <form action="validation_mail.php" method="POST">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" required><br>
                <label for="year">Année de naissance</label>
                <input type="number" name="year" id="year" required><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required><br>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
                <br><br>
                <input type="submit" value="Envoyer">
            </form>

            <h2>Connexion</h2>
            <form action="auth.php" method="POST">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" required><br>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
                <br><br>
                <input type="submit" value="Envoyer">
            </form>
        </main>
    </body>
</html>