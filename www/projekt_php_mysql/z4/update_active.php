<?php
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $active = $_POST['active'];

    $query = "UPDATE korisnik SET active = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ii', $active, $user_id);

    if ($stmt->execute()) {
        header('Location: http://localhost/projekt_php_mysql/z4/index.php?menu=8');
    } else {
        echo "Greška prilikom ažuriranja statusa.";
    }
}
?>

