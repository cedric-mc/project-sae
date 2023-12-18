<?php
session_start();
if(!isset($_SESSION["codeDeConfirmation"]) || empty($_SESSION["codeDeConfirmation"]) || !isset($_SESSION["email"]) || empty($_SESSION["email"]) || !isset($_SESSION["password"]) || empty($_SESSION["password"]) || !isset($_SESSION["login"]) || empty($_SESSION["login"]) || !isset($_SESSION["year"]) || empty($_SESSION["year"])) {
    header("Location: index.php");
    exit;
}
$codeDeConfirmation = $_SESSION["codeDeConfirmation"];
$email = $_SESSION["email"];
$password = $_SESSION["password"];
$login = $_SESSION["login"];
$year = $_SESSION["year"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
</head>

<body>
<h1>Confirmation</h1>
<form method="POST">
    <label for="code">Code de confirmation</label>
    <input type="text" name="code" id="code" required>
    <input type="submit" value="Confirmer">
</form>
<?php
if(isset($_POST["code"])) {
    $code = $_POST["code"];
    if($code == $codeDeConfirmation) {
        header("Location: profil.php");
    } else {
        echo "Code incorrect";
    }
}
?>
</body>
</html>
