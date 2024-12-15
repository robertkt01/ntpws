<?php 
	print '
	<ul>
		<li><a href="index.php?menu=1">Home</a></li>
		<li><a href="index.php?menu=2">News</a></li>
		<li><a href="index.php?menu=3">Contact</a></li>
		<li><a href="index.php?menu=4">About</a></li>
		<li><a href="index.php?menu=5">Gallery</a></li>';
	if (isset($_SESSION['user_id'])):
		print '<li><a href="?menu=8">Administracija</a></li>
			<li><a href="logout.php">Odjava</a></li>';
	else:
		print '<li><a href="?menu=6">Registracija</a></li>
			<li><a href="?menu=7">Prijava</a></li>';
	endif;
		print '</ul>';
?>
