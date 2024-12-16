<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php';

if ($_SESSION['role'] === 'administrator') {
    $user_id = $_GET['id'];

    $query = "DELETE FROM korisnik WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $user_id);

    if ($stmt->execute()) {
        header('Location: http://localhost/projekt_php_mysql/z4/index.php?menu=8');
    } else {
        echo "Greška prilikom ažuriranja role.";
    }
}
?>

