<?php
	// On vérifie si l'utilisateur est logué et si oui on affiche les informations confidentielles

	if (isset($_SESSION['user'])) {
		echo '<p>
				<u>Note à tous le personnel</u><br /><br />
				Nous avons retrouvé Ben Laden il se cache dans la maison de Kadhafi en Lybie
			  </p>';
	}
	else {
		echo '<p>
				Erreur! Accès à la zone privée refusé, vous devez vous enregistrer d\'abord.
			  </p>';
	}

	// Si l'utilisateur n'est pas logué on affiche un message pour lui dire qu'il ne peut pas voir les données




?>
