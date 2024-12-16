<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php'; // Include database connection

$email = $_POST['email'];
$lozinka = $_POST['lozinka'];

$query = "SELECT id, ime, prezime, lozinka, role, active FROM korisnik WHERE email = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($lozinka, $user['lozinka'])) {
        if ($user['active'] == 0) {
            echo "Korisnik nije aktiviran.";
            exit();
        }
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['ime'] = $user['ime'];
        $_SESSION['prezime'] = $user['prezime'];
        $_SESSION['role'] = $user['role'];
        header('Location: http://localhost/projekt_php_mysql/z4?menu=1&login=success');
    } else {
        echo "Neispravna lozinka.";
    }
} else {
    echo "Korisnik ne postoji.";
}
?>

