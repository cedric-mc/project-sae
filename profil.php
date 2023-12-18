<?php
session_start();
if (empty($_SESSION['login']) || empty($_SESSION['password']) || empty($_SESSION['email']) || empty($_SESSION["year"])) {
    header('Location: index.php');
    exit();
}
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$email = $_SESSION['email'];
$year = $_SESSION["year"];

$password = password_hash($password, PASSWORD_DEFAULT);
$requete = "INSERT INTO USER (login, year, email, password) VALUES (:login, :year, :email, :password)";
try {
    $resultat = $cnx->prepare($requete);
    echo 5;
    $resultat->bindParam(':login', $login, PDO::PARAM_STR);
    $resultat->bindParam(':year', $year, PDO::PARAM_INT);
    $resultat->bindParam(':email', $email, PDO::PARAM_STR);
    $resultat->bindParam(':password', $password, PDO::PARAM_STR);
    $resultat->execute();
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
echo "Tu es inscrit(e) !";
?>