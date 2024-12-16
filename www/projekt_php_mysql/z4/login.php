<?php if (isset($_GET['message']) && $_GET['message'] === 'success'): ?>
    <p>Uspješno registrirani! Molimo prijavite se.</p>
<?php endif; ?>

<h2>Prijava</h2>
<form action="login_user.php" method="post">
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="lozinka">Lozinka:</label>
    <input type="password" id="lozinka" name="lozinka" required>
    
    <button type="submit">Prijava</button>
</form>

