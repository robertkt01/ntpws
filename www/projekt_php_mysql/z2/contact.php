<?php
print '
        <h1>Kontaktirajte nas</h1>
        <section class="map">
            <h2>Naša lokacija</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093714!2d144.96305781531582!3d-37.81627944202142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e33!2zU3dlZGVuIFBvZGxheQ!5e0!3m2!1sen!2shr!4v1696664807721!5m2!1sen!2shr" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <section>
            <h2>Kontaktirajte nas putem forme</h2>
            <form action="/submit-form" method="post">
                <label for="ime">Ime *</label>
                <input type="text" id="ime" name="ime" placeholder="Vaše ime" required>

                <label for="prezime">Prezime *</label>
                <input type="text" id="prezime" name="prezime" placeholder="Vaše prezime" required>

                <label for="email">Email adresa *</label>
                <input type="email" id="email" name="email" placeholder="vaša.email@primjer.com" required>

                <label for="drzava">Država</label>
                <select id="drzava" name="drzava">
                    <option value="hrvatska">Hrvatska</option>
                    <option value="slovenija">Slovenija</option>
                    <option value="bosna">Bosna i Hercegovina</option>
                    <option value="srbija">Srbija</option>
                    <option value="ostalo">Ostalo</option>
                </select>

                <label for="opis">Opis</label>
                <textarea id="opis" name="opis" rows="5" placeholder="Napišite vašu poruku..."></textarea>

                <button type="submit">Pošalji</button>
            </form>
        </section>
';
?>
