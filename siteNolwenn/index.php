<!doctype html>
<html lang="fr">
	<head>
			<?php include('include/inc_head.php') ?>
			<meta name="description" content="titre de la page"/>
			<title>Accueil</title>
	</head>

	<body role="document">
			<div id="content">
					<nav id="skip"><?php include('include/inc_skip.php') ?>
					</nav>

					<!-- En-tête de page -->
					<header id="header" role="banner">
							<?php include('include/inc_header.php') ?>
					</header>

					<!-- barre principale de navigation -->
					<nav id="menu" role="navigation"><?php include('include/inc_menu.php') ?>
					</nav>

					<!-- Page principale -->
					<article id="main" role="main">
						<h3>La formation Dévelo'pont</h3>
							<section class="preambule">
								 <h4>Présentation</h4>
										 <p>Pour la première fois en Isère, mais aussi la première fois dans un petit village
											 authentique adossé au Vercors, Simplon.co propose une formation en développement web,
											 en PHP, gratuite et intensive, de 7 mois à partir du mois d’avril 2017.</p>
											 <p>Mené dans une démarche d’innovation sociale, ce projet constitue un double défi :
											• économique : participer à l’endiguement du chômage en répondant aux besoins de recrutement
											des entreprises du numérique engagées dans cette démarche citoyenne,
											• social : en agissant sur l’emploi et la qualification de publics marginalisés sélectionnés uniquement
											sur la base de critères sociaux et de leur motivation, et non selon les diplômes.</p>
							</section>
					</article>
					<!-- Partie latérale -->
					<aside id="aside" role="complementary"><?php include('include/inc_aside.php') ?>
					</aside>

					<!-- Pied de page -->
					<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php') ?>
					</footer>

			</div><!-- fin #content -->

			<!-- Animation du logo Develo'pont sur la page d'accueil -->
		<!--	<script>
			$("p#valid")
							// propriétés CSS au chargement
							.css('top','95%')
							.css('left', '70%')
							// position initiale
							.animate({
										left: '5px',
										top: '3em'
							}, 3500); // Durée de l'animation
					$("#header img")
									// propriétés CSS au chargement
									.css ('position', 'relative')
									.css ('left','100%')
									// position initiale
									.animate({
												left: '10px'
							}, 4000 ); // Durée de l'animation
			</script> -->
	</body>
</html>
