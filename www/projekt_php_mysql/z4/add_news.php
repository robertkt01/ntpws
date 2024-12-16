<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: http://localhost/projekt_php_mysql/z4/index.php?menu=7');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naslov = $_POST['naslov'];
    $tekst = $_POST['tekst'];

    $stmt = $db->prepare("INSERT INTO vijesti (naslov, tekst) VALUES (?, ?)");
    $stmt->bind_param("ss", $naslov, $tekst);
    $stmt->execute();
    $vijest_id = $stmt->insert_id;
    $stmt->close();

    if (!empty($_FILES['slike']['name'][0])) {
        $target_dir = "uploads/";
        foreach ($_FILES['slike']['tmp_name'] as $key => $tmp_name) {
            $file_name = basename($_FILES['slike']['name'][$key]);
            $target_file = $target_dir . $file_name;

            if (move_uploaded_file($tmp_name, $target_file)) {
                $stmt = $db->prepare("INSERT INTO slike (vijest_id, putanja) VALUES (?, ?)");
                $stmt->bind_param("is", $vijest_id, $target_file);
                $stmt->execute();
                $stmt->close();
            }
        }
    }

    // header('Location: http://localhost/projekt_php_mysql/z4/index.php?menu=8');
}
?>

<h1>Dodavanje Vijesti</h1>
<form method="post" enctype="multipart/form-data">
    <label>Naslov:</label>
    <input type="text" name="naslov" required>
    <label>Tekst:</label>
    <textarea name="tekst" required></textarea>
    <!-- <textarea name="tekst2" id="tekst2"></textarea> -->
    <label for="slike">Dodajte slike (više slika):</label>
    <input type="file" id="slike" name="slike[]" multiple>
    <button type="submit">Dodaj Vijest</button>
</form>

<!-- api key required -->
<!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
<!-- <script> -->
<!--     tinymce.init({ -->
<!--         selector: 'textarea#tekst2', // Match the ID of your textarea -->
<!--         plugins: 'lists link image table', -->
<!--         toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image table', -->
<!--         height: 400, -->
<!--         menubar: false, -->
<!--     }); -->
<!-- </script> -->
