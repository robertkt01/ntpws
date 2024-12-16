<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php';

if ($_SESSION['role'] !== 'administrator') {
    echo "Nemate prava za odobravanje vijesti.";
    exit();
}

$id = $_GET['id'];
$query = "UPDATE vijesti SET odobreno = TRUE WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    header('Location: http://localhost/projekt_php_mysql/z4/index.php?menu=8');
} else {
    echo "Došlo je do greške.";
}
?>

