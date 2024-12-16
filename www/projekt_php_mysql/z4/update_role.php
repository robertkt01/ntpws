<?php
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $role = $_POST['role'];

    $query = "UPDATE korisnik SET role = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('si', $role, $user_id);

    if ($stmt->execute()) {
        header('Location: http://localhost/projekt_php_mysql/z4/index.php?menu=8');
    } else {
        echo "Greška prilikom ažuriranja role.";
    }
}
?>
