<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php';
$id = $_GET['id'];
$query = "SELECT * FROM vijesti WHERE odobreno = 1 AND id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$vijest = $result->fetch_assoc();
$query = "SELECT * FROM slike WHERE vijest_id = ?";
$stmt = $db->prepare($query);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
?>
        <article>
            <?php while ($slika = $result->fetch_assoc()) { ?>
            <section class="gallery">
                <figure>
                    <img src="<?php echo $slika['putanja'] ?>" alt="">
                </figure>
            </section>
            <?php } ?>
            <h1><?php echo $vijest['naslov'] ?></h1>
            <p><strong>Datum objave:</strong> <?php echo $vijest['datum_unosa'] ?></p>
            <section class="content">
                <?php echo $vijest['tekst'] ?>
            <a href="http://localhost/projekt_php_mysql/z4/index.php?menu=2" class="back-link">&larr; Povratak na članke</a>
        </article>

