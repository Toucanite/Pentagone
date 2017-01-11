<?php	
	echo '  <div class="menu">';
	// Si l'utilisateur est logué on affiche les menu "deconnexion" et "zone privée"

	--------[CODE A AJOUTER]--------
	
	// Sinon si il n'y a pas d'utilisateur logué on affiche "login" dans le menu

	--------[CODE A AJOUTER]--------
	
	// On affiche "a propos" et "bienvenue" en tout temps
	echo '		<div class="menuitem">
					<p><a href="'.$_SERVER['PHP_SELF'].'?page=about">A propos</a></p>
				</div>
				<div class="menuitem">
					<p><a href="'.$_SERVER['PHP_SELF'].'">Bienvenue</a></p>
				</div>
			</div>';
?>