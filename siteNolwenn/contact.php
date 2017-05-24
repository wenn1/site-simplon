<!doctype html>
<html lang="fr">
	<head>
			<?php include('include/inc_head.php')?>
	<meta name="description" content="contact"/>

			<title>Contact</title>

	</head>

	<body role="document">
			<div id="content">
					<nav id="skip"><?php include('include/inc_skip.php') ?>
					</nav>
					<header id="header" role="banner">
							<?php include('include/inc_header.php')?>
					</header>
					<nav id="menu" role="navigation"><?php include('include/inc_menu.php') ?>
					</nav>
					<article id="main" role="main">
								<h3>Formulaire de contact</h3>
								<h4>Veuillez remplir ce formulaire afin de nous contacter</h4>
								<h5>(*) Les champs précédés d'une astérisque sont obligatoires</h4>
									<section class="exercice html">
										<h4>Nous contacter</h4>
										<form method="post" action="resultat.php" enctype="multipart/form-data">
														<input type="hidden" name="parametre cache" value="parametre caché"/>
												<fieldset>
													<legend>Nous contacter par mail</legend>
													<p class="field">
																	<label for="nom1">*Nom</label>
																	<input type="text" name="nom1"
																	id="nom1" value="" size="15" maxlength="20"/>
													</p>
													<p class="field">
																	<label for="prenom1">*Prénom</label>
																	<input type="text" name="prenom1"
																	id="nom1" value="" size="15" maxlength="20"/>
													</p>
													<p class="field">
																	<label for="email">*Email</label>
																	<input id="email" class="h5-email" type="email"
																	maxlength="40" size="30" name="email" required="required" value="" placeholder="Saisir une adresse email valide"/>
													</p>

													<p class="field">
																	<label for="sujet">*Objet du message</label>
																	<input id="sujet" class="h5-sujet" type="sujet"
																	maxlength="30" size="20" name="sujet" required="required" value="" placeholder="objet du message"/>
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
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11255.688199817709!2d5.3131242!3d45.1481754!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88bdc0e74bfeab06!2sLegrand+France!5e0!3m2!1sfr!2sfr!4v1495430431376" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br /><small><a href="https://www.google.fr/maps/place/Legrand+France/@45.1481754,5.3131242,15z/data=!4m5!3m4!1s0x0:0x88bdc0e74bfeab06!8m2!3d45.1481754!4d5.3131242" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
									</section>
					</article>
					<aside id="aside" role="complementary"><?php include('include/inc_aside.php')?>
					</aside>
					<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php')?>
					</footer>

			</div><!-- fin #content -->
	</body>
</html>
