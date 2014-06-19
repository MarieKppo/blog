<?php 
	$title = "Page d'authentification";
	include_once('includes/actions.php');
	include_once('includes/header.php');
?>
		<h1>Formulaire d'authentification</h1>
		
		<hr /> <!-- sépare les parties de pages -->
		<br />
		<p>Veuillez vous authentifier pour accéder à l'espace protégé</p>
		
		<form action="login.php" method="post">
		
			<input type="hidden" name="action" value="login" />
			<fieldset class="fields"> <!-- jeu d'éléments -->
				<div class="row">
					<label for="username">Votre nom d'utilisateur</label>
					<input type="text" name="username" value="<?php 
						if (isset($_POST['username'])) {
						echo $_POST['username'];
						}
					?>" />
				</div>
				
				<div class="row">
					<label for="password">Votre mot de passe</label>
					<input type="password" name="password" value="<?php 
						if (isset($_POST['password'])) {
						echo $_POST['password'];
						}
					?>" />
				</div>
			</fieldset>
			
			<fieldset class="actions">
				<button type="submit">Connexion</button>
			</fieldset>
			
		</form>
<?php include_once('includes/footer.php');?>