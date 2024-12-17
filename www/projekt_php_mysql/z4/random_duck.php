<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$random_duck = json_decode(file_get_contents('https://random-d.uk/api/v2/random'), true);
print '
<h1>Random duck</h1>
<img src="' . $random_duck['url'] .'">
';
