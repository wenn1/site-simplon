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

					<main id="main" role="main">
						<h3 class="preambule_main">La formation Dévelo'pont</h3>
							<section class="preambule">
								 <h4 class="preambule_main2">Présentation</h4>
										<p class="preambule_titre">Qu'est ce que Dévelo'pont ?</p>
										<p>Pour la première fois en Isère, mais aussi la première fois dans un petit village authentique adossé au Vercors, 
										Simplon.co propose une formation en développement web, en PHP, gratuite et intensive, de 7 mois à partir du mois d’avril 2017.</p>
										<p>Mené dans une démarche d’innovation sociale, ce projet constitue un double défi :</p> 
										<p>• économique : participer à l’endiguement du chômage en répondant aux besoins de recrutement des entreprises du 
										numérique engagées dans cette démarche citoyenne.</p> 
										<p>• social : en agissant sur l’emploi et la qualification de publics marginalisés sélectionnés uniquement sur la 
										base de critères sociaux et de leur motivation, et non selon les diplômes.</p> 
										<p class="preambule_titre">Ou se situe Pont-en-Royans ?</p>
										<p>La formation se passera a Pont-en-Royans, cette commune se situe dans le Royans (Massif du Vercors). Le 
										Royans est l'une des 7 régions naturelles du Parc naturel régional du Vercors. Le point culminant de Pont-en-Royans 
										est le Mont-Baret (786 m d'altitude). Le village se trouve au confluent de la Bourne (source : Lans-en-Vercors) et 
										de la Vernaison (source : Saint-Agnan-en-Vercors).</p> 
										<p>Cette petite bourgade abrite pas loin de 788 habitants, et est aussi un grand lieu de tourisme, grace au musée de l'eau.</p>										
										<p>Le musée vous propose des visites guidées, des ateliers pédagogiques, des animations adaptées à chaque public.
										On visite la salle des eaux du monde, la salle des eaux du Vercors, la salle de  cinéma 3D et le bar à eaux, dans 
										lequel une dégustation d'eaux vous attend.</p>
										<p class="preambule_titre">Ou se passera la formation ?</p>
										<p>La formation se passera dans les locaux de Legrand, grace a leur grande bonté, et le don d'une salle dédié, les 
										etudiants peuvent apprendre et se former, avec du bon materiel afin qu'ils puissent apprendre dans le plus grand confort possible.</p>										
																				
										 
										
							</section>
					</main>
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
