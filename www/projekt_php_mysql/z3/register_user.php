<?php
require_once 'database.php'; // Include database connection

// Get form data
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$email = $_POST['email'];
$drzava_id = $_POST['drzava'];
$grad = $_POST['grad'];
$ulica = $_POST['ulica'];
$datum_rodjenja = $_POST['datum_rodjenja'];
$lozinka = password_hash($_POST['lozinka'], PASSWORD_BCRYPT); // Encrypt password

// $username = $_POST['username'];
$username = strtolower(substr($ime, 0, 1) . $prezime);
$username_query = "SELECT COUNT(*) AS count FROM korisnik WHERE username LIKE '$username%'";
$result = $db->query($username_query);
$row = $result->fetch_assoc();
if ($row['count'] > 0) {
    $username .= $row['count'];
}

// Insert user into database
$query = "INSERT INTO korisnik (ime, prezime, email, drzava_id, grad, ulica, datum_rodjenja, lozinka, username)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $db->prepare($query);
$stmt->bind_param('sssssssss', $ime, $prezime, $email, $drzava_id, $grad, $ulica, $datum_rodjenja, $lozinka, $username);

if ($stmt->execute()) {
    header('Location: http://localhost/projekt_php_mysql/z3?menu=7&message=success');
} else {
    echo "Greška prilikom registracije.";
}
?>

