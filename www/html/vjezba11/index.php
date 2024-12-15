<?php
function jeProst($broj) {
    if ($broj <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($broj); $i++) {
        if ($broj % $i == 0) {
            return false;
        }
    }
    return true;
}

function ispisiProsteBrojeve($max) {
    for ($i = 2; $i < $max; $i++) {
        if (jeProst($i)) {
            echo $i . " ";
        }
    }
}

// Ispis svih prostih brojeva manjih od 100
ispisiProsteBrojeve(100);
?>

