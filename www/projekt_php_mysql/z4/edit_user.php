<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'administrator') {
    echo "Nemate prava za uređivanje korisnika.";
    exit();
}

$id = $_GET['id'];
$query = "SELECT * FROM korisnik WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('i', $id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $query = "UPDATE korisnik SET ime = ?, prezime = ?, email = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sssi', $ime, $prezime, $email, $id);

    if ($stmt->execute()) {
        header('Location: http://localhost/projekt_php_mysql/z4/index.php?menu=8');
    }
}
?>

<h1>Uređivanje Korisnika</h1>
<form method="post">
    <label>Ime:</label>
    <input type="text" name="ime" value="<?= htmlspecialchars($user['ime']) ?>" required>
    <label>Prezime:</label>
    <input type="text" name="prezime" value="<?= htmlspecialchars($user['prezime']) ?>" required>
    <label>Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    <button type="submit">Spremi Promjene</button>
</form>


