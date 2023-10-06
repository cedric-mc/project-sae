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
            <?php
            $yearError = "";
            $emailError = "";
            $passwordError = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $year = $_POST["year"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                $currentYear = date("Y");
                if ($year < 1900 || $year > $currentYear && strlen($year) != 4) {
                    $yearError = "Année de naissance invalide.";
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailError = "L'adresse e-mail n'est pas au format valide.";
                }
                if (strlen($password) < 12) {
                    $passwordError = "Le mot de passe doit contenir au moins 12 caractères.";
                }
                if (!preg_match('/[0-9]/', $password)) {
                    $passwordError = "Le mot de passe doit contenir au moins un chiffre.";
                }
                if (!preg_match('/[A-Z]/', $password)) {
                    $passwordError = "Le mot de passe doit contenir au moins une majuscule.";
                }
                if (!preg_match('/[a-z]/', $password)) {
                    $passwordError = "Le mot de passe doit contenir au moins une minuscule.";
                }
                if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
                    $passwordError = "Le mot de passe doit contenir au moins un caractère spécial.";
                }
            }
            ?>
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