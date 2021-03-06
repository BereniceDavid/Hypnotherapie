<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Éveil & Vous - Me contacter</title>
	<link rel="icon" type="image/png" href="images/logo_hypno-01.png" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,300,100,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/style.css" />
</head>

<body>

	<header>
		<nav class="topBar">
			<div class="row">
				<ul class="center">
					<li class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2 col-xs-12"><a href="hypno.html" title="En savoir plus sur l'hypnothérapie">L'hypnothérapie</a></li>
					<li class="col-md-2 col-sm-3 col-xs-12"><a href="quisuisje.html" title="Qui suis-je ?">Qui suis-je ?</a></li>
					<li class="col-md-offset-2 col-md-2 col-sm-offset-1 col-sm-1 col-xs-12"><a href="contact.php" title="Contact" class="activePage">Contact</a></li>
					<li class="col-md-offset-0 col-md-2 col-sm-offset-1 col-sm-2"><a href="temoignages.html" title="Témoignages">Témoignages</a></li>
				</ul>
				<i class="fa fa-bars" aria-hidden="true"></i>
				<i class="fa fa-times" aria-hidden="true"></i>
				<a href="index.php" title="Aller à l'accueil" id="logoLink"><img id="logoHeader" src="images/logo_hypno-01.png" alt="logo Éveil & Vous" /></a>
			</div>
		</nav>
	</header>

	<div id="googlemap">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.036454272767!2d-0.878243948814773!3d47.05913523352608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480646a6b2c62807%3A0x8cdd2accc4ec4be9!2s25+Rue+Saint-Bonaventure%2C+49300+Cholet!5e0!3m2!1sfr!2sfr!4v1465903271335" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<section class="infosContact" id="contactMe">
		<div class="row" class="contactForm">
			<h1 class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4 col-xs-offset-1 col-xs-10">Me contacter</h1>
		</div>
		<form method="post" action="contact_form.php">

<?php  if(array_key_exists('errors', $_SESSION)): ?>
				<div class="col-md-offset-1 col-md-10 alert alert-danger">
					<?= implode('</br>', $_SESSION['errors']); ?>
				</div>
				<?php endif; ?>

					<?php  if(array_key_exists('success', $_SESSION)): ?>
						<div class="col-md-offset-1 col-md-10 alert alert-success">
							Votre email a bien été envoyé.
						</div>
						<?php endif; ?>

			<div class="row">
				<div class="col-md-offset-2 col-md-8 center">
					<input required type="text" name="firstName" placeholder="Prénom" />
					<input required type="text" name="lastName" placeholder="Nom" />
					<input required type="tel" name="phoneNumber" placeholder="Numéro de téléphone" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8 center">
					<input required type="text" name="adress" placeholder="Adresse" />
					<input type="text" name="complementAdress" placeholder="Complément d'adresse" />
					<input required type="number" name="postalCode" placeholder="Code postal" maxlength="5" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8 center">
					<input required type="text" name="town" placeholder="Ville" />
					<input required type="email" name="email" placeholder="Email" />
				</div>
			</div>
			</div>
			<div class="row">
				<div class="center col-md-offset-2 col-md-8">
					<label for="clientSession">Avez-vous déjà eu une séance d'hypnothérapie ?</label>
					<select name="firstSession" id="clientSession">
						<option value="yes">Oui</option>
						<option value="no" selected="selected">Non</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="center col-md-offset-2 col-md-8">
					<textarea required name="comment" rows="6" cols="80" placeholder="Pourquoi voulez-vous me contacter ? 
					
- Souhaitez-vous obtenir un renseignement en particulier ? 
- Ou souhaitez-vous tout simplement prendre rendez-vous ?"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8 center">
					<button type="submit" class="semiBold">Envoyer</button>
				</div>
			</div>
		</form>
	</section>

	<footer>
		<div class="row">
			<div class="col-md-offset-2 col-md-4 center col-sm-12 col-xs-12">
				<h3>ÉVEIL & VOUS</h2>
					<p>Cabinet d'hypnothérapie dirigé par</br>Christelle Quéraux</p>
					</br>
					<p>Rendez-vous sur Cholet ou à domicile selon la proximité</p>
				</div>
				<div class="col-md-4 center col-sm-12 col-xs-12">
					<h3>CONTACT</h2>
					<i class="fa fa-phone" aria-hidden="true"></i>
					<p>06.98.20.28.23</p>
					</br>
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<p>christelle.queraux@gmail.com</p>
					</br>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<p>25 Rue Saint-Bonaventure, 49300 Cholet</p>
					</br>
				</div>
			</div>
			<div class="row center" id="moreInfos">
				<a class="col-md-offset-4 col-md-2 col-sm-offset-2 col-sm-4 col-xs-6" href="mentions.html" title="voir les mentions légales">Mentions Légales</a>
				<p class="col-md-2 col-sm-4 col-xs-6">Éveil & Vous © 2016</p>
			</div>
		</footer>


	<script src="scripts/jquery-2.2.4.min.js"></script>
	<script src="https://use.fontawesome.com/0474f7d5d4.js"></script>
	<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
	<script src="scripts/main.js"></script>

</body>

</html>
<?php
		unset($_SESSION['inputs']);
		unset($_SESSION['success']);
		unset($_SESSION['errors']); 
	?>