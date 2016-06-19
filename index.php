<?php session_start(); ?>
	<!DOCTYPE html>
	<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<title>Éveil & Vous</title>
		<link rel="icon" type="image/png" href="images/logo_hypno-01.png" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,300,100,600,700' rel='stylesheet' type='text/css'>
		<script src="https://use.fontawesome.com/0474f7d5d4.js"></script>
		<link rel="stylesheet" href="styles/style.css" />
	</head>

	<body>

		<header>
			<nav id="topBar">
				<div class="row">
					<ul class="center">
						<li class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2 col-xs-12"><a href="hypno.html" title="En savoir plus sur l'hypnothérapie">L'hypnothérapie</a></li>
						<li class="col-md-2 col-sm-3 col-xs-12"><a href="quisuisje.html" title="Qui suis-je ?">Qui suis-je ?</a></li>
						<li class="col-md-offset-2 col-md-2 col-sm-offset-1 col-sm-1 col-xs-12"><a href="contact.html" title="Contact">Contact</a></li>
						<li class="col-md-offset-0 col-md-2 col-sm-offset-1 col-sm-2"><a href="temoignages.html" title="Témoignages">Témoignages</a></li>
					</ul>
					<i class="fa fa-bars" aria-hidden="true"></i>
					<i class="fa fa-times" aria-hidden="true"></i>
					<a href="index.php" title="Aller à l'accueil" id="logoLink"><img id="logoHeader" src="images/logo_hypno-01.png" alt="logo Éveil & Vous" /></a>
				</div>
			</nav>
		</header>

		<!--		welcomeSection  -->
		<section id="welcomeSection">
			<img src="images/background-image.png" alt="backgroundImage" />
			<span class="infos col-md-12 col-sm-12 col-xs-12">
					<h1 class="thin">ÉVEIL & VOUS</h1>
					<p class="semiBold">Christelle Quéraux</p>
					<p class="regular">Hypnothérapeute à Cholet</p>
					<p id="phoneNumber" class="semiBold">06.27.32.25.14</p>
					<button type="button">Me contacter</button>
            
					<div class="clearBoth"></div>
					<a id="arrow" class="glyphicon glyphicon-menu-down" title="Voir plus détails" href="#whoAmI"></a>
				</span>
		</section>

		<!--		Qui suis-je ?  -->
		<section id="whoAmI">
			<div class="row">
				<h1 class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4 col-xs-offset-1 col-xs-10">Qui suis-je ?</h1>
			</div>
			<div class="row">
				<div class="col-md-offset-2 center col-md-2 col-sm-offset-1 col-sm-3 col-xs-12">
					<!--				<video src="" controls></video>-->
					<img src="images/christelle-queraux.jpg" alt="Christelle Quéraux" />
				</div>
				<div class="col-md-5 col-sm-6 col-xs-offset-1 col-xs-10 justify" id="description">
					<p> Après une longue expérience en Ressources Humaines, j’ai souhaité allier ma passion des relations humaines et du développement personnel à l’hypnose thérapeutique dans l’objectif d’aider les personnes à favoriser leur mieux être.</p>
					<p>Le respect, la sincérité, l’écoute, l’empathie et l’humilité sont les valeurs humaines qui m’animent au quotidien.</p>
					<p>Mes séances d’hypnose se déroulent dans la bienveillance et avec beaucoup d’humanité.</p>
					<button type="button" class="semiBold">Me contacter</button>
				</div>
			</div>
		</section>

		<!--		L'hypnothérapie pour quoi ?  -->
		<section id="forWhat">
			<div class="row">
				<h1 class="col-md-offset-2 col-md-5 col-sm-offset-2 col-sm-5 col-xs-offset-1 col-xs-10">L'hypnothérapie, pour quoi ?</h1>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-2 col-sm-offset-1 col-sm-2 col-xs-offset-2 col-xs-8">
					<div class="relative center card">
						<div class="front">
							<img src="images/stress.jpg" alt="hey" />
						</div>
						<div class="back">
							<span class="hoverImg">
						<h3 class="semiBold">L'anxiété</h3>
								<p>Mais aussi le stress, les angoisses,</br>la dépression, les phobies, les traumatismes et insomnies.</p>
						</div>
					</span>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-2 col-sm-offset-2 col-sm-2 col-xs-offset-2 col-xs-8">
						<div class="relative center card">
							<div class="front">
								<img src="images/addiction.jpg" alt="hey" />
							</div>
							<div class="back">
								<span class="hoverImg">
						<h3 class="semiBold">Les addictions</h3>
						<p>Tabac, alcool, drogue, jeux.</p>
					</span>
							</div>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-2 col-sm-offset-2 col-sm-2 col-xs-offset-2 col-xs-8">
						<div class="relative center card">
							<div class="front">
								<img src="images/alimentation.jpg" alt="hey" />
							</div>
							<div class="back">
								<span class="hoverImg">
						<h3 class="semiBold">Les troubles  alimentaires</h3>
						<p>Anorexie, boulimie, obésité.</p>
					</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-2 col-md-2 col-sm-offset-1 col-sm-2 col-xs-offset-2 col-xs-8">
						<div class="relative center card">
							<div class="front">
								<img src="images/skin.JPG" alt="hey" />
							</div>
							<div class="back">
								<span class="hoverImg">
									<h3 class="semiBold">Les maladies</br>de peau</h3>
									<p>Eczéma, psoriasis, acné.</p>
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-2 col-sm-offset-2 col-sm-2 col-xs-offset-2 col-xs-8">
						<div class="relative center card">
							<div class="front">
								<img src="images/confidence.jpg" alt="hey" />
							</div>
							<div class="back">
								<span class="hoverImg">
									<h3 class="semiBold">La confiance</br>en soi</h3>
									<p>Développer l'estime de soi, l'affirmation de soi.</p>
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-2 col-sm-offset-2 col-sm-2 col-xs-offset-2 col-xs-8">
						<div class="relative center card">
							<div class="front">
								<img src="images/mourning.jpg" alt="hey" />
							</div>
							<div class="back">
								<span class="hoverImg">
									<h3 class="semiBold">Accepter</br>une perte</h3>
									<p>Une séparation difficile,</br>un deuil.</p>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-2 col-md-6">
					<span id="precision">L'hypnothérapie est une médecine qui peut soigner tous ces problèmes et bien plus encore.</span>
					</div>
				</div>
		</section>

		<!--		Google agenda + formulaire de contact  -->
		<section class="infosContact">
			<div class="row">
				<h1 class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-5 col-xs-offset-1 col-xs-10">Mes disponibilités</h1>
			</div>
			<div class="row center">
				<iframe class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12 " src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=500&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=jl1urnusetsclf6l07mq36204s%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=Europe%2FParis" style="border-width:0" width="900" height="500" frameborder="0" scrolling="no"></iframe>
			</div>
			<div class="row" class="contactForm" id="indexForm">
				<h1 class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4 col-xs-offset-1 col-xs-10">Me contacter</h1>
			</div>


			<form method="post" action="index_form.php">

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
										<input required type="text" name="firstName" placeholder="Prénom" value="<?= isset($_SESSION['inputs']['firstName']) ? $_SESSION['inputs']['firstName'] : ''; ?>" />
										<input required type="text" name="lastName" placeholder="Nom" value="<?= isset($_SESSION['inputs']['lastName']) ? $_SESSION['inputs']['lastName'] : ''; ?>" />
									</div>
								</div>
								<div class="row">
									<div class="center col-md-offset-2 col-md-8">
										<input required type="tel" name="phoneNumber" placeholder="Numéro de téléphone" value="<?= isset($_SESSION['inputs']['phoneNumber']) ? $_SESSION['inputs']['phoneNumber'] : ''; ?>" />
									</div>
								</div>
								<div class="row">
									<div class="center col-md-offset-2 col-md-8">
										<input required type="email" name="email" placeholder="Email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>" />
									</div>
								</div>
								<div class="row">
									<div class="col-md-offset-2 col-md-8 center">
										<label for="clientSession">Avez-vous déjà eu une séance d'hypnothérapie</label>
										<select name="firstSession" id="clientSession">
											<option value="yes">Oui</option>
											<option value="no" selected="selected">Non</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="center col-md-offset-2 col-md-8">
										<textarea required name="comment" rows="6" cols="80" placeholder="Souhaitez-vous obtenir un renseignement en particulier ? Ou souhaitez-vous tout simplement prendre rendez-vous ?"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-offset-2 col-md-8">
										<button type="submit">Envoyer</button>
									</div>
								</div>
			</form>
		</section>

		<footer>
			<div class="col-md-offset-3 col-md-3">
				<h2>ÉVEIL & VOUS</h2>
				<p>Cabinet d'hypnothérapie dirigé par</br>Christelle Quéraux</p>
				<p>Rendez-vous sur Cholet</p>
			</div>
			<div class="col-md-3">
				<div>
					<h2>CONTACT</h2>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<p>25 Rue Saint-Bonaventure</br>49300 Cholet</p>
					<i class="fa fa-phone" aria-hidden="true"></i>
					<p>06.98.20.28.23</p>
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<p>christelle.queraux@gmail.com</p>
					<a href="#" title="voir les mentions légales">Mentions Légales</a>
				</div>
			</div>
			<div class="clearBoth"></div>
		</footer>

		<script src="scripts/jquery-2.2.4.min.js"></script>
		<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
		<script src="scripts/main.js"></script>
	</body>

	</html>
	<?php
		unset($_SESSION['inputs']);
		unset($_SESSION['success']);
		unset($_SESSION['errors']); 
	?>