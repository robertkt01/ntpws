<?php
ob_start();

	define('__APP__', TRUE);
	
	# Start session
	session_start();
	
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
print '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Primjer HTML5 dokumenta.">
    <meta name="keywords" content="HTML5, dijakritički znakovi, meta oznake, mobilni uređaji">
    <meta name="author" content="Robert">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="banner.jpg" alt="Zaglavlje stranice">
    <nav>';
        include("menu.php");
print '</nav>
	</header>
	<main' . (isset($_SESSION['news_title_1']) ? ' class="session"' : '') .'>';
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	# News
	else if ($menu == 2) { include("news.php"); }
	
	# Contact
	else if ($menu == 3) { include("contact.php"); }
	
	# About us
	else if ($menu == 4) { include("about-us.php"); }
	
	# Gallery
	else if ($menu == 5) { include("gallery.php"); }
	
	# Register
	else if ($menu == 6) { include("register.php"); }
	
	# Login
	else if ($menu == 7) { include("login.php"); }
	
	# Admin
	else if ($menu == 8) { include("admin.php"); }
	
	# Add news
	else if ($menu == 9) { include("add_news.php"); }
	
	# Edit news
	else if ($menu == 10) { include("edit_news.php"); }
	
	# Edit user
	else if ($menu == 11) { include("edit_user.php"); }
	
	# Articles
	else if ($menu == 12) { include("articles.php"); }
	
	print '
	</main>';
	if (!empty($_SESSION['news_title_1']) || !empty($_SESSION['news_title_2']) || !empty($_SESSION['news_title_3'])) {
		print '
		<aside><h2 style="text-align:center">ZADNJE PREGLEDANO</h2>';
		# ispis vrijednosti $_SESSION
		// var_dump($_SESSION);
		print '
		</aside>';
	}
	print '
    <footer>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="https://www.linkedin.com" target="_blank"><img src="linkedin-icon.png" alt="Twitter"></a>
        </div>
        <div>
            <p style="text-center">Copyright © 2024 Robert.</p>
            <a href="https://www.github.com/robertkt01"><img src="github-icon.png" alt="GitHub" style="width: 20px; height: 20px; vertical-align: middle;"></a>
        </div>
    </footer>
</body>
</html>';

ob_end_flush();
