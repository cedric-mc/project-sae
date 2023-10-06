<?php
session_start();
if(!isset($_SESSION["codeDeConfirmation"])) {
    header("Location: index.php");
    exit;
}
$codeDeConfirmation = $_SESSION["codeDeConfirmation"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
</head>

<body>
<h1>Confirmation</h1>
<form action="" method="POST">
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
