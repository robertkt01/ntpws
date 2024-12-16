<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: http://localhost/projekt_php_mysql/z4/index.php?menu=7');
    exit();
}

$query = "SELECT role FROM korisnik WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user['role'] === 'administrator') {
    $query = "SELECT id, ime, prezime, email, role, active FROM korisnik";
    $result = $db->query($query);

    echo "<h1>Administracija Korisnika</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Ime</th><th>Prezime</th><th>Email</th><th>Role</th><th>Aktivan</th><th>Akcije</th></tr>";

    while ($user = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$user['id']}</td>
            <td>{$user['ime']}</td>
            <td>{$user['prezime']}</td>
            <td>{$user['email']}</td>
            <td>
                <form method='post' action='update_role.php'>
                    <select name='role'>
                        <option value='user' " . ($user['role'] == 'user' ? 'selected' : '') . ">User</option>
                        <option value='editor' " . ($user['role'] == 'editor' ? 'selected' : '') . ">Editor</option>
                        <option value='administrator' " . ($user['role'] == 'administrator' ? 'selected' : '') . ">Administrator</option>
                    </select>
                    <input type='hidden' name='user_id' value='{$user['id']}'>
                    <button type='submit'>Spremi</button>
                </form>
            </td>
            <td>
                <form method='post' action='update_active.php'>
                    <input type='hidden' name='user_id' value='{$user['id']}'>
                    <button type='submit' name='active' value='" . ($user['active'] ? '0' : '1') . "'>"
                    . ($user['active'] ? 'Deaktiviraj' : 'Aktiviraj') .
                    "</button>
                </form>
            </td>
            <td><a href='http://localhost/projekt_php_mysql/z4/index.php?menu=11&id={$user['id']}'>Uredi</a></td>
            <td><a href='delete_user.php?id={$user['id']}'>Obriši</a></td>
        </tr>";
    }
    echo "</table>";
}
?>


<?php
// Fetch all news articles
$query = "SELECT * FROM vijesti";
$result = $db->query($query);

echo "<h1>Administracija Vijesti</h1>";
echo "
    <a href='http://localhost/projekt_php_mysql/z4/index.php?menu=9'>
        <button>Dodaj novu vijest</button>
    </a>
    ";
echo "<table>";
echo "<tr><th>ID</th><th>Naslov</th><th>Datum Unosa</th><th>Odobreno</th><th>Akcije</th></tr>";

while ($vijest = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$vijest['id']}</td>
        <td>{$vijest['naslov']}</td>
        <td>{$vijest['datum_unosa']}</td>
        <td>" . ($vijest['odobreno'] ? 'Da' : 'Ne') . "</td>
        <td>";
    if ($_SESSION['role'] === 'administrator' || $_SESSION['role'] === 'editor') {
        echo "<a href='http://localhost/projekt_php_mysql/z4/index.php?menu=10&id={$vijest['id']}'>Uredi</a> | 
                <a href='delete_news.php?id={$vijest['id']}'>Obriši</a> | ";
    }
    if ($_SESSION['role'] === 'administrator') {
        echo "
            <a href='approve_news.php?id={$vijest['id']}'>Odobri</a>
        </td>
    </tr>";
    }
}
echo "</table>";
?>
