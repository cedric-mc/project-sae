<?php
session_start();
if (!isset($_SESSION['login']) || empty($_SESSION['login']) || !isset($_SESSION['email']) || empty($_SESSION['email']) || !isset($_SESSION['year']) || empty($_SESSION['year'])) {
    header('Location: index.php');
    exit();
}
session_destroy();
header('Location: index.php?logout=1');
?>