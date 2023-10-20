<?php
if (!isset($_POST["login"]) || !isset($_POST["password"])) {
    header("Location: index.php");
    exit();
}
$login = $_POST["login"];
$password = $_POST["password"];
include("conf.php");
$requete = "SELECT * FROM USER WHERE login = :login";
$resultat = $cnx->prepare($requete);
$resultat->bindParam(':login', $login, PDO::PARAM_STR);
$resultat->execute();
$user = $resultat->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['email'] = $user['email'];
    $_SESSION['year'] = $user['year'];
    header('location: account.php');
} else {
    header('location: index.php');
}

$resultat->closeCursor();
?>
