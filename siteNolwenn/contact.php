<!doctype html>
<html lang="fr">
<head>
<?php include('include/inc_head.php') ?>
<meta name="description" content="contact"/>
<title>Contact</title>
</head>

<body role="document">
	<div class="content">
		<nav class="skip"><?php include('include/inc_skip.php') ?>
		</nav>
		<header class="header" role="banner">
				<?php include('include/inc_header.php') ?>
		</header>

		<nav class="menu" role="navigation"><?php include('include/inc_menu.php') ?>
		</nav>

		<article id="main" role="main">
		<div id="ancre_main"></div>
			<h3>Formulaire de contact</h3>
			<h4>Veuillez remplir ce formulaire afin de nous contacter</h4>
			<h5>(*) Les champs précédés d'une astérisque sont obligatoires</h5>
			<section class="exercice html">
			<h4>Nous contacter</h4>
			<form method="post" action="resultat.php" enctype="multipart/form-data">
				<input type="hidden" name="parametre cache" value="parametre caché"/>
				<fieldset>
				<legend>Nous contacter par mail</legend>
				<p class="field">
					<label for="nom1">*Nom</label>
					<input type="text" name="nom1" id="nom1" value="" size="15" maxlength="20"/>
				</p>

				<p class="field">
					<label for="prenom1">*Prénom</label>
					<input type="text" name="prenom1" id="nom1" value="" size="15" maxlength="20"/>
				</p>

				<p class="field">
					<label for="email">*Email</label>
					<input id="email" class="h5-email" type="email"
					maxlength="40" size="30" name="email" required="required" value="" placeholder="Saisir une adresse email valide"/>
				</p>

				<p class="field">
					<label for="sujet">*Objet du message</label>
					<input id="sujet" class="h5-sujet" type="sujet" maxlength="30" size="20" name="sujet" required="required" value="" placeholder="objet du message"/>
				</p>
				<p class="field">
					<label for="nom2">*Message</label>
					<textarea name="message" id="nom2" cols="80" rows="4"></textarea>
				</p>
				<p class="button">
					<input type="reset" value="Annuler"/>
					<input type="submit" value="Envoyer"/>
				</p>

				</form>
				</section>

				<h3>Un plan d'accès aux locaux de Dévelopont</h3>
				<section class="exercice html">
					<h4>Nous rendre visite</h4>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22545.28288336239!2d5.327721931044048!3d45.06225797520093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478abb82046dcbe1%3A0xce9c6af3c67f8452!2s38680+Pont-en-Royans!5e0!3m2!1sfr!2sfr!4v1496045830866" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><a href="https://www.google.fr/maps/place/Legrand+France/@45.1481754,5.3131242,15z/data=!4m5!3m4!1s0x0:0x88bdc0e74bfeab06!8m2!3d45.1481754!4d5.3131242" style="color:#0000FF;text-align:left"l></a>
				
				</section>
				<section>
					<h4> Itinéraire</h4>
					<ol> plan de route depuis Saint-Marcellin ( Gare )
						<li>Prendre à droite Avenue du Vercors et continuer sur 1,6 km</li>
						<li>Au rond-point, prendre à gauche D518 et continuer sur 300 m</li>
						<li>Sortir de Saint-Marcellin et continuer sur 2,8 km</li>
						<li>Entrer dans Saint-Romans et continuer sur 500 m </li>
						<li>Prendre à droite Grande Rue et continuer sur 700 m </li>
						<li>Sortir de Saint-Romans et continuer sur 7,8 km </li>
						<li>Entrer dans Pont-en-Royans et continuer sur 600 m</li>
						<li>Prendre à droite Place du Breuil</li>
						<li> Vous êtes arriver </li>
					</ol>

					<ol> Plan de route depuis Grenoble (centre)
						<li>Prendre Place de Lavalette et continuer sur 100 m </li>
						<li>Continuer tout droit Pont de la Citadelle et continuer sur 90 m </li>
						<li>Prendre à gauche Quai Mounier et continuer sur 510 m</li>
						<li>Prendre à gauche Rue Marius Gontard et continuer sur 150 m </li>
						<li>Prendre à droite Quai Créqui et continuer sur 250 m </li>
						<li>Prendre à gauche Cours Jean Jaurès et continuer sur 200 m </li>
						<li>Prendre à droite Avenue Félix Viallet et continuer sur 100 m </li>
						<li>Prendre à gauche Rue du Colonel Denfert-Rochereau et continuer sur 300 m </li>
						<li>Prendre à droite Cours Berriat et continuer sur 100 m </li>
						<li>Continuer tout droit Avenue de Vizille et continuer sur 400 m </li>
						<li>Prendre à gauche Place Firmin Gautier et continuer sur 100 m </li>
						<li>Prendre à droite Rue du Vercors et continuer sur 700 m </li>
						<li>Continuer tout droit Pont du Vercors</li>
						<li>Sortir de Grenoble et continuer sur 200 m</li>
						<li>Entrer dans Fontaine et continuer sur 1,1 km </li>
						<li>Prendre à droite Avenue Aristide Briand et continuer sur 1,5 km </li>
						<li>Continuer tout droit Avenue de Romans</li>
						<li>Entrer dans Sassenage et continuer sur 1,8 km </li>
						<li>Au rond-point Place Jean Prévost, prendre à gauche D531 et continuer sur 500 m</li>
						<li>Au rond-point, prendre à gauche Rue Henri Blanc-Fontaine et continuer sur 200 m </li>
						<li>Sortir de Sassenage et continuer sur 1,3 km </li>
						<li>Prendre à gauche Route de Villard-de-Lans (D531) et continuer sur 8,8 km </li>
						<li>Passer par Engins et continuer sur 900 m </li>
						<li>Passer par Les Jaux et continuer sur 4,9 km </li>
						<li>Entrer dans Lans-en-Vercors et continuer sur 1,4 km </li>
						<li>Au rond-point, prendre à droite Route de la Croix Perrin et continuer sur 100 m </li>
						<li>Prendre à gauche Route de Villard et continuer sur 800 m </li>
						<li>Sortir de Lans-en-Vercors et continuer sur 800 m </li>
						<li>Passer par Les Eymards et continuer sur 2,2 km</li>
						<li>Passer par La Côte et continuer sur 1,3 km </li>
						<li>Au rond-point, continuer tout droit Route des Geymonds et continuer sur 400 m</li>
						<li>Entrer dans Villard-de-Lans et continuer sur 900 m </li>
						<li>Prendre à droite Avenue de la Molière et continuer sur 600 m</li>
						<li>Continuer tout droit Avenue de Prénatier (D531) et continuer sur 300 m </li>
						<li>Au rond-point, prendre à droite Route des Jarrands et continuer sur 1,0 km </li>
						<li>Sortir de Villard-de-Lans et continuer sur 1,3 km </li>
						<li>Passer par Les Jarrands et continuer sur 7,9 km </li>
						<li>Passer par La Balme de Rencurel et continuer sur 7,8 km </li>
						<li>Passer par Choranche et continuer sur 4,5 km </li>
						<li>Entrer dans Pont-en-Royans et continuer sur 100 m</li>
						<li>Prendre à droite Pont Picard et continuer sur 500 m </li>
						<li>Prendre à gauche Place du Breuil</li>
						<li>Vous êtes arriver</li>
					</ol>
					<ol> Plan de route depuis Valence (Centre)
						<li>Prendre Place Jean Étienne Championnet et continuer sur 10 m</li>
						<li>Fin de zone piétonne : Continuer avec votre véhicule et continuer sur 65 m</li>
						<li>Prendre à droite Place de la République et continuer sur 95 m</li>
						<li>Continuer tout droit Boulevard du Général de Gaulle et continuer sur 280 m</li>
						<li>Prendre à gauche Avenue Félix Faure et continuer sur 250 m </li>
						<li>Prendre à droite Faubourg Saint-Jacques et continuer sur 100 m</li>
						<li>Prendre à gauche Avenue de Romans et continuer sur 150 m </li>
						<li>Au rond-point, continuer tout droit Avenue de Romans et continuer sur 450 m </li>
						<li>Au rond-point, continuer tout droit Avenue de Romans et continuer sur 1,1 km </li>
						<li>Au rond-point, prendre à gauche Avenue de Romans et continuer sur 1,9 km </li>
						<li>Au rond-point, continuer tout droit Avenue de Romans et continuer sur 200 m</li>
						<li>Sortir de Valence </li>
						<li>Au rond-point, prendre à gauche D432 et continuer sur 1,1 km </li>
						<li>Au rond-point, continuer tout droit Avenue de Provence et continuer sur 200 m</li>
						<li>Entrer dans Saint-Marcel-lès-Valence et continuer sur 200 m </li>
						<li>Au rond-point, prendre à gauche Avenue de Provence et continuer sur 2,2 km </li>
						<li>Au rond-point, prendre à droite </li>
						<li>Prendre à droite N532 et continuer sur 300 m </li>
						<li>Sortir de Saint-Marcel-lès-Valence et continuer sur 21,7 km </li>
						<li>Prendre la sortie 8 et continuer sur D325a et continuer sur 700 m </li>
						<li>Au rond-point, continuer tout droit D325a et continuer sur 300 m</li>
						<li>Prendre à gauche (D325a) et continuer sur 3,2 km </li>
						<li>Passer par Saint-Nazaire-en-Royans et continuer sur 300 m </li>
						<li>Entrer dans Saint-Just-de-Claix et continuer sur 1,8 km </li>
						<li>Au rond-point, prendre à droite D531 </li>
						<li>Prendre à droite et continuer sur 300 m</li>
						<li>Sortir de Saint-Just-de-Claix et continuer sur 2,2 km </li>
						<li>Entrer dans Auberives-en-Royans et continuer sur 500 m </li>
						<li>Prendre à gauche et continuer sur 200 m </li>
						<li>Sortir de Auberives-en-Royans et continuer sur 400 m</li>
						<li>Continuer tout droit Route de la Plaine et continuer sur 1,5 km </li>
						<li>Prendre à droite (D518) et continuer sur 900 m </li>
						<li>Entrer dans Pont-en-Royans et continuer sur 500 m </li>
						<li>Prendre à droite Place du Breuil</li>
						<li>Vous êtes arriver</li>
					</ol>

				</section>
				</article>
				<aside id="aside" role="complementary"><?php include('include/inc_aside.php')?>
				</aside>
				<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php')?>
				</footer>

			</div><!-- fin #content -->
	</body>
</html>
