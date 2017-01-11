<?php
	if(isset($_SESSION['user'])) {
		// Afficher un message pour dire à l'utilisateur qu'il est correctement enregistré
		
		--------[CODE A AJOUTER]--------
		
	} else {					
		// Constantes
		$md5Login = "5aa4919925ee0d6d0a57b3002d91f039"; //Rambo
		$md5Password = "202cb962ac59075b964b07152d234b70"; //123
		// Réinitialise toutes les variables
		$login = "";
		$password = "";	
		$erreurlogin = "";
		$erreurpassword	= "";
		$erreurconnection = "";
		$erreurs = TRUE;
		
		// Test tous les champs qu'on peut recevoir
		if (isset($_POST['valider'])) {	
			$erreurs = FALSE;
			
			// Test si le login est OK
			if (!isset($_POST['login']) OR empty($_POST['login'])) {
				$erreurlogin = '<br /><span class="red">Erreur! Entrez un login svp</span>';
				$erreurs = TRUE;
			} else {
				$login = $_POST['login'];
			}
			
			// Test si le password est OK
			if (!isset($_POST['password']) OR empty($_POST['password'])) {
				$erreurpassword = '<br /><span class="red">Erreur! Entrez un password svp</span>';
				$erreurs = TRUE;
			} else {
				$password = $_POST['password'];						
			}
			
			// Check si le login et password sont correctes s'il n'y a pas eu d'erreurs
			if (!$erreurs) {
				if (md5($login) != $md5Login OR md5($password) != $md5Password) {
					$erreurconnection = '<br /><span class="red">Erreur! login ou mot de passe incorrect</span>';
					$erreurs = TRUE;
				}
			}
		}							
									
		// S'il n'y a pas d'erreurs on enregistre l'utilisateur, sinon on affiche le formulaire
		if (!$erreurs) {	
			// On ajoute le nom de l'utilisateur dans une variable de session pour savoir qu'on est logué
			
			--------[CODE A AJOUTER]--------
			
			// On recharge la page de login pour faire apparaitre les menus cachés
			echo "<meta http-equiv='refresh' content='0'; URL='".$_SERVER['PHP_SELF']."'>";
		} else {
			echo '						
				<div id="formulaire">
					<form method="post" action="'.$_SERVER['PHP_SELF'].'?page=login">
					<fieldset>
						<table>
							<tr>
								<td>
									Login :
								</td>
								<td>
									<input type="text" name="login" id="login" size="30" maxlength="30" value="'.$login.'" />';
			echo $erreurlogin;
			echo '				</td>									
							</tr>
							<tr>
								<td>
									Password :
								</td>
								<td>
									<input type="text" name="password" id="password" size="30" maxlength="30" value="'.$password.'"/>';
			echo $erreurpassword;
			echo '				</td>
							</tr>
							<tr>
								<td colspan="2" class="cellule_centree">';
			echo $erreurconnection;
			echo '					<br />
									<input type="submit" id="valider" name="valider" />							
									<form method="post" action="'.$_SERVER['PHP_SELF'].'?page=login">
										<input type="submit" value="Effacer" id="annuler" />
									</form>
								</td>
							</tr>
						</table>
					</fieldset>
					</form>
				</div>';						
		}
	}
?>