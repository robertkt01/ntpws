<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once 'database.php';

$result = $db->query("SELECT * FROM vijesti WHERE odobreno = 1 ORDER BY datum_unosa DESC");

print '
        <h1>Članci</h1>
        <section class="articles">
            <article class="article">
                <a href="clanak1.html"><img src="thumbnail1.jpg" alt="Thumbnail za članak 1"></a>
                <div class="article-content">
                    <h2><a href="clanak1.html">Naslov članka 1</a></h2>
                    <p>Kratki opis članka 1. Saznajte više o ovoj zanimljivoj temi.</p>
                    <p><strong>Datum objave:</strong> 10. prosinca 2024.</p>
                    <a href="clanak1.html">Više o članku...</a>
                </div>
            </article>
            <article class="article">
                <a href="#clanak2"><img src="thumbnail2.jpg" alt="Thumbnail za članak 2"></a>
                <div class="article-content">
                    <h2><a href="#clanak2">Naslov članka 2</a></h2>
                    <p>Kratki opis članka 2. Pronađite detalje o ovoj temi.</p>
                    <p><strong>Datum objave:</strong> 9. prosinca 2024.</p>
                    <a href="#clanak2">Više o članku...</a>
                </div>
            </article>
            <article class="article">
                <a href="#clanak3"><img src="thumbnail3.jpg" alt="Thumbnail za članak 3"></a>
                <div class="article-content">
                    <h2><a href="#clanak3">Naslov članka 3</a></h2>
                    <p>Kratki opis članka 3. Otkrijte sve što trebate znati.</p>
                    <p><strong>Datum objave:</strong> 8. prosinca 2024.</p>
                    <a href="#clanak3">Više o članku...</a>
                </div>
            </article>
            <article class="article">
                <a href="#clanak4"><img src="thumbnail4.webp" alt="Thumbnail za članak 4"></a>
                <div class="article-content">
                    <h2><a href="#clanak4">Naslov članka 4</a></h2>
                    <p>Kratki opis članka 4. Pročitajte najnovije informacije.</p>
                    <p><strong>Datum objave:</strong> 7. prosinca 2024.</p>
                    <a href="#clanak4">Više o članku...</a>
                </div>
            </article>
            <article class="article">
                <a href="#clanak5"><img src="thumbnail5.jpg" alt="Thumbnail za članak 5"></a>
                <div class="article-content">
                    <h2><a href="#clanak5">Naslov članka 5</a></h2>
                    <p>Kratki opis članka 5. Pronađite više informacija.</p>
                    <p><strong>Datum objave:</strong> 6. prosinca 2024.</p>
                    <a href="#clanak5">Više o članku...</a>
                </div>
            </article>';
while ($vijest = $result->fetch_assoc()) {
    echo '
            <article class="article">
                <a href="http://localhost/projekt_php_mysql/z4/index.php?menu=12&id=' . $vijest['id'] . '"><img src="thumbnail5.jpg" alt="Thumbnail za članak 5"></a>
                <div class="article-content">
                    <h2><a href="http://localhost/projekt_php_mysql/z4/index.php?menu=12&id=' . $vijest['id'] . '">' . $vijest['naslov'] . '</a></h2>
                    <p><strong>Datum objave:</strong> ' . $vijest['datum_unosa'] . '</p>
                    <a href="http://localhost/projekt_php_mysql/z4/index.php?menu=12&id=' . $vijest['id'] . '">Više o članku...</a>
                </div>
            </article>';
}
echo '</section>';
?>
