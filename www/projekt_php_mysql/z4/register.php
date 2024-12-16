<?php
// Fetch states from the database
require_once 'database.php'; // Connect to the database
$query = "SELECT id, naziv FROM drzava ORDER BY naziv";
$result = $db->query($query);
?>

<h2>Registracija</h2>
<form action="register_user.php" method="post">
    <label for="ime">Ime:</label>
    <input type="text" id="ime" name="ime" required>
    
    <label for="prezime">Prezime:</label>
    <input type="text" id="prezime" name="prezime" required>
    
    <!-- <label for="username">Korisničko ime:</label> -->
    <!-- <input type="text" id="username" name="username" required> -->
    
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="drzava">Država:</label>
    <select id="drzava" name="drzava" required>
        <option value="">Odaberite državu</option>
        <?php while ($row = $result->fetch_assoc()): ?>
            <option value="<?= $row['id'] ?>"><?= htmlspecialchars($row['naziv']) ?></option>
        <?php endwhile; ?>
    </select>
    
    <label for="grad">Grad:</label>
    <input type="text" id="grad" name="grad" required>
    
    <label for="ulica">Ulica:</label>
    <input type="text" id="ulica" name="ulica" required>
    
    <label for="datum_rodjenja">Datum rođenja:</label>
    <input type="date" id="datum_rodjenja" name="datum_rodjenja" required>
    
    <label for="lozinka">Lozinka:</label>
    <input type="password" id="lozinka" name="lozinka" required>
    
    <button type="submit">Registriraj se</button>
</form>

