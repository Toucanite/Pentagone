<?php
	// Démarrer une session
	session_start();
	// Vérifier si on demande un logout et si oui le faire
	if (isset($_GET['logout'])) {
		session_destroy();
		session_start();
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Login avec session</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div>
			<?php
				// Afficher le menu contenu dans "menu.php"

				include 'menu.php';


			?>
			<br />
		</div>
			<?php
				// Vérifier la page à afficher (paramètre "page" dans l'URL en GET) et en fonction afficher la bonne page
				if (isset($_GET['page'])) {
					include $_GET['page'].'.php';
				}
				else {
					include 'welcome.php';
				}


				// S'il n'y a pas de paramètre "page" par défaut on affiche "welcome.php"

				//--------[CODE A AJOUTER]--------

			?>
    </body>
</html>
