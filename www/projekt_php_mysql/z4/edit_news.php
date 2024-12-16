<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] === 'user') {
    echo "Nemate prava za uređivanje vijesti.";
    exit();
}

$id = $_GET['id'];
$query = "SELECT * FROM vijesti WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('i', $id);
$stmt->execute();
$vijest = $stmt->get_result()->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naslov = $_POST['naslov'];
    $tekst = $_POST['tekst'];
    $query = "UPDATE vijesti SET naslov = ?, tekst = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ssi', $naslov, $tekst, $id);

    if ($stmt->execute()) {
        header('Location: http://localhost/projekt_php_mysql/z4/index.php?menu=8');
    }
}
?>

<h1>Uređivanje Vijesti</h1>
<form method="post">
    <label>Naslov:</label>
    <input type="text" name="naslov" value="<?= htmlspecialchars($vijest['naslov']) ?>" required>
    <label>Tekst:</label>
    <textarea name="tekst" required><?= htmlspecialchars($vijest['tekst']) ?></textarea>
    <button type="submit">Spremi Promjene</button>
</form>

